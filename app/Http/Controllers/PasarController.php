<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PasarController extends Controller
{
    //
    public function index(){
    	return view('pages.pendataan.supplier');
	}
}
