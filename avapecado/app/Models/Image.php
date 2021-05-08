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

    public function getUrlAttribute()
    {
        return $this->getMedia('images')->first()->getUrl();
    }
}
