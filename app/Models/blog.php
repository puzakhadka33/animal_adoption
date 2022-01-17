<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $fillable=['id','admin_id','title','description','image'];

    public function admin(){
        return $this->belongsTo(Admin::class,'admin_id');
    }
}
