<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'cat_id';

    public function creatorinfo(){
        return $this->belongsTo(User::class,'cat_creator','id');
    }
}
