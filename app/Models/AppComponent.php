<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppComponent extends Model
{
    use HasFactory;
    protected $fillable = ['component'];

    /**
     * Reverse of one-to-many relationship
     */
    public function permission_rules(){
        return $this->hasMany(PermissionRule::class, 'app_component_id');
    }
}
