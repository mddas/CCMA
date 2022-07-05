<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
    'name',
    'type',
    ];
    public function getSubcategory(){
        return $this->hasMany(SubCategory::class);
    }

    static function getcategory($id){
        $cat =  Category::find($id);
        return $cat->name;
    }
    
}
