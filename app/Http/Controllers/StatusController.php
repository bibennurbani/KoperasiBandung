<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Status;
use App\Http\Requests;


class StatusController extends Controller
{
    public function index(){
    	//return view('pages/home');
    	$data['status'] = Status::all();
        return view('pages/status')->with($data);    
    }    
}
