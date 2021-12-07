<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionRule extends Model
{
    use HasFactory;
    protected $fillable = ['rule', 'app_component_id'];

    /**
     * One-to-many relationship
     */
    public function app_component(){
        return $this->belongsTo(AppComponent::class, 'app_component_id');
    }
    /**
     * Reverse of the m-m relationsip
     */
    public function roles(){
        return $this->belongsToMany(UserRole::class, 'user_role_permission_rules');
    }
}
