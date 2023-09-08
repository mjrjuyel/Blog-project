<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Basic;
use App\Models\SocialMedia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // view()->composer('layouts.website', function ($view) {
        //     $categories = Category::where('cat_status','1')->take(5)->get(); 
        //     $view->with('categories', $categories);
        // });

        $basics =Basic::where('basic_id','1')->first();
        $categories = Category::where('cat_status','1')->take(5)->get();
        $socials = SocialMedia::where('id','1')->first();
        View::composer('layouts.website', function ($view) use ( $categories, $basics,$socials ) {
            $view->with('categories', $categories);
            $view->with('basics', $basics);
            $view->with('socials', $socials);
        });

        

        
        
    }
}
