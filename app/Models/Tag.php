<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guard= [''];

    public function creatorinfo(){
        return $this->belongsTo(User::class,'tag_creator');
    }
    public function editorinfo(){
        return $this->belongsTo(User::class,'tag_editor');
    }
    use HasFactory;
}
