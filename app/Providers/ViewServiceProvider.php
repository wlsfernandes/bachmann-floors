<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\Footer;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Setting;
use App\Models\SocialLink;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        view()->composer('frontend.*', function ($view) {

            $setting = Setting::query()->first();
            $pages = Page::visible()->get();
            $footer = Footer::query()->first();
            $menu = MenuItem::query()
                ->main()
                ->with('children')
                ->orderBy('order')
                ->get();

            $socialLinks = SocialLink::query()
                ->where('is_published', true)
                ->ordered()
                ->get();

            $blogs = Blog::visible()
                ->orderByDesc('created_at')
                ->get();
            $events = Event::visible()
                ->orderByDesc('created_at')
                ->get();

            $view->with([
                'setting' => $setting,
                'socialLinks' => $socialLinks,
                'footer' => $footer,
                'blogs' => $blogs,
                'events' => $events,
                'pages' => $pages,
                'menu' => $menu,

            ]);
        });
    }
}
