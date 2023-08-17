<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRole;
use App\Exports\UsersExport;
use carbon\carbon;
use Session;
use Image;
use PDF;
use Excel;

class UserController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    public function index(){
        $user=User::where('status','1')->orderBy('id','DESC')->get();
        // return User::with('roleinfo')->get();
        return view('admin.user.all',compact('user'));
    }
    public function add(){
        return view('admin.user.add');
    }

    public function edit($slug){
        $edit=User::where('status','1')->where('slug',$slug)->first();
        return view('admin.user.edit',compact('edit'));
    }

    public function view($slug){
        $view=User::where('status','1')->where('slug',$slug)->first();
        return view('admin.user.view',compact('view'));
    }
    public function insert(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'useremail'=>'required|email',
            'password'=>'required|confirmed|string|min:5|max:10',
        ]);
        $slug='user-'.uniqId(10);
        $insert=User::insertGetId([
            'name'=>$request['username'],
            'email'=>$request['useremail'],
            'phone'=>$request['userphone'],
            'address'=>$request['useraddress'],
            'rol_id'=>$request['userrole'],
            'slug'=>$slug,
            'password'=>Hash::make($request['password']),
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('pic')){
            $image=$request->file('pic');
            $imageName='User-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();

            Image::make($image)->save('uploads/admin/user/'.$imageName);
            User::where('id',$insert)->update([
                'photo'=>$imageName,
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ]);
        }
        if($insert){
            Session::flash('Success','Succesfully created user');
            return redirect('dashboard/user');
        }
        else{
            Session::flash('Success','Failed created user');
            return redirect('dashboard/user/add');
        }
    }
    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $this->validate($request,[
            'username'=>'required',
            'useremail'=>'required|email',
            'password'=>'required|confirmed|string|min:5|max:10',
        ]);

        $insert=User::where('id',$id)->update([
            'name'=>$request['username'],
            'email'=>$request['useremail'],
            'phone'=>$request['userphone'],
            'address'=>$request['useraddress'],
            'rol_id'=>$request['userrole'],
            'password'=>Hash::make($request['password']),
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('pic')){
            $image=$request->file('pic');
            $imageName='User-'.$insert.'-'.time().'.'.$image->getClientOriginalExtension();

            Image::make($image)->save('uploads/admin/user/'.$imageName);
            User::where('id',$insert)->update([
                'photo'=>$imageName,
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ]);
        }
        if($insert){
            Session::flash('Success','Succesfully created user');
            return redirect('dashboard/user');
        }
        else{
            Session::flash('Success','Failed created user');
            return redirect('dashboard/user/add');
        }
    } 

    public function softdelete(Request $request){
        $id=$request['modal_id'];
        $softdel=User::where('status','1')->where('id',$id)->update([
            'status'=>0,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        return "Delete is Done";
    }
    public function pdf(){
        $user=User::where('status','1')->orderBy('id','DESC')->get();
        $pdf = PDF::loadView('admin.user.pdf',compact('user'));
    
        return $pdf->download('userList.pdf');
    }
    public function excel(){
        return Excel::download(new UsersExport, 'userlist.xlsx',\Maatwebsite\Excel\Excel::XLSX);
    }
}
