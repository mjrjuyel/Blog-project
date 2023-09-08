<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscribe;
use carbon\carbon;
use Session;

class SubscribeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $all=Subscribe::all();
        // return $all;
        return view('admin.subscribe.all',compact('all'));
    }
    public function view($slug){
        $view = Subscribe::where('sub_slug',$slug)->first();
        return view('admin.subscribe.view',compact('view'));
    }
}
