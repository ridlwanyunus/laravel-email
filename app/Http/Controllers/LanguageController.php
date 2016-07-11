<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;

use Illuminate\Support\Facades\Redirect;

use Lang;

class LanguageController extends Controller
{
    public function english(){
        Lang::setlocale('en');
    	return view('welcome')->with('newMessages', 5);
    }

    public function indonesia(){
        Lang::setlocale('id');
    	return view('welcome')->with('newMessages', 5);
    }
}
