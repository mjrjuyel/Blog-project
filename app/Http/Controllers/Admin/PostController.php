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
      $post=Post::where('post_status','1')->orderBy('id','DESC')->get();
      // dd($post);
      // return $post;
      return view('admin.blog.post.all',compact('post'));
   }


   public function add(){
    return view('admin.blog.post.add');
   }


   public function insert(Request $request){

      $creator=Auth::user()->id;

      

      if($request->hasFile('post_pic1')){
         $image=$request->file('post_pic1');
         $image_1_Name='post-pic-1-'.uniqId().'.'.$image->getClientOriginalExtension();

         Image::make($image)->save('uploads/admin/post/'.$image_1_Name);

         // Post::where('id',$insert)->update([
         //    'post_pic1'=>$imageName,
         //    'updated_at'=>Carbon::now()->toDateTimeString(),
         // ]);
      }

      // if($request->hasFile('post_pic2')){
      //    $image=$request->file('post_pic2');
      //    $imageName='post-pic-4-'.uniqid().'-'.'.'.$image->getClientOriginalExtension();

      //    Image::make($image)->save('uploads/admin/post/'.$imageName);

      //    Post::where('id',$insert)->update([
      //       'post_pic4'=>$imageName,
      //       'updated_at'=>Carbon::now()->toDateTimeString(),
      //    ]);
      // }

      // if($request->hasFile('post_pic3')){
      //    $image=$request->file('post_pic3');
      //    $imageName='post-pic-3-'.time().'-'.'.'.$image->getClientOriginalExtension();

      //    Image::make($image)->save('uploads/admin/post/'.$imageName);

      //    Post::where('id',$insert)->update([
      //       'post_pic3'=>$imageName,
      //       'updated_at'=>Carbon::now()->toDateTimeString(),
      //    ]);
      // }

      // if($request->hasFile('post_pic4')){
      //    $image=$request->file('post_pic4');
      //    $imageName='post-pic-4-'.time().'-'.'.'.$image->getClientOriginalExtension();

      //    Image::make($image)->save('uploads/admin/post/'.$imageName);

      //    Post::where('id',$insert)->update([
      //       'post_pic4'=>$imageName,
      //       'updated_at'=>Carbon::now()->toDateTimeString(),
      //    ]);
      // }

      $insert=Post::create([
         'post_title'=>$request['post_title'],
         'post_detail'=>$request['post_detail'],
         'cat_id'=>$request['post_cat'],
         'post_creator'=>$creator,
         'post_pic1'=>$image_1_Name ?? null,
         'post_slug'=>'post-'.uniqId(),
         'published_at'=>carbon::now()->toDateTimeString(),
         'created_at'=>carbon::now()->toDateTimeString(),
      ]);
      // return $request->all();
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
      $tag=Tag::all();
      $edit=Post::where('post_status','1')->where('post_slug',$slug)->first();
      return view('admin.blog.post.edit',compact(['edit','tag']));
   }


   public function update(Request $request){
      $id=$request['id'];
      $slug=$request['slug'];

      if($request->hasFile('post_pic1')){
         $image=$request->file('post_pic1');
         $image_1_Name='post-pic-1-'.uniqId().'-'.'.'.$image->getClientOriginalExtension();

         Image::make($image)->save('uploads/admin/post/'.$image_1_Name);

         // Post::where('id',$id)->update([
         //    'post_pic1'=>$imageName,
         //    'updated_at'=>Carbon::now()->toDateTimeString(),
         // ]);
      }

      // if($request->hasFile('post_pic2')){
      //    $image=$request->file('post_pic2');
      //    $imageName='post-pic-4-'.time().'-'.'.'.$image->getClientOriginalExtension();

      //    Image::make($image)->save('uploads/admin/post/'.$imageName);

      //    Post::where('id',$id)->update([
      //       'post_pic4'=>$imageName,
      //       'updated_at'=>Carbon::now()->toDateTimeString(),
      //    ]);
      // }

      // if($request->hasFile('post_pic3')){
      //    $image=$request->file('post_pic3');
      //    $imageName='post-pic-3-'.time().'-'.'.'.$image->getClientOriginalExtension();

      //    Image::make($image)->save('uploads/admin/post/'.$imageName);

      //    Post::where('id',$id)->update([
      //       'post_pic3'=>$imageName,
      //       'updated_at'=>Carbon::now()->toDateTimeString(),
      //    ]);
      // }

      // if($request->hasFile('post_pic4')){
      //    $image=$request->file('post_pic4');
      //    $imageName='post-pic-4-'.time().'-'.'.'.$image->getClientOriginalExtension();

      //    Image::make($image)->save('uploads/admin/post/'.$imageName);

      //    Post::where('id',$id)->update([
      //       'post_pic4'=>$imageName,
      //       'updated_at'=>Carbon::now()->toDateTimeString(),
      //    ]);
      // }

      $update = Post::where('post_status', '1')->where('id', $id)->first();

      if ($update) {
         $update->update([
            'post_title' => $request['post_title'],
            'post_detail' => $request['post_detail'],
            'cat_id' => $request['post_cat'],
            'post_editor' => Auth::user()->id,
            'published_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
         ]);

         $update->tags()->sync($request->tags);
      } else {
         return 'Error to update';
      }
   //   Below The Method Is give You Back An error with call the member function tags() int
      // $update=Post::where('post_status','1')->where('id',$id)->update([
      //    'post_title'=>$request['post_title'],
      //    'post_detail'=>$request['post_detail'],
      //    'cat_id'=>$request['post_cat'],
      //    'post_editor'=>Auth::user()->id,
      //    'published_at'=>carbon::now()->toDateTimeString(),
      //    'Updated_at'=>carbon::now()->toDateTimeString(),
      // ]);
      // // return $request->all();
      // $update->tags->sync($request->tags);
      
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
