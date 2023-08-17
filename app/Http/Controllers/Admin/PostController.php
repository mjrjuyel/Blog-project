<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use carbon\carbon;
use Session;
use Auth;
use Image;

class PostController extends Controller
{
   public function __construct(){
    return $this->middleware('auth');
   }

   public function index(){
      $post=Post::where('post_status','1')->orderBy('post_id','DESC')->get();
    return view('admin.blog.post.all',compact('post'));
   }
   public function add(){
    return view('admin.blog.post.add');
   }
   public function insert(Request $request){
      $slug='post-'.uniqId();
      $creator=Auth::User()->id;
      
      
      if($request->hasFile('post_pic1')){
         $image=$request->file('post_pic1');
         $image_1_name='post-pic-1-'.time().'-'.'.'.$image->getClientOriginalExtension();

         Image::make($image)->save('uploads/admin/post/'.$image_1_name);

         // Post::where('post_id',$insert)->update([
         //    'post_pic1'=>$imageName,
         //    'updated_at'=>Carbon::now()->toDateTimeString(),
         // ]);
      }

      if($request->hasFile('post_pic2')){
         $image=$request->file('post_pic2');
         $imageName='post-pic-4-'.uniqid().'-'.'.'.$image->getClientOriginalExtension();

         Image::make($image)->save('uploads/admin/post/'.$imageName);

         Post::where('post_id',$insert)->update([
            'post_pic4'=>$imageName,
            'updated_at'=>Carbon::now()->toDateTimeString(),
         ]);
      }

      if($request->hasFile('post_pic3')){
         $image=$request->file('post_pic3');
         $imageName='post-pic-3-'.time().'-'.'.'.$image->getClientOriginalExtension();

         Image::make($image)->save('uploads/admin/post/'.$imageName);

         Post::where('post_id',$insert)->update([
            'post_pic3'=>$imageName,
            'updated_at'=>Carbon::now()->toDateTimeString(),
         ]);
      }

      if($request->hasFile('post_pic4')){
         $image=$request->file('post_pic4');
         $imageName='post-pic-4-'.time().'-'.'.'.$image->getClientOriginalExtension();

         Image::make($image)->save('uploads/admin/post/'.$imageName);

         Post::where('post_id',$insert)->update([
            'post_pic4'=>$imageName,
            'updated_at'=>Carbon::now()->toDateTimeString(),
         ]);
      }

      $insert=Post::create([
         'post_title'=>$request['post_title'],
         'post_detail'=>$request['post_detail'],
         'cat_id'=>$request['post_cat'],
         'post_creator'=>$creator,
         'post_pic1'=>$image_1_name ?? null,
         'post_slug'=>'post-'.uniqId(),
         'published_at'=>carbon::now()->toDateTimeString(),
         'created_at'=>carbon::now()->toDateTimeString(),
      ]);
      $insert->tags()->attach($request->tags);

      if($insert){
         Session::flash('success','Success Fully Created New Post');
         return redirect('dashboard/blog/post');
      }

      else{
         Session::flash('error','Failed to Created Post');
         return redirect('dashboard/blog/post/add');
      }
   }


   public function view($slug){
      $view=Post::where('post_status','1')->where('post_slug',$slug)->first();

      return view('admin.blog.post.view',compact('view'));
   }

   public function edit($slug){
      $edit=Post::where('post_status','1')->where('post_slug',$slug)->first();
      return view('admin.blog.post.edit',compact('edit'));
   }


   public function update(Request $request){
      
      $id=$request['id'];
      $slug=$request['slug'];
      $update=Post::where('post_status','1')->where('post_id',$id)->update([
         'post_title'=>$request['post_title'],
         'post_detail'=>$request['post_detail'],
         'cat_id'=>$request['post_cat'],
         'post_editor'=>Auth::user()->id,
         'published_at'=>carbon::now()->toDateTimeString(),
         'Updated_at'=>carbon::now()->toDateTimeString(),
      ]);

      if($request->hasFile('post_pic1')){
         $image=$request->file('post_pic1');
         $imageName='post-pic-1-'.time().'-'.'.'.$image->getClientOriginalExtension();

         Image::make($image)->save('uploads/admin/post/'.$imageName);

         Post::where('post_id',$id)->update([
            'post_pic1'=>$imageName,
            'updated_at'=>Carbon::now()->toDateTimeString(),
         ]);
      }
      if($request->hasFile('post_pic2')){
         $image=$request->file('post_pic2');
         $imageName='post-pic-4-'.time().'-'.'.'.$image->getClientOriginalExtension();

         Image::make($image)->save('uploads/admin/post/'.$imageName);

         Post::where('post_id',$id)->update([
            'post_pic4'=>$imageName,
            'updated_at'=>Carbon::now()->toDateTimeString(),
         ]);
      }

      if($request->hasFile('post_pic3')){
         $image=$request->file('post_pic3');
         $imageName='post-pic-3-'.time().'-'.'.'.$image->getClientOriginalExtension();

         Image::make($image)->save('uploads/admin/post/'.$imageName);

         Post::where('post_id',$id)->update([
            'post_pic3'=>$imageName,
            'updated_at'=>Carbon::now()->toDateTimeString(),
         ]);
      }

      if($request->hasFile('post_pic4')){
         $image=$request->file('post_pic4');
         $imageName='post-pic-4-'.time().'-'.'.'.$image->getClientOriginalExtension();

         Image::make($image)->save('uploads/admin/post/'.$imageName);

         Post::where('post_id',$id)->update([
            'post_pic4'=>$imageName,
            'updated_at'=>Carbon::now()->toDateTimeString(),
         ]);
      }
      if($update){
         Session::flash('success','Update SuccessFully');
         return redirect('dashboard/blog/post/view/'.$slug);
      }
   }

   public function delete($slug){
      $delete=Post::where('post_slug',$slug)->delete();

      if($delete){
         return redirect('dashboard/blog/post');
      }
   }
}
