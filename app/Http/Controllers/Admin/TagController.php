<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Tag;
use carbon\carbon;
use Auth;
use Session;

class TagController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    public function index(){
        $alltag=Tag::where('tag_status','1')->orderBy('id','DESC')->simplePaginate(10);
        return view('admin.blog.tag.all',compact('alltag'));
    }
    public function add(){
        return view('admin.blog.tag.add');
    } 
    public function insert(Request $request){
        $this->validate($request,[
            'tag_title'=>'required|unique:tags'
        ]);

        $creator=Auth::user()->id;
        $insert=Tag::insert([
            'tag_title'=>$request['tag_title'],
            'tag_description'=>$request['tag_detail'],
            'tag_creator'=>$creator,
            'tag_slug'=>'tag-'.uniqid(10),
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);
        if($insert){
            Session::flash('success','Successfully Created Tag');
            return redirect('dashboard/blog/tag');
        }
    }

    public function view($slug){
        $view=Tag::where('tag_status','1')->where('tag_slug',$slug)->first();
        return view('admin.blog.tag.view',compact('view'));

    }

    public function edit($slug){
        $edit=Tag::where('tag_status','1')->where('tag_slug',$slug)->first();
        return view('admin.blog.tag.edit',compact('edit'));
    }
    public function update(Request $request){

        $id=$request['id'];
        $slug=$request['slug'];
        $editor=Auth::User()->id;

        $update=Tag::where('id',$id)->update([
            'tag_title'=>$request['tag_title'],
            'tag_description'=>$request['tag_detail'],
            'tag_editor'=>$editor,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            return redirect('dashboard/blog/tag/view/'.$slug);
        }
        else{
            return redirect('dashboard/blog/tag/edit/'.$slug);
        }
    }
    public function softdelete(Request $request){
        $id = $request['modal_id'];
        $delete =Tag::where('tag_status','1')->where('id',$id)->update([
            'tag_status'=>0,
            'tag_editor'=>Auth::user()->id,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($delete){
            Session::flash('success','Successfully Deleted');
            return redirect()->back();
        }
    }
}
