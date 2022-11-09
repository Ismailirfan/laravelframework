<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\usermodel;

class usercontroller extends Controller
{
    function form()
    {
        return view('form');
    }
    function insert(Request $req)
    {
        $file = $req->file('image')->getClientOriginalName();
        $req->image->move(public_path("images"), $file);
        $image = new usermodel();
        $image->img = $file;
        $image->save();
        return view('show',['pic'=>$image]);
    }
    function show()
    {
        return view('show');
    }
}
