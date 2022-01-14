<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin-dashboard');
    }




    public function dash(Request $request){
//dd($request->all());
        $email = $request->input('email');
        $password = $request->input('password');
        $id = DB::table('admin')->where('email',$email)->first() ;

        if ($id){
            $data['row'] = DB::table('admin')->where('id',$id->id)->first();
            if($email==$data['row']->email && $password==$data['row']->password) {
                return view('admin/adminhome');
            }
            else{
                return view('admin/adminlogin');

            }
        } else{
            $request->session()->flash('error','invalid');
            return view('admin/adminlogin');
        }


 }

}
