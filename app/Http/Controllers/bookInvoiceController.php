<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class bookInvoiceController extends Controller
{





    public function view(Request $request){
        //dd($request->all());
        $book_id = $request->id;
       $book_payment = DB::select("select * from book_payment  where book_id='$book_id'");
       // dd($book_payment);
        //return view ('layouts/invoice',compact('book_payment'));
        return view('layouts/invoice',['book_payment'=>$book_payment]);

    }

    public function viewIns(Request $request){
        //dd($request->all());
        $book_id = $request->id;
        $instructor_payment = DB::select("select * from instructor_payment  where book_id='$book_id'");
        // dd($book_payment);
        //return view ('layouts/invoice',compact('book_payment'));
        return view('layouts/invoiceIns',['instructor_payment'=>$instructor_payment]);

    }

}
