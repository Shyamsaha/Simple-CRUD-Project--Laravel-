<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class Studentcontroller extends Controller
{
 public function student(){

     return view('student.student');

 }
 public function store(Request $request){

     Student::create([
         'name'=>$request->get('name'),
         'department'=>$request->get('department'),
         'email'=>$request->get('email'),
         'phone'=>$request->get('phone'),
         'address'=>$request->get('address'),
     ]);
     return redirect()->back();

 }

 public function view()
 {

     $students =Student::get();

     return view('student.view',compact('students'));

 }
    public function update($id){
     $students = Student::findOrFail($id);
     return view('student.update',compact('students'));
    }
    public function updated($id){
     $students = Student::findOrFail($id);
     $students->name = request('name');
     $students->department = request('department');
     $students->email = request('email');
     $students->phone = request('phone');
     $students->address = request('address');
     $students->save();
        return redirect()->to('/student/view');

    }

   public function delete($id){

     $students=  Student::findOrFail($id);
     $students->delete();
     return redirect()->to('/student/view');


   }


}
