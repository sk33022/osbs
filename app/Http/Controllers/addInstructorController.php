<?php

namespace App\Http\Controllers;
use App\Http\Requests\InstructorRequest;
use DB;
use Illuminate\Http\Request;

class addInstructorController extends Controller
{
    public function insertForm(){
        return view('admin/instructor');
    }
    public function viewInstructor(){
        $instructors = DB::select('select * from instructors');
        return view ('displayInstructor')->with('instructors',$instructors);
    }


    public function viewAdminInstructor(){
        $instructors = DB::select('select * from instructors');
        return view ('admin/viewInstructor')->with('instructors',$instructors);
    }


    public function destroy($delete)
    {

        $delete = DB::delete ("delete  from instructors  where id=$delete");
        return redirect()->route('instructor.adminview')->with('name','deleted successfully!');
    }


    public function updateForm($id){

        $instructors = DB::select('select * from instructors where id = ?',[$id]);
        return view('admin/updateInstructor',['instructors'=>$instructors]);

    }


    public function update(Request $request,$id){

//ddd($request->all());
        $name = $request->input('name');
        $phone = $request->input('phone');
        $status = $request->input('status');
        $description=$request->input('description');
//        $img = time()."_".$request->image->getClientOriginalName();
//
//        $request->image->move(public_path('uploads'), $img);
//        $request->validate([

        DB::update('update instructors set name=?, phone=?, status=?,description=? where id = ?',[$name,$phone,$status,$description,$id]);

        echo '<script>alert("instructor updated successful")</script>';
        return view('admin/adminhome');

        //return redirect()->route('instructor.view')->with('name','updated successfully!');


//        $request->session()->flash('Msg', 'Successfully Updated !!');
//
//        return redirect()->route('instructor.adminview')->with('name','updated successfully!');

    }






    public function insert(InstructorRequest $request){

        $names = $request->input('name');
        $phone = $request->input('phone');
        $status = $request->input('status');
        $description=$request->input('description');
        $img = time()."_".$request->image->getClientOriginalName();
        $request->image->move(public_path('uploads'), $img);
//        $request->validate([
//            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
//        ]);
//        return redirect()->back();
        $data=array('name'=>$names,"description"=>$description,"phone"=>$phone, 'status'=>$status,'image'=>$img,);

        DB::table('instructors')->insert($data);

        return redirect()->route('instructor.adminview');
    }
}
