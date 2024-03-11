<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{

    public function base()
    {
        return view('front.base');
    }
    public function index()
    {
        return view('front.personal.index');
    }

    public function create()
    {
        return view('front.personal.create');
    }

    public function update()
    {
        return view('front.personal.update');
    }
}
