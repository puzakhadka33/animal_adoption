<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    protected $fillable = ['user_role'];

    /**
     * One-to-many relationship
     */
    public function users(){
        return $this->hasMany(User::class);
    }
    /**
     * Many-to-many Relationship
     */
    public function rules(){
        return $this->belongsToMany(PermissionRule::class, 'user_role_permission_rules');
    }
}
