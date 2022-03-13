<link rel="shortcut icon" href="{{asset('dropdown/dist/img/favicon.ico')}}" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('dropdown/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('dropdown/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('dropdown/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('dropdown/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dropdown/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('dropdown/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('dropdown/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('dropdown/plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" href="{{asset('dropdown/plugins/chart.js/Chart.min.css')}}">
  <link rel="stylesheet" href="{{asset('dropdown/dist/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('dropdown/custom/css/bootstrap-multiselect.css')}}">
  <link rel="stylesheet" href="{{asset('dropdown/custom/css/custom_color.css')}}">
    
  <div id="page-content" style="margin-top: 20px;margin-left: 20px">
<form >        
    <div class="row">
     <div class="col-md-3">             
        <div class="form-group">
            <label class="col-md-4 control-label" for="user_type">User Type</label>  
            <div class="col-md-12">
              <select class="form-control select2" name="user_type" id="user_type">
                  <option value="">Select User Type</option>
                  <option value="1">Super Admin</option>
                  <option value="2">School Admin</option>
                  <option value="3">Gurdian</option>
                  <option value="4">Bank Teller</option>
                  <option value="5">Bank Agent</option>
              </select>
             </div>
        </div>
     </div>
    </div>          
<div style="clear:both; height:10px;"></div>
     <div class="card-body table-responsive p-0" style="height: 480px;background-color: #fff">
      <table class="table table-head-fixed text-nowrap">
        <thead> 
          <tr style="background-color:#f3f0f0">
            <th style="border-left:1px solid #e9dddd">Master Menu</th>
            <th style="border-left:1px solid #e9dddd" >Sub Menu</th>
            <th style="text-align: center">Read</th>
            <th style="text-align: center">Edit</th>
            <th style="text-align: center">Delete</th>
            <th style="text-align: center">Restore</th>
          </tr>
        </thead>
        <tbody>
         </tbody>
       </table>
     
      </div>
      <div align="center" style="margin-top:5px">
        <button class="btn btn-primary" type="submit" style="background-color: red;border-color: red">Update Permission</button>
      </div>

    </form>
    </div>

  </div>






