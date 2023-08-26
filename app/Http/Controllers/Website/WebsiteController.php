<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class WebsiteController extends Controller
{

    public function index(){
        $repost = Post::with('postcreat','Postcat')->where('post_status','1')->orderby('created_at','DESC')->simplePaginate(9);
        $post = Post::with('postcreat','Postcat')->where('post_status','1')->orderBy('id','ASC')->take(5)->get();
        // toop Post
        $firstPost = $post->splice(0,2);
        $middlePost = $post->splice(0,1);
        $lastPost = $post->splice(0);
        // return $lastPost;
        // Footer Post
        $footerPost =Post::with('postcreat','Postcat')->where('post_status','1')->inRandomOrder()->take(4)->get();
        $firstFooterPost = $footerPost->splice(0,1);
        $middleFooterPost = $footerPost->splice(0,2);
        $lastFooterPost = $footerPost->splice(0);
        // return $middleFooterPost;
        return view('website.post.index',compact(['repost','firstPost','middlePost','lastPost','lastFooterPost','middleFooterPost','firstFooterPost']));
    }
    public function view($slug){
        $view=Post::with('postcreat','PostCat')->where('post_status','1')->where('post_slug',$slug)->first();
        $popupost= Post::where('post_status','1')->inRandomOrder()->limit(3)->get();
        $category= Category::with('posts')->where('cat_status','1')->orderBy('cat_id','DESC')->get();
        // return $category;
        return view('website.post.view',compact('view','popupost','category'));
    }
    public function category(){
        return view('website.category.category');
    }

}
