<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use HasFactory;
    
    protected $fillable = ['post_title'];

    public function Postcat(){
        return $this->belongsTo(Category::class,'cat_id');
    }

    public function postcreat(){
        return $this->belongsTo(User::class,'post_creator');
    }
    public function postedit(){
        return $this->belongsTo(User::class,'post_editor');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class,'post_tag','post_id','tag_id');
    }
   
}
