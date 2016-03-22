<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Status;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class StatusController extends Controller
{
    public function index(){
    	return Status::all();    
    }    
}
