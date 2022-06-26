<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoPage extends Model
{
    use HasFactory;
     protected $fillable = [
    'title',
    'discription',
    'uploadto',
    'video',
    ];

    // public function getCategory(){
    //     return $this->belongsTo(Category::class,"category_id");//in subcategory model default id 
    //     //is id and category id is category_id
    // }
}
