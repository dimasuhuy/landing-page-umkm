<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'category_id');
    }

    protected $table = 'menus';

    protected $fillable = [
        'name', 'description', 'price', 'size', 'category_id', 'image',
    ];

    // Gunakan koneksi default (pgsql)
    protected $connection = 'pgsql';

    public static function boot()
    {
        parent::boot();

        static::created(function ($menu) {
            // dd('triggered create event');
            $menu->replicateToMysql();
        });

        static::updated(function ($menu) {
            $menu->replicateToMysql();
        });

        static::deleted(function ($menu) {
            $menu->deleteFromMysql();
        });
    }

    public function replicateToMysql()
    {
        // Cek apakah sudah ada data dengan ID yang sama di MySQL
        $existing = self::on('mysql')->where('id', $this->id)->first();

        if ($existing) {
            $existing->fill($this->getAttributes());
            $existing->save();
        } else {
            $copy = $this->replicate();
            $copy->setConnection('mysql');
            $copy->save();
        }
    }

    public function deleteFromMysql()
    {
        $mysqlMenu = (new self)->setConnection('mysql')->find($this->id);
        if ($mysqlMenu) {
            $mysqlMenu->delete();
        }
    }
}
