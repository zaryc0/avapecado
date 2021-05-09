<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Image extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $fillable  = ['name','alt_text','gallery_id'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function elements()
    {
        return $this->hasMany(Element::class);
    }

    public function getUrlAttribute()
    {
        $image = $this->getMedia('images')->first();

        if (is_null($image))
        {
            return;
        }

        return $image->getUrl();
    }
}
