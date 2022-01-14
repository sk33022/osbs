<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class reportController extends Controller
{
    public function index()
    {
        $revenue = DB::table('book_payment')->sum('amount');
       // dd($revenue);



       $book_payment = DB::select("select * from book_payment  ");
        return view('admin/report',['book_payment'=>$book_payment],compact('revenue'));
    }


    public function overall()
    {
//        $revenue = DB::table('book_payment')->sum('amount');
        // dd($revenue);



//        $book_payment = DB::select("select * from book_payment  ");
        return view('admin/overall');
    }
    public function instruct(){
        $revenue = DB::table('instructor_payment')->sum('amount');
        // dd($revenue);



        $instructor_payment = DB::select("select * from instructor_payment  ");
        return view('admin/tableR',['instructor_payment'=>$instructor_payment],compact('revenue'));
    }
     public function chart(){
         $swim = DB::table('book_payment')->sum('amount');
         $instruct = DB::table('instructor_payment')->sum('amount');
         $total=$swim+$instruct;
         return view('admin/chart',compact('swim','instruct','total'));
     }

    public function overBook(){
        $books = DB::table('books')->select('user_id')->selectRaw('count(user_id) as qty')->groupBy('user_id')->orderBy('qty', 'DESC')->get();
       // $instruct = DB::table('instructor_book')->select('user_id')->selectRaw('count(user_id) as qty')->groupBy('user_id')->orderBy('qty', 'DESC')->get();

//        dd($books);
//        $id=$books('user_id');
        $count = DB::table('books')->count();
        //dd($count);
        return view('admin/mostBook',['books'=>$books],compact('count'));
    }
    public function overIns(){
        //$books = DB::table('books')->select('user_id')->selectRaw('count(user_id) as qty')->groupBy('user_id')->orderBy('qty', 'DESC')->get();
        $instructor_book = DB::table('instructor_book')->select('user_id')->selectRaw('count(user_id) as qty')->groupBy('user_id')->orderBy('qty', 'DESC')->get();
        $count = DB::table('instructor_book')->count();

        //dd($instruct);
        return view('admin/mostIns',['instructor_book'=>$instructor_book],compact('count'));

    }




public function viewdate(){
    return view('admin/viewreport');
}



     public function search(Request $request){
        //dd($request->all());

         $request->validate([
        'date1'=>[
            'before_or_equal:date2'
        ]
         ]);
         $date1 = $request->input('date1');
         $date2 = $request->input('date2');

         if($date2==null){
             $date2 = Carbon::now();
         }


        //$book_rev= Reservation::whereBetween('instructor_payment', [$date1, $date2])->get();
         $book_payment = DB::table('book_payment')->whereBetween('date', [$date1, $date2])->get() ;
         $revenue = DB::table('book_payment')->whereBetween('date', [$date1, $date2])->sum('amount');

         //$book_rev = DB::select("select * from book_payment where  Date between $date1 and $date2 ");

         //dd($book_payment,$revenue);
         //dd($book_rev,$date2,$date1);
         return view('admin/report2',['book_payment'=>$book_payment],compact('revenue'));
     }


    public function search1(Request $request){
        $request->validate([
            'date1'=>[
                'before_or_equal:date2'
            ]
        ]);
        $date1 = $request->input('date1');
        $date2 = $request->input('date2');

        if($date2==null){
            $date2 = Carbon::now();
        }

        //$book_rev= Reservation::whereBetween('instructor_payment', [$date1, $date2])->get();
        $instructor_payment = DB::table('instructor_payment')->whereBetween('date', [$date1, $date2])->get() ;
        $revenue = DB::table('instructor_payment')->whereBetween('date', [$date1, $date2])->sum('amount');

        //$book_rev = DB::select("select * from book_payment where  Date between $date1 and $date2 ");

        //dd($book_payment,$revenue);
        //dd($book_rev,$date2,$date1);
        return view('admin/tableR2',['instructor_payment'=>$instructor_payment],compact('revenue'));
    }
}
