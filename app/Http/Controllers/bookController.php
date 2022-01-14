<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class bookController extends Controller
{
	 public function insertform(){
        return view('layouts/booking');
        }
    public function viewBooking(){
        $user_id = auth()->user()->id;
        $books = DB::select("select * from books  where user_id='$user_id'");
        return view ('viewBooking',['books'=>$books]);
    }

    public function viewAdminBooking(){
//        $user_id = auth()->user()->id;
      $books = DB::select("select * from books");
        return view ('admin/booking',['books'=>$books]);
    }
    public function del($delete)
    {

        $delete = DB::delete ("delete  from books  where id=$delete");

        $books = DB::select("select * from books ");
        return view ('admin/booking',['books'=>$books]);
    }

    public function destroy($delete)
    {

        $delete = DB::delete ("delete  from books  where id=$delete");
        $user_id = auth()->user()->id;
        $books = DB::select("select * from books  where user_id='$user_id'");
        return view ('viewBooking',['books'=>$books]);
    }


    public function updateForm($id){
        $books = DB::select('select * from books where id = ?',[$id]);
        return view('updateBooking',['books'=>$books]);
    }
    public function update(Request $request,$id){

        $category = $request->input('category');
        $datetime = $request->input('datetime');
        DB::update('update books set category = ?,datetime=? where id = ?',[$category,$datetime,$id]);


//        $request->session()->flash('Msg', 'Successfully Updated !!');

        $user_id = auth()->user()->id;
        $books = DB::select("select * from books  where user_id='$user_id'");
        return view ('viewBooking',['books'=>$books]);

    }


     public function insert(Requests\bookRequest $request){
       //  $todayDate = date('m/d/Y');
//         $request->validate([
//             'category' => 'required','datetime' => 'date_format:m/d/Y|after_or_equal:'.$todayDate]);
         $category = $request->input('category');
        $datetime = $request->input('datetime');



       $user_id = auth()->user()->id;
         $data=array('datetime'=>$datetime,"category"=>$category, 'user_id'=>$user_id,);

        DB::table('books')->insert($data);
         echo '<script>alert("booking successful")</script>';
         $user_id = auth()->user()->id;
         $books = DB::select("select * from books  where user_id='$user_id'");
         return view ('viewBooking',['books'=>$books]);

        }


}
