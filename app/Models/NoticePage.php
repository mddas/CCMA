<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticePage extends Model
{
    use HasFactory;
     protected $fillable = [
    'title',
    'discription',
    'uploadto',
    'image',
    ];

    // public function getCategory(){
    //     return $this->belongsTo(Category::class,"category_id");//in subcategory model default id 
    //     //is id and category id is category_id
    // }
}
