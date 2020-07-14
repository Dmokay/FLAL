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


}
