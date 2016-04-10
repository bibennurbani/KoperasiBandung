<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Status;
use App\Http\Requests;


class UserController extends Controller
{
    public function index(){
        return view('pages.pendataan.buruh');
    }    
}
