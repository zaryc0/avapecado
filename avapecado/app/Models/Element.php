<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    protected $table ='element';
    protected $fillable = [ 'name','description','imageAddress','textContent','page_id'];
}
