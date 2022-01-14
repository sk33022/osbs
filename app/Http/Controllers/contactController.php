<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function insertinfo($id){
        return view('admin/info');
    }
     public function display(){
         $contact = DB::select('select * from contact ');
         return view('admin/viewContact',['contact'=>$contact]);

     }
    public function insert(Request $request){
        //dd($request->all());
        $phone = $request->input('phone');
        $address = $request->input('address');
        $email = $request->input('email');
        $openday = $request->input('openday');
        $openhour = $request->input('openhour');
        $data=array('phone'=>$phone,"address"=>$address,"email"=>$email,"openday"=>$openday, 'openhour'=>$openhour,);
        DB::table('contact')->update($data);
        echo '<script>alert("contact inserted successful")</script>';
        return view ('admin/adminhome');





    }
    public function update(Request $request,$id){

//ddd($request->all());
        $phone = $request->input('phone');
        $address = $request->input('address');
        $email = $request->input('email');
        $openday = $request->input('openday');
        $openhour = $request->input('openhour');

        DB::update('update contact set phone=?, address=?, email=?,openday=?, openhour=? where id = ?',[$phone,$address,$email,$openday,$openhour]);

        echo '<script>alert("instructor updated successful")</script>';
        return view('admin/adminhome');



    }
    public function view(){
        return view('admin/info');
    }

}
