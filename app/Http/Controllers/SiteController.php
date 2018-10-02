<?php namespace App\Http\Controllers;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }

    public function noticias()
    {
        return view('noticias');
    }

    public function eventos()
    {
        return view('eventos');
    }

    public function about()
    {
        return view('about');
    }

}
