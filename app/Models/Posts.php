<?php

namespace App\Models;
use App\Models\Author;
use App\Models\Comments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    public function author(){
    	return $this->belongsTo(Author::class,'authorid','id');
    }

    public function comments(){
    	return $this->hasMany(Comments::class,'post_id');
    }
}
