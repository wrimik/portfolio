<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $view = view($slug);
        return $view;
    }

    public function history()
    {
        return view('history');
    }
    public function contact()
    {
        return view('contact');
    }
    public function skills()
    {
        return view('skills');
    }

    public function home()
    {
        return view('welcome');
    }

}
