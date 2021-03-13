<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Comments;
use App\Models\ChildCommentModel;
use App\Models\ParentCommentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FrontendController extends Controller
{
    public function index(){
    	
    	
        
      
      $posts=Posts::with('author')->Simplepaginate(5);
      return view('frontend.index',compact('posts'));

    }

    public function show($id){
     $post=Posts::with('author','comments')->find($id);
     //$comments=FrontendController::getcomments();
     return view('frontend.show',compact('post'));
    }

    public function savecomments($postid,Request $request){
      $model=new Comments;
      $model->comment=$request->comment;
      $model->post_id=$postid;
      $model->comment_id=0;
      $model->save();
      return $response=[$request->comment];
    }

    public function savereply($commentid,$postid,Request $request){
    	$model=new Comments;
    	$model->comment=$request->comment;
    	$model->comment_id=$commentid;
    	$model->post_id=$postid;
    	$model->save();
    }

	// public function getchilds($comment){
 //          $children=Comments::select('comment')->where('comment_id',$comment['id'])->get()->toArray();
        
 //          return  $children;	
     
	// }
  //   public function getcomments(){
  //   	$comments=Comments::all()->toArray();
  //   	$allcomments=[];
    	
  //       foreach($comments as $comment){
  //       	$newarray=[$comment['comment'],FrontendController::getchilds($comment)];
  //       	array_push($allcomments,$newarray);
        	
  //       }
  //       $k=0;
  //      $keys = array_keys($allcomments);
		// for($i = 0; $i < count($allcomments); $i++) {
		// 	echo $keys[$i] . "{<br>";
		// 	foreach($allcomments[$keys[$i]] as $key => $value) {
			
		// 	//var_dump($value);
		// 	// echo ($value['0']['0']);
		// 	// echo "<br>";
			
		// 	}
		// echo "}<br>";
		// }
       
    // }
}
