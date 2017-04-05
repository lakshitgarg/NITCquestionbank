<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nitc Question Bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
  .navbar {
    margin-bottom: 0;
    border-radius: 0;
  }
  .container {
    max-width: 38em;
    padding: 1em 3em 2em 3em;
    margin: 0em auto;
    background-color: white;
    border-radius: 4.2px;
    box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
  }
  .row {
    zoom: 1;
  }
  .row:before,
  .row:after {
    content: "";
    display: table;
  }
  .row:after {
    clear: both;
  }
  #set{
    padding-top: 100px;
  }
</style>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-brand">
      <a href="index.php"><img alt="Brand" src="images/logo.png" width="30" /></a>
    </div>
    <a href="index.php" class="navbar-brand" style="margin:  10px 10px 10px 0px;">NITC QuestionBank</a>
    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse navHeaderCollapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.nitc.ac.in" style="margin:  10px 10px 10px 0px;">NITC Home</a></li>
        <li><a href="department/abc.php" style="margin:  10px 10px 5px 0px;">About Us</a></li>
      </ul>
    </div>
</nav>
<div id="set">
<div class="container">
  <form class="form-horizontal" method="POST" action="login.php">
    <div class="row">
      <center><h1>Login Form</h1></center><br>
      	<h4>User Id:</h4>
        <input type="text" class="form-control" id="id" name="id" required placeholder="Enter Id"></br>
        <h4>Password</h4>
        <input type="password" class="form-control" id="pass" name="pass" required placeholder="Enter Password"></br>
        <h4>
          <select name="user">
            <option value="null">Select User</option>
            <option value="admin">Admin</option>
            <option value="faculty">Faculty</option>
          </select>
        </h4>
        <div class="text-center">
          <button class="btn btn-danger " name="submit" value="submit" type="submit" >Login</button>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
</body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js'></script>
</html>
<?php
include 'dbConfig.php';
if(isset($_POST['submit']))
{
  $id = $_POST['id'];
  $pass = $_POST['pass'];
  $user = $_POST['user'];
  if($user == "null")
  {
    echo "<script>alert('Please Select User','_self')</script>";
    exit(0);
  }
  if($user == 'admin')
  {

    $query = "select * from admin where user = '$id' AND password = '$pass'";
    $run = mysqli_query($db,$query);
    if( mysqli_num_rows($run) > 0 )
    {
      echo "<script>window.open('admin.php','_self')</script>";
    }
    else
    {
      echo "<script>alert('User id Or Password is incorrect')</script>";
    }
    exit(0);
  }
  else{
    $query = "select * from faculty where faculty_id = '$id' AND password = '$pass'";
    $run = mysqli_query($db,$query);
    if( mysqli_num_rows($run) > 0 )
    {
      echo "<script>window.open('search.php','_self')</script>";
    }
    else
    {
      echo "<script>alert('User id Or Password is incorrect')</script>";
    }
    exit(0);
  }
}
?>