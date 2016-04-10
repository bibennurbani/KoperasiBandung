<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Barang;
use App\Http\Requests;

class BarangController extends Controller
{
    //
    public function index(){
    	$data['barang'] = Barang::paginate();
    	//return view('pages.pendataan.barang', compact('barang'));
    	return view('pages.pendataan.barang')->with($data);
	}

	 /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }
}
