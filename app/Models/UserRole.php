<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    protected $primaryKey ='rol_id';

    public function userinfo(){
        return $this->hasMany(User::class,'rol_id');
    }
}
