<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'size',
        'category_id',
        'image'
    ];
    
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'category_id');
    }

}
