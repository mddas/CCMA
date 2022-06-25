<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
    'name',
    'category_id',
    'type',
    ];

    public function getCategory(){
        return $this->belongsTo(Category::class,"category_id");//in subcategory model default id 
        //is id and category id is category_id
    }
}
