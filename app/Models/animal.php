<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animal extends Model
{
    use HasFactory;
    protected $fillable=['id','category_id','organization_id','name','color','height','weight','length','breed', 'image'];

    public function category(){
        return  $this->belongsToMany(Category::class,'category_id');
    }
    
    public function organization(){
        return  $this->belongsTo(Organization::class,'organization_id');
    }
    
}
