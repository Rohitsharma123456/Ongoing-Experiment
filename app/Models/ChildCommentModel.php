<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ParentCommentModel;
use App\Scopes\ChildCommentScope;
class ChildCommentModel extends Model
{
    use HasFactory;
    protected $table='comments';
    public function parentcomment(){
    	return $this->belongsTo(ParentCommentModel::class,'comment_id','id');
    }

    protected static function booted(){
       Static::addGlobalScope(new ChildCommentScope);
    }
}
