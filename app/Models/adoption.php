<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adoption extends Model
{
    use HasFactory;
    protected $fillable=['id','animal_id','organization_id','date','description','status','client_id'];

    public function animal(){
        return $this->belongsTo(Animal::class,'animal_id');
    }
    public function organization(){

        return $this->belongsTo(Organization::class,'organization_id');
    }
    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }

}
