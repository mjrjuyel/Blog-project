<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserRole;
use carbon\carbon;
use Session;
use Auth;
use Image;



class RoleUserController extends Controller
{
  public function __construct(){
    return $this->middleware('auth');
  }

  public function index(){
    $allrole=UserRole::with('userinfo')->where('role_status','1')->get();
    // return $allrole;
    return view('admin.role.all',compact('allrole'));
  }
  public function add(){
    return view('admin.role.add');
  }

  public function insert(Request $request){
    $this->validate($request, [
      'role'=>'required',
    ]);
    $slug='Role-'.uniqId(10);
    $insert=UserRole::insertGetId([
        'role_title'=>$request['role'],
        'role_slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString(),
    ]);

    // if($request->hasFile('pic')){
    //   $image=$request->file('pic');
    //   $imageName='Role-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();

    //   Image::make($image)->save('uploads/admin/user/'.$imageName);

    //   UserRole::where('rol_id',$insert)->update([
    //       'role_photo'=>$imageName,
    //       'updated_at'=>Carbon::now()->toDateTimeString(),
    //   ]);
    // }
    // return $request->collect();
    if($insert){
      Session::flash('Success','SuccessFull to Create Role');
        return redirect('/dashboard/user/role/add');
    }
    else{
      Session::flash('Error','Failed To Xreate');
        return redirect('/dashboard/user/role/insert');
    }
  }
}
