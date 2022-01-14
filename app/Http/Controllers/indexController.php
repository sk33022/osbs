<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
            $contact = DB::table('contact')->get() ;

   return view ('index',['contact'=>$contact]);
   //return view('index');
    }
}
