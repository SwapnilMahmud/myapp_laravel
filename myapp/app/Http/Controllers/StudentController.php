<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function employee_add()
    {
        //
        return view('/employee_add');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     echo '<pre>';
    //     print_r($request);exit;
    //    echo $request['full'];
    //    exit;
  
   
        $request->validate([
                'fname'=>'required',
                'lname'=>'required',
                'country'=>'required',
                'gender'=>'required',
                'email'=>'required|email|unique:students,email',
                'password'=>'required',                    
                'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
        $num=$request['phone_number']['full'];
          $val = new Student;
  
          if ($request->file('file')) {
              $imagePath = $request->file('file');
              $imageName = $imagePath->getClientOriginalName();  
              $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
          }

          $val->fname=$request->fname;
          $val->lname=$request->lname;
          $val->country=$request->country;
          $val->gender=$request->gender;
          $val->email=$request->email;
          $val->password=$request->password;
          $val->phone=$num;
          $val->is_verify=0;
          $val->img_name = $imageName;
          $val->img_path = '/storage/'.$path;
        
          $val->save();
  
          return response()->json(['status'=>'success','msg'=>"Registration Successfull. please check your email id for verification"]);

      
    
          
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function fetchemployee(Student $student)
    {
        //
        $employee= Student::all();
        return response()->json(['emp'=>$employee,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function empData(Student $student)
    {
        $employees = Student::orderBy('id','DESC')->get();
        dd($employees);
        return view('employee_add',compact('employees'));
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
