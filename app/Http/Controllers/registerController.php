<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class registerController extends Controller
{
    public function insertform(){
        return view('register');
    }

    public function insert(Request $request){

        $name = $request->input('name');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $email = $request->input('email');
        $phone = $request->input('phone');

        $password = $request->input('password');

        $data = array('name' => $name, 'age' => $age, 'gender' => $gender, 'email' => $email,
                        'phone' => $phone,'password' => Hash::make($password));

        DB::table('customers')->insert($data);
    }
    public function view(){
        $users = DB::select("select * from users");
        return view ('admin/listuser',['users'=>$users]);
    }
    public function destroy($delete)
    {

        $delete = DB::delete ("delete  from users  where id=$delete");

        $users = DB::select("select * from users ");
        return view ('admin/listuser',['users'=>$users]);
    }
}
