<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Basic;
use App\Models\SocialMedia;
use carbon\carbon;
use Session;
use Auth;
use Image;

class BasicController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    public function basic(){
        $basic = Basic::where('basic_id',1)->first();
        return view('admin.basic.add',compact('basic'));
    }
    public function basic_update(Request $request){
        // return $request->all();
        $this->validate($request,([
            'logotitle'=>'required',
            'copyright'=>'required',
        ]));
        $editor=Auth::user()->id;

        if($request->hasFile('mlogo')){
            $image=$request->file('mlogo');
            $image_name='MLogo-'.uniqId().'.'.$image->getClientOriginalExtesion();
            Image::make($image)->save('uploads/admin/basic' .$image_name);
        }

        $update= Basic::where('basic_id',1)->update([
            'basic_logo'=>$image_name ?? null,
            'basic_logo_title'=>$request['logotitle'],
            'basic_about'=>$request['about'],
            'basic_copyright'=>$request['copyright'],
            'basic_editor'=>$editor,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('Success','Succesfuly Upadte Basic');
            return redirect('dashboard/basic');
        }
    }

    public function social(){
        $socialLinks=SocialMedia::where('id',1)->first();
        // return $socialLinks;
        return view('admin.basic.social',compact('socialLinks'));
    }

    public function social_update(Request $request){

        $update=SocialMedia::where('id',1)->update([
            'sm_facebok'=>$request['facebook'],
            'sm_insta'=>$request['insta'],
            'sm_youtube'=>$request['youtube'],
            'sm_twitter'=>$request['twitter'],
            'sm_linkedIn'=>$request['Linkedin'],
            'sm_dribble'=>$request[''],
        ]);
        // return $request->all();
        if($update){
            Session::flash('Success','Social Links Edited');
            return redirect()->back();
        }
    }
}
