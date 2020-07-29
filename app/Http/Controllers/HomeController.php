<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('home');
    }

    public function about()
    {
         return view('company.about');
    }
    public function history()
    {
        return view('company.history');
    }
    public function team()
    {
        return view('company.team');
    }
    public function clearing()
    {
        return view('services.clearing_forwading');
    }
    public function cargo()
    {
        return view('services.cargo');
    }
    public function land()
    {
        return view('services.land');
    }
    public function air()
    {
        return view('services.air');
    }
    public function board()
    {
        return view('services.board');
    }
    public function sea()
    {
        return view('services.sea');
    }
    public function warehouse()
    {
        return view('services.warehouse');
    }
    public function logistics()
    {
        return view('services.logistics');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function news()
    {
        return view('news');
    }
    public function contact()
    {
        return view('contact');
    }


}
