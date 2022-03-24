@extends('layout')
@section('page_title',"Registration")
@section('container')
 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">             
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Register</h4>
                 <form action="" class="aa-login-form" id="frmRegistration">                    
                    <label for="">Name<span>*</span></label>
                    <input type="text" name="name" placeholder="Name" required>
                    <span id="name_error" class="field_error"></span></br>
                    <label for="">Email<span>*</span></label>
                    <input type="email" name="email"  placeholder="Email" required>
                    <span id="email_error" class="field_error"></span></br>
                    <label for="">Password<span>*</span></label>
                    <input type="password"  name="password" placeholder="Password" required>
                    <span id="password_error" class="field_error"></span></br>
                    <label for="">Mobile<span>*</span></label>
                    <input type="text"  name="mobile" placeholder="mobile" required>
                    <span id="mobile_error" class="field_error"></span></br>
                       @csrf  
                    <button type="submit" id="btnRegistration" class="btn btn-info">Register</button>                                 
                  </form>
                </div>
               <div  id="thank_you_msg"class="field_error">
               </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
@endsection