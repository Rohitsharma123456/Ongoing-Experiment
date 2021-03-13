<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ChildCommentModel;
use App\Scopes\ParentCommentScope;

class ParentCommentModel extends Model
{
    use HasFactory;
    protected $table='comments';
    protected static function booted(){
    	static::addGlobalScope(new ParentCommentScope);
    }
    public function childcomment(){
    	return $this->hasMany(ChildCommentModel::class,'comment_id','id');
    }
}
