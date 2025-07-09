<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Admin extends Model implements AuthenticatableContract
{
    protected $table = 'admins';

    use HasFactory, Authenticatable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $connection = 'pgsql';

    public static function boot()
    {
        parent::boot();

        static::created(function ($admin) {
            $admin->replicateToMysql();
        });

        static::updated(function ($admin) {
            $admin->replicateToMysql();
        });

        static::deleted(function ($admin) {
            $admin->deleteFromMysql();
        });
    }

    public function replicateToMysql()
    {
        $existing = self::on('mysql')->where('email', $this->email)->first();

        if ($existing) {
            // Optional: update data yang sudah ada
            $existing->fill($this->attributes);
            $existing->save();
        } else {
            // Buat data baru
            $data = $this->replicate();
            $data->setConnection('mysql');
            $data->save();
        }
    }

    public function deleteFromMysql()
    {
        $mysqlAdmin = (new self)->setConnection('mysql')->find($this->id);
        if ($mysqlAdmin) {
            $mysqlAdmin->delete();
        }
    }
    // protected $hidden = [
    //     'password',
    // ];
}
