<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $fillable=['id','user_id','image'];
    
    public function user(){
        // dd($this->belongsTo(User::class, 'user_id'));
        return $this->belongsTo(User::class,'user_id');
    }

    public function adoption(){
    
        return $this->hasMany(adoption::class,'adoption_id');
    }

    public function message(){
        return $this->hasMany(message::class,'message_id');
    }
}
