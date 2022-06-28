<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;
  protected $fillable = [
        'title',
        'discription',
        'uploadto',
        'keyword',
        'image',
    ];
     public static function getSeo(){
         return Seo::all()->last();
     }
}
