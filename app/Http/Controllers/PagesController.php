<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home(){
		$people = ['Nguyen','Huy','Hoang'];
	    return view('welcome',compact('people'));
    }
}
