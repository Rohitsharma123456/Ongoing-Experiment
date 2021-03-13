<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Traits\ImageUpload;
use App\Http\Requests\createcatagory;
use App\Http\Requests\createsubcatagory;

use App\Http\Requests\createpost;
use App\Models\Posts;
use App\Models\PostCatagory;
use App\Models\PostSubCatagory;

use Illuminate\Http\Request;

class PostController extends Controller
{
    use ImageUpload;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Posts::simplePaginate(10);
        return view('posts.index',compact('posts'));
    }

    public function Delete($id)
    {
        $post=Posts::find($id)->delete();
        return redirect()->route('posts.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $catagories=PostCatagory::all()->toArray();
       return view('posts.addpost',compact('catagories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createpost $request)
    {
         $model=new Posts;
        $model->title=$request['title'];
        $image=$request->image;
        $model->image=$this->imageupload($image);
        $model->catagory=$request['catagory'];
           $model->subcatagory='Science';
           $model->tags=$request['tags'];
           $model->content=$request['content'];
           $model->authorid=Auth::id();
        $model->save();
        return redirect()->route('posts.index');

            }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Posts::with('author')->find($id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Posts::find($id)->toArray();
         $catagories=PostCatagory::all()->toArray();

        return view('posts.editpost',compact('post','catagories'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(createpost $request,$id)
    {
         $model=Posts::find($id);
        $model->title=$request['title'];
        $image=$request->image;
        $model->image=$this->imageupload($image);
        $model->catagory=$request['catagory'];
           $model->subcatagory='Science';
           $model->tags=$request['tags'];
           $model->content=$request['content'];
        $model->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(posts $post)
    {
        //
        return redirect()->route('posts.index');
    }

    public function addcatagory(){
      return view('posts.addcatagory');

    }
    public function addsubcatagory(){
        $catagories=PostCatagory::all()->toArray();

        return view('posts.addsubcatagory',compact('catagories'));
    }

     public function savecatagory(createcatagory $request){
        $model=new PostCatagory;
        $model->catagory=$request['catagory'];
        $image=$request->image;
        $model->image=$this->imageupload($image);
        $model->save();
        return redirect()->route('posts.index');

    }
    public function savesubcatagory(createsubcatagory $request){

          $model=new PostSubCatagory;
          $model->catagory_id=$request['catagory'];
        $model->subcatagory=$request['subcatagory'];
         $image=$request->image;
        $model->image=$this->imageupload($image);
        $model->save();
        return redirect()->route('posts.index');
    }

    public function getsubcatagory(Request $request){
        $catagory=$request['catagory'];
        $subcatagory=PostSubCatagory::where('catagory',$catagory)->toArray();
        return $subcatagory;
    }
}
