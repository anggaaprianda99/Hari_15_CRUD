<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    //
    // public function index(){
    //     return view('index');
    // }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        // dd($request->all());

        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi"   => $request["isi"],
            "tanggal_dibuat" => $request["tanggal_dibuat"],
            "tanggal_diperbaharui" => $request["tanggal_diperbaharui"]
        ]);
        return redirect('/pertanyaan/create');
    }
}
