<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Tag;
use App\Models\Basic;
use App\Models\SocialMedia;
use App\Models\Subscribe;
use carbon\carbon;
use Session;
class WebsiteController extends Controller
{

    public function index(){
        $repost = Post::with('postcreat','Postcat','tags')->where('post_status','1')->orderby('created_at','DESC')->simplePaginate(9);
        $post = Post::with('postcreat','Postcat','tags')->where('post_status','1')->orderBy('id','ASC')->take(5)->get();
        // toop Post
        $firstPost = $post->splice(0,2);
        $middlePost = $post->splice(0,1);
        $lastPost = $post->splice(0);
        // return $lastPost;
        // Footer Post
        $footerPost =Post::with('postcreat','Postcat','tags')->where('post_status','1')->inRandomOrder()->take(4)->get();
        $firstFooterPost = $footerPost->splice(0,1);
        $middleFooterPost = $footerPost->splice(0,2);
        $lastFooterPost = $footerPost->splice(0);
        // return $middleFooterPost;
        return view('website.post.index',compact(['repost','firstPost','middlePost','lastPost','lastFooterPost','middleFooterPost','firstFooterPost']));
    }
    public function view($slug){
        $view=Post::with('postcreat','PostCat','tags')->where('post_status','1')->where('post_slug',$slug)->first();
        // return $view;
        $popupost= Post::where('post_status','1')->inRandomOrder()->limit(3)->get();
        $category= Category::with('posts')->where('cat_status','1')->orderBy('cat_id','DESC')->get();
        $tags= Tag::where('tag_status','1')->orderBy('id','DESC')->get();
        // return $tag;
        $relatePost= Post::with('Postcat')->where('post_status','1')->orderBy('cat_id','DESC')->inRandomOrder()->take(4)->get();

        $toprelpost = $relatePost->splice(0,1);
        $middlerelpost = $relatePost->splice(0,2);
        $lastrelpost = $relatePost->splice(0);
        // return $middlerelpost;
        return view('website.post.view',compact('view','popupost','category','tags','toprelpost','middlerelpost','lastrelpost'));
    }
    public function category($slug){
        $category=Category::with('posts')->where('cat_status','1')->where('cat_slug',$slug)->first();
        // return $category->posts;
        if($category){
            $post=Post::where('post_status','1')->where('cat_id',$category->id)->simplePaginate(5);
            return view('website.category.category',compact(['category','post']));
        }
        else{
        return redirect('/');
        }
    }

    public function insert(Request $request){
        // return $request->all();
        // $this->validate($request,[
        //     'sub_email'=>'required|unique:subcribes',
        // ]);

        $insert=Subscribe::insertGetId([
            'sub_email'=>$request['subscribe'],
            'sub_slug'=>'sub-'.uniqId(),
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);
        if($insert){
            return redirect('/');
        }
        else{
            return "failed";
        }
    }

}
