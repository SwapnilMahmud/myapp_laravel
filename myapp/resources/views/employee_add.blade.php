<!doctype html>
<html lang="en">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!-- ...................................chosen....... -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<!-- ...................................chosen....... -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body>
<title>employee</title>
<style>
.add {
	margin-left: 1200px;
}

.emptable {
	border: 2px solid mediumseagreen;
}

.empbtn {
	margin-left: 40px;
}

.chosen-container * {
	box-sizing: border-box;
	width: 300px;
}

/* .chosen-single {
	margin-left: 60px;
} */

/* .chosen-drop {
	margin-left: 60px;
} */

.modal-confirm {		
	color: #636363;
	width: 400px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
	text-align: center;
	font-size: 14px;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -10px;
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -2px;
}
.modal-confirm .modal-body {
	color: #999;
}
.modal-confirm .modal-footer {
	border: none;
	text-align: center;		
	border-radius: 5px;
	font-size: 13px;
	padding: 10px 15px 25px;
}
.modal-confirm .modal-footer a {
	color: #999;
}		
.modal-confirm .icon-box {
	width: 80px;
	height: 80px;
	margin: 0 auto;
	border-radius: 50%;
	z-index: 9;
	text-align: center;
	border: 3px solid #f15e5e;
}
.modal-confirm .icon-box i {
	color: #f15e5e;
	font-size: 46px;
	display: inline-block;
	margin-top: 13px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #60c7c1;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	min-width: 120px;
	border: none;
	min-height: 40px;
	border-radius: 3px;
	margin: 0 5px;
}
.modal-confirm .btn-secondary {
	background: #c1c1c1;
}
.modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
	background: #a8a8a8;
}
.modal-confirm .btn-danger {
	background: #f15e5e;
}
.modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
	background: #ee3535;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
.vrfy{
	margin-left:90px;
}
.chosen-results{
	background-color:white;
	height:184px;
}
.chosen-search{
	background-color:white;
}
.modal-backdrop {
	display:none;
}
#wrapper
{
 text-align:center;
 margin:0 auto;
 padding:0px;
 width:995px;
}
#output_image
{
 max-width:300px;
}
</style>
</head>
<body>
	<section style="padding-top:60px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header"> 
						<a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add New Member</a> 
						<a class="btn btn-danger"   href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash-o fa-lg"></i> Delete selected</a> 
						<a class="btn btn-primary"   href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-download fa-lg" aria-hidden="true"> Excel</i></a> 
						<a class="btn btn-primary"   href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-download fa-lg" aria-hidden="true"> PDF</i></a> 
						<a class="btn btn-primary"   href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-download fa-lg" aria-hidden="true"> CSV</i></a> 
					</div>
						<div class="card-body">
							<table id="studentTable" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="chkCheckAll">
												<label class="form-check-label" for="flexCheckChecked"> </label>
											</div>
										</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--pop up modal  start -->
	<!-- Button trigger modal -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Form</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
				</div>
				<div class="modal-body" >
					<form   method="POST" enctype="multipart/form-data" id="add_employee" >
						<div class="form-group  ">
							<input type="text" class="form-control" name="fname" id="fname" placeholder="First Name"> </div>
							<div class="form-group  ">
							<input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name"> </div>
						<div class="form-group ">
							<input type="email" class="form-control" name="email" id="email" placeholder="abc@gmail.com"> </div>
						
						<div class="form-group  ">
						<input type="file" name="file" class="form-control" id="image-input" accept="image/*" onchange="preview_image(event)">

					
                          <img id="output_image"/>
						</div>
						<div class="form-group ">					
                             <input type="tel" class="form-control" name="phone_number[main]" id="phone_number" />
						</div>
						
                        <div class="form-group ">
                             <select class="country_list" id="country"  name="country" >
								<option value="" > </option>
								<option value="United States">United States</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Aland Islands">Aland Islands</option>
								<option value="Albania">Albania</option>
								<option value="Algeria">Algeria</option>
								<option value="Algeria">Bangladesh</option>
								<option value="American Samoa">American Samoa</option>
								<option value="Andorra">Andorra</option>
								<option value="Angola">Angola</option>
								<option value="Anguilla">Anguilla</option>
								<option value="Yemen">Yemen</option>
								<option value="Zambia">Zambia</option>
								<option value="Zimbabwe">Zimbabwe</option>
							</select>
						</div>
						<div class="form-group ">
							<div class="form-check form-check-inline">
								<label class="form-check-label p-1" for="defaultCheck2">Gender </label>
								<input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
								<label class="form-check-label" for="inlineRadio1">male</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
								<label class="form-check-label" for="inlineRadio2">female</label>

								<div class="form-check vrfy">
								<input class="form-check-input" type="checkbox" id="is_verify"  name="is_verify" id="defaultCheck2">
								<label class="form-check-label" for="defaultCheck2"> Is Verify </label>
								</div>
					        </div>							
						</div>
                       
						<div class="form-group ">
							<input type="password" name="password" class="form-control" id="inputPassword2" placeholder="password"> 
						</div>
						<button type="submit" id="btnAddemp" class="btn btn-primary">Submit</button>
						@csrf  
					</form>
				</div>
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div> -->
			</div>
		</div>
	</div>
  <!-- Modal HTML -->
<div id="myModal"  class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>						
				<h4 class="modal-title w-100">Are you sure?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete these records? This process cannot be undone.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-secondary" onclick="document.getElementById('myModal').style.display='none'" data-dismiss="modal">Cancel</button>
				<button type="button" id="deleteAllSelectedRecord" onclick="document.getElementById('myModal').style.display='none'" class="btn btn-danger">Delete</button>
			</div>
		</div>
	</div>
</div>     





<script src="{{asset('front_assets/js/custom.js')}}"></script> 
<script>
var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
  separateDialCode: true,
  preferredCountries:["bd"],
  hiddenInput: "full",
  utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
});
</script>
<script>jQuery('.country_list').chosen();</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="sweetalert2.all.min.js"></script>
<script>
	$(function(e){
		$("#chkCheckAll").click(function(){
           $(".checkBoxClass").prop('checked',$(this).prop('checked'));
		});
		$("#deleteAllSelectedRecord").click(function(e){
			e.preventDefault();
			var allids=[];
         $("input:checkbox[name=ids]:checked").each(function(){
            allids.push($(this).val());
		 });
		 $.ajax({
			 url:"{{route('student.deleteSelected')}}",
			 type:"DELETE",
			 data:{
				 _token:$("input[name=_token]").val(),
				 ids:allids
			 },
			 success:function(response){
				 $.each(allids,function(key,val){
					 $("#sid"+val).remove();
				 })
			 }
		 })
		});
	});
</script>
<script>
	function  deleteStudent(id){
		// alert($id);
		if(confirm("do you want to delete this record?")){
			$.ajax({
              url:'/students/'+id,
			  type:"DELETE",
			  data:{
				 _token:$("input[name=_token]").val(),
				 ids:id
				 
			 },
			 success:function(response){
				 
					 $("#sid"+id).remove();
				 
			 }
			});
		}
	}
</script>

<script>	
// Get the modal
var modal = document.getElementById('myModal');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>






<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>

</body>
</html>