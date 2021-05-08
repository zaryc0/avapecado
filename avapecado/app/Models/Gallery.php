<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable  = ['name'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
