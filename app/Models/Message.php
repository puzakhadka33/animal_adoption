<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
protected $fillable =['id','organization_id','client_id','image','location','description','lat','lng'];

    public function client(){
        return $this->belongsTo(client::class);
    }
    public function organization(){
        return $this->belongsTo(organization::class);
    }
}
