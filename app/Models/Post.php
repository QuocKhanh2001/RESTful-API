<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
   
    protected $table = 'posts';
    
    //protected $primary ='id';
    //public $increment =false;
    //protected $keyType ='string';
    //public $timestamp =false; luu lai thoi gian cap nhat,


    protected $fillable = ['title', 'content','status'];
}
