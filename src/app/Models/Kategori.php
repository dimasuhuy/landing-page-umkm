<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{

    public function menus()
    {
        return $this->hasMany(Menu::class, 'category_id');
    }

    protected $table = 'kategoris';

    protected $fillable = [
        'name',
    ];

    protected $connection = 'pgsql';

    public static function boot()
    {
        parent::boot();

        static::created(function ($kategori) {
            $kategori->replicateToMysql();
        });

        static::updated(function ($kategori) {
            $kategori->replicateToMysql();
        });

        static::deleted(function ($kategori) {
            $kategori->deleteFromMysql();
        });
    }

    public function replicateToMysql()
    {
        $existing = self::on('mysql')->find($this->id);

        if ($existing) {
            // Update data yang ada
            $existing->fill($this->attributesToArray());
            $existing->save();
        } else {
            // Create baru jika tidak ada
            $data = $this->replicate();
            $data->setConnection('mysql');
            $data->save();
        }
    }

    public function deleteFromMysql()
    {
        $mysqlKategori = (new self)->setConnection('mysql')->find($this->id);
        if ($mysqlKategori) {
            $mysqlKategori->delete();
        }
    }
}
