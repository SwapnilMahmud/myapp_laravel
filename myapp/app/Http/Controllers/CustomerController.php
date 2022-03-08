<?php
namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Storage;
use Mail;
use Crypt;
use Barryvdh\DomPDF\Facade\Pdf;
class CustomerController extends Controller
{
    
    public function register(Request $request)
    {
       
        return view('/register');
    }

   
    public function registration_process(Request $request)
    {
        $valid=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email|unique:customers,email',
            'password'=>'required',
            'mobile'=>'required|numeric|digits:11',         
          ]);
          if(!$valid->passes()){
              return response()->json(['status'=>'error','error'=>$valid->errors()->toArray()]);
       }else{
           $rand_id=rand(111111111,999999999);
           $arr=[
               "name"=>$request->name,
               "email"=>$request->email,
               "password"=>Crypt::encrypt($request->password),
               "mobile"=>$request->mobile,
               "status"=>1,
               "is_verify"=>0,
               "rand_id"=>$rand_id,
               "created_at"=>date('y-m-d h:i:s'),
               "updated_at"=>date('y-m-d h:i:s')
           ];
           
    $pdf = PDF::loadView('email_verification', $arr);
 
    
          $query=DB::table('customers')->insert($arr);
          if($query){
              $data=['name'=>$request->name,'rand_id'=>$rand_id];
              $user['to']=$request->email;
              Mail::send('email_verification',$data,function($message) use($user,$pdf){
               $message->to($user['to']);
               $message->subject('Email Id Verification');
               $message->attachData($pdf->output(), "text.pdf");
              });
              return response()->json(['status'=>'success','msg'=>"Registration Successfull. please check your email id for verification"]);
          }
       }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function email_verification(Request $request,$id){

        $result=DB::table('customers')
             ->where(['rand_id'=>$id])
             ->where(['is_verify'=>0])
             ->get(); 
    
             if(isset($result[0])){
                DB::table('customers')
                ->where(['id'=>$result[0]->id])
                ->update(['is_verify'=>1,'rand_id'=>'']);
                return view('verification'); 
             }else{
                return redirect('/');
             }
            
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        //
        return view('/login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function employee_add(Customer $customer)
    {
        //
        return view('/employee_add');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
