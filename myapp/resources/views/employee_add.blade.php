<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>employee</title>
    <style>
      .add{
          margin-left:1200px;
      }
    </style>
  </head>
  <body>
    <br>
    <br>
    <br>
    <br>
    <button type="button" class="btn btn-primary add" data-toggle="modal" data-target="#exampleModal">Add Employee</button>
    <br>
    <br>
    
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
              <label class="form-check-label" for="flexCheckChecked">
              </label>
            </div>
          </th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">Update at</th>
          <th scope="col">Created at</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
            </div>
          </th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>
            <a class="btn btn-danger" href="#"><i class="fa fa-trash-o fa-lg"></i> Delete</a> 
            <a class="btn btn-primary" href="#navigation-main"><i class="fa fa-edit fa-lg" aria-hidden="true"> Edit</i></a>
            <a class="btn btn-primary" href="#navigation-main"><i class="fa fa-download fa-lg" aria-hidden="true"> Download</i></a>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
            </div>
          </th>
          <td>Jacob
          </td>
          <td>Thornton
          </td>
          <td>Thornton
          </td>
          <td>@fat
          </td>
        </tr>
          <tr>
          <th scope="row">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
            </div>
          </th>
          <td>Mark</td>
          <td>Otto</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
      </tbody>
    </table>

<!-- pop up modal  start -->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- pop up modal  end-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>