<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $table ='page';
    protected $primaryKey ='id';
    protected $fillable = [
        'name'
    ];

    public function elements()
    {
        return $this->hasMany(Element::class);
    }
}
