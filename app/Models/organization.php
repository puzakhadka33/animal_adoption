<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organization extends Model
{
    use HasFactory;
    protected $fillable =['id','user_id','alt_email','status','image'];

    public function user(){
        // dd($this->belongsTo(User::class, 'user_id'));
        return $this->belongsTo(User::class,'user_id');
    }
    public function animals(){
        return $this->hasMany(animal::class);
    }

    public function message(){
        return $this->hasMany(message::class);
    }

    public function adoption(){
        return $this->hasMany(adoption::class);
    }
}
