<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    //
    public function index(){

        $data = buku::all();
        return view('databuku', compact('data'));
    }

    public function tambahbuku(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        buku::create($request->all());
        return redirect()->route('buku');
    }

    public function tampilkandata($id){

        $data = buku::find($id);
        return view('tampilkandata', compact('data'));
    }

    public function updatedata(Request $request, $id){

        $data = buku::find($id);
        $data->update($request->all());
        return redirect()->route('buku');
    }

    public function delete($id){

        $data = buku::find($id);
        $data->delete();
        return redirect()->route('buku');
    }

    public function detailbuku($id){

        $data = buku::find($id);
        return view('detail', compact('data'));
    }
}
