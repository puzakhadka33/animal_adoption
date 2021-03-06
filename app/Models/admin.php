<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $fillable=['id','user_id','alt_email','status','image'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

     public function blog(){
         return $this->hasMany(blog::class,'blog_id');
     }
}
