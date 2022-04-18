<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
 
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
          if($request->is_verify!==null){
            $val->is_verify=1;
        }
         
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

    public function empData(Student $student)
    {
        $employees = Student::orderBy('id','DESC')->get();       
        return view('employee_add',compact('employees'));
      
    }

  
    public function getCountry()
    {
        $data['country']=DB::table('country')->orderBy('country','asc')->get();
        return view('/index',$data);
    }

    public function getState(Request $request)
    {
     $cid=$request->post('cid');
     $state=DB::table('state')->where('country',$cid)->orderBy('state','asc')->get();
     $html='<option value="">Select State</option>';
     foreach($state as $list){
        $html.='<option value="'.$list->id.'">'.$list->state.'</option>';
     }
     echo $html;    
    }    

    public function getCity(Request $request)
    {
     $sid=$request->post('sid');
     $city=DB::table('city')->where('state',$sid)->orderBy('city','asc')->get();
     $html='<option value="">Select city</option>';
     foreach($city as $list){
        $html.='<option value="'.$list->id.'">'.$list->city.'</option>';
     }
     echo $html;    
    }

    public function deleteCheckedStudents(Request $request){
        $ids=$request->ids;
        Student::whereIn('id',$ids)->delete();
        return response()->json(['success'=>"students have been deleted"]);
    }

    public function deleteStudent($id){       
         $student=Student::find($id);         
         $student->delete();
         return response()->json(['success'=>"students have been deleted"]);
    }










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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
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
