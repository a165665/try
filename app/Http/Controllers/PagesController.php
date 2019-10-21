<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){

        $text = "this is text";
       // return view('index',compact('text'));
       return view('index')->with('t',$text);
    }
}
