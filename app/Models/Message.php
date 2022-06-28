<?php
//this model is used to take user contact and store in database.
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
    'name',
    'number',
    'email',
    'message',
    ];
}
