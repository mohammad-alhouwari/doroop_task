<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Blog;
use App\Models\Message;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $blogCount = Blog::count();
            $messageCount = Message::count();

            $view->with('blogCount', $blogCount)->with('messageCount', $messageCount);
        });
    }
}
