<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class userReportController extends Controller
{
    public function indexUser()
    {
        $books = DB::table('books')->select('category')->selectRaw('count(category) as qty')->groupBy('category')->orderBy('qty', 'DESC')->get();
        $count = DB::table('books')->count();
        return view('layouts/report',['books'=>$books],compact('count'));


    }

    public function indexInstruct(){
        $instructor_book = DB::table('instructor_book')->select('instructor_id')->selectRaw('count(instructor_id) as qty')->groupBy('instructor_id')->orderBy('qty', 'DESC')->get();
        $count = DB::table('instructor_book')->count();
        return view('layouts/reportInstructor',['instructor_book'=>$instructor_book],compact('count'));

    }
}
