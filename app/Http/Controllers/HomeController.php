<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $page = Page::visible()
            ->where('slug', 'home')
            ->with([
                'banners' => fn ($q) => $q->published()->orderBy('sort_order'),
                'sections' => fn ($q) => $q->published(),
            ])
            ->firstOrFail();
        if (! $page) {
            return 'Homepage not configured. Run db:seed.';
        }

        return view('frontend.pages.show', compact('page'));
    }

    public function pulpitFellows()
    {
        return view('frontend.pulpit-fellows.index');
    }
}
