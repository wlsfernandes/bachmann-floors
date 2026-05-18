<?php

namespace App\Http\Controllers;

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
        return view('frontend.home');

    }

    /**
     * Show the projects page.
     *
     * @return Renderable
     */
    public function projects()
    {
        return view('frontend.projects');
    }

    /**
     * Show the services page.
     *
     * @return Renderable
     */
    public function services()
    {
        return view('frontend.services');
    }

    /**
     * Show the contact page.
     *
     * @return Renderable
     */
    public function contact()
    {
        return view('frontend.contact');
    }

    /**
     * Show the about page.
     *
     * @return Renderable
     */
    public function about()
    {
        return view('frontend.about');
    }
}
