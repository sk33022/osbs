<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Session;
use DB;
use Carbon\Carbon;


class stripeController extends Controller
{
    public function payForm(Request $request){

        $book_id = $request->id;
        return view('layouts/stripe',compact('book_id'));
    }


    public function stripePayment(Request $req)
    {
        //dd($req->all());
        //print_r($req->all()); die();
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $data = Stripe\Charge::create([
            "amount"=>100*100,
            "currency"=>"usd",
            "source"=>$req->stripeToken,
            "description"=>"Test payment"
        ]);

        $book_id = $req->input('book_id');
        $status='1';
        DB::update('update books set  status=? where id = ?',[$status,$book_id]);



        $date = Carbon::now();
        $amount=100;
        $user_id = auth()->user()->id;
        $datas=array('date'=>$date,"amount"=>$amount, 'user_id'=>$user_id,'book_id'=>$book_id,);

        DB::table('book_payment')->insert($datas);

//        echo "<pre>"; print_r($data); die();

        Session::flash("success","Payment successful!");

        return back();
    }



    public function hireForm(Request $request){
        $booking_id = $request->id;
//dd($booking_id);

//        $duration = DB::table('instructor_book')->select('duration')->where('instructor_id', '=', $instructor_id)->get();
        //$duration= DB::select('select duration from instructor_book where id = ?',[$booking_id]);
        $duration = DB::table('instructor_book')->where('id',$booking_id)->value('duration') ;
//dd($duration);
        return view('layouts/instructorPayment',compact('booking_id','duration'));
    }


    public function hirePay(Request $req)
    {
       //dd($req->all());
        $duration = $req->input('duration');
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $data = Stripe\Charge::create([
                "amount"=>$req->input('duration')*100,
            "currency"=>"usd",
            "source"=>$req->stripeToken,
            "description"=>"Test payment"
        ]);


//
//
//

       $date = Carbon::now();
       $amount=$req->input('duration');
        $user_id = auth()->user()->id;
        $book_id=$req->input('booking_id');

       $datas=array('date'=>$date,"amount"=>$amount, 'user_id'=>$user_id,'book_id'=>$book_id,);
       DB::table('instructor_payment')->insert($datas);

        $status='1';
        DB::update('update instructor_book set  status=? where id = ?',[$status,$book_id]);

//        echo "<pre>"; print_r($data); die();

        Session::flash("success","Payment successful!");

        return back();
    }
}
