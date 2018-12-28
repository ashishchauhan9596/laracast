<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
    	return view('welcome')->with([
    		'tasks' =>[
    			'Go to market',
				'Go to work',
				'Go to store',
				'No sleep'
    		],
    		'foo' => "FOOBAR"
    	]);
    }

    public function about()
    {
    	return view('about');
    }

    public function contact()
    {
    	return view('contact');
    }

}
