<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='product';
    protected $fillable = [
        'name',
        'description',
        'price',
        'imgUrl',
        'tag_id'
    ];

    public function stock()
    {
        return $this->hasMany(Stock::class);
    }
}
