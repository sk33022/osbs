<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class bookInstructorController extends Controller
{
    public function insertform(Request $request){
        //dd($request->all());
        $instructor_id = $request->id;
        return view('layouts/bookingInstructor',compact('instructor_id'));
    }
    public function insert(Request $request){

        //dd($request->all());
        //$request->instructor_id;
        $instructor_id = $request->input('instructor_id');
        $duration = $request->input('duration');
        $date = $request->input('date');
        $user_id = auth()->user()->id;
$status='0';


        $datas=array('date'=>$date,"duration"=>$duration, 'instructor_id'=>$instructor_id,'user_id'=>$user_id,'status'=>$status,);


        DB::table('instructor_book')->insert($datas);



        echo '<script>alert("Instructor booking successful")</script>';
        $user_id = auth()->user()->id;
        $instructor_book = DB::select("select * from instructor_book  where user_id='$user_id'");
        return view ('layouts/viewInstructorBooking')->with('instructor_book',$instructor_book);

    }
    public function viewsInstructor(){
        $instructor = DB::select('select * from instructors');
        return view ('bookInstructor')->with('name',$instructor);
    }
    public function showInstructor(){
        $instructor = DB::select('select * from instructors');
        return view ('layouts/onlyDisplayInstructor')->with('name',$instructor);
    }


    public function showHire(){
        $user_id = auth()->user()->id;
        $instructor_book = DB::select("select * from instructor_book  where user_id='$user_id'");
        return view ('layouts/viewInstructorBooking')->with('instructor_book',$instructor_book);
    }

    public function destroy($delete)
    {
        $user_id = auth()->user()->id;
        $delete = DB::delete ("delete  from instructor_book  where id=$delete");
        $instructor_book = DB::select("select * from instructor_book  where user_id='$user_id'");

        // $instructor_book = DB::select('select * from instructor_book where user_id='?',[$user_id]);
        return view ('layouts/viewInstructorBooking')->with('instructor_book',$instructor_book);


       // return view ('layouts/viewInstructorBooking');
    }

    public function updateForm($id){
        //dd($id);
       // dd('hello');

        $instructor_book = DB::select('select * from instructor_book where id = ?',[$id]);
        return view('layouts/updateInstructorBooking',['instructor_book'=>$instructor_book ],compact('id'));
    }

    public function update(Request $request,$id)
    {


        $duration = $request->input('duration');
        $date = $request->input('date');
        DB::update('update instructor_book set duration = ?,date=? where id = ?', [$duration, $date, $id]);
        $user_id = auth()->user()->id;
        $instructor_book = DB::select("select * from instructor_book  where user_id='$user_id'");
        return view('layouts/viewInstructorBooking')->with('instructor_book', $instructor_book);
    }

    public function delete($delete)
    {

        $delete = DB::delete ("delete  from instructor_book  where id=$delete");

        $instructor_book = DB::select("select * from instructor_book ");
        return view ('admin/viewInstructorBook',['instructor_book'=>$instructor_book]);
    }
    public function display(){
        $instructor_book = DB::select('select * from instructor_book');
        return view ('admin/viewInstructorBook')->with('instructor_book',$instructor_book);
    }
    }




