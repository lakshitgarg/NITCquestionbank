<?php
include('../dbConfig.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nitc Question Bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
   #set {
  		padding-top: 100px;
  	}
  /*
  @media (max-width: 600px) {
    .set {
      padding-top: 100px; 
    }
  }*/
  </style>
</head>
<body>

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
        <li><a href="index.php">
            <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-lock">&nbsp;Logout</button></a>
        </li>
      </ul>
    </div>
</nav>

<?php
$dept = $_GET['dept'];
$prog = $_GET['prog'];
$course = $_GET['course'];
$courseid = $_GET['courseid'];
?>
<div id="set">
<div class="container">
  <form class="form-horizontal" method="get" action="student_csed.php">
    <div class="row">
      <center><h1>Search For Papers</h1></center><br>
        <h4>Department</h4>

        <input type="text" class="form-control" id="sid" value="<?php echo $dept; ?>" name="dept" readonly></br>
        <h4>Program</h4>
        <input type="text" class="form-control" id="kw" value="<?php echo $prog; ?>" name="prog" readonly></br>
        <h4>Course</h4>
        <input type="text" class="form-control" id="kw" value="<?php echo $course; ?>" name="course" readonly></br>
        <h4>Course Id</h4>
        <input type="text" class="form-control" id="kw" value="<?php echo $courseid; ?>" name="courseid" readonly></br>
        <h4>Year</h4>
        <select name="year">
          <option value="null">Select Year</option>
          <?php
          $q="select year from paper where cid='CHEM100'";

          $q1=$db->query($q);
          while($row=$q1->fetch_assoc())
          {
            
            //echo $row['year'];
            ?>
          
          <option value="<?php echo $row['year'];?>"><?php echo $row['year'];?></option>
          <?php
          }
        ?>
        </select>
        <select name="paper">
          <option value="null">Select Paper</option>
          <option value="t1">Test-1</option>
          <option value="t2">Test-2</option>
          <option value="endsem">End Sem</option>
        </select>
        <div class="text-center">
          <button class="btn btn-danger " name="submit" value="submit" type="submit" >Search</button>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
</body>
</head>
<?php
if(isset($_GET['submit']))
{
  $dept = $_GET['dept'];
  $prog = $_GET['prog'];
  $course = $_GET['course'];
  $courseid = $_GET['courseid'];
  $year = $_GET['year'];
  $paper = $_GET['paper'];
  /*if($year == "null")
  {
    echo "<script>alert('$year')</script>";
    exit(0);
  }
  if($paper == "null")
  {
    echo "<script>alert('Please Select Paper')</script>";
    exit(0);
  }*/
  echo "<script>alert('$year')</script>";
  echo "<script>alert('$paper')</script>";
  
}
?>