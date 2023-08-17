<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Category;
use carbon\carbon;
use Auth;
use Session;

class CategoryPostController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }


    public function index(){
        $category=Category::where('cat_status','1')->orderBy('cat_id','DESC')->simplePaginate(5);
        return view('admin.blog.category.all',compact('category'));
    }


    public function view($slug){
        $view=Category::where('cat_status','1')->where('cat_slug',$slug)->first();
        return view('admin.blog.category.view',compact('view'));
    }


    public function add(){
        return view('admin.blog.category.add');
    }


    public function insert(Request $request){

        $this->validate($request,[
            'cat_title'=>'required|unique:categories'
        ],[
            'cat_title.required'=>'Enter Category Title',
        ]);

        $creator=Auth::user()->id;
        $slug='cat-'.uniqId();
        // return $request->collect();
        $insert=Category::insertGetId([
            'cat_title'=>$request['cat_title'],
            'cat_detail'=>$request['cat_detail'],
            'cat_slug'=>$slug,
            'cat_creator'=>$creator,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','Successfull Add Blog Category');
            return redirect('dashboard/blog/category');
        }
        else{
            Session::flash('error','Failed To create Blog Category');
            return redirect('dashboard/blog/category/add');
        }
    }


    public function edit($slug){
        $edit=Category::where('cat_status','1')->where('cat_slug',$slug)->first();
        return view('admin.blog.category.edit',compact('edit'));
    }


    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $update=Category::where('cat_id',$id)->update([
            'cat_title'=>$request['cat_title'],
            'cat_detail'=>$request['cat_detail'],
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('Success','Update Succesfully');
            return redirect('dashboard/blog/category/view/'.$slug);
        }
        else{
            return redirect('dashboard/blog/category/edit'.$slug);
        }
    }

    public function softdelete(Request $request){
        $id=$request['modal_id'];
        $delete= Category::where('cat_status','1')->where('cat_id',$id)->update([
            'cat_status'=>0,
            'cat_editor'=>Auth::user()->id,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);
        if($delete){
            return redirect()->back();
        }
    }
}
