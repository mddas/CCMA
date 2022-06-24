<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteDetails extends Model
{
    use HasFactory;
protected $fillable = [
    'name',
    'date',
    'number',
    'email',
    'address',
    'logo',
    'image',
    'discription',
    ];
    public function getJobDetail(){
        return $this->belongsTo(Job::class,'job_id');
    }
}
