<!--!DOCTYPE html>
<html lang="en">
<head>
  <title>Nitc Question Bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <style type="text/css">
    .panel-heading a{float: right;}
    #importFrm{margin-bottom: 20px;display: none;}
    #importFrm input[type=file] {display: inline;}
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
   
    #set{
      padding-top: 400px;
    }
  </style>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-brand">
        <a href="#"><img alt="Brand" src="images/logo.png" width="30" /></a>
      </div>
      <a href="#" class="navbar-brand" style="margin:  10px 10px 10px 0px;">NITC QuestionBank</a>
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
    </div>
  </nav>
  <div id="set">
    <div class="container">
    
      <?php if(!empty($statusMsg)){
        echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
        }
      ?>
      <div class="panel panel-default">
        <div class="panel-heading">
          <center><h3>Admin Panel</h3></center>       
            <a href="javascript:void(0);" onclick="$('#importFrm').slideToggle();"></br><h4><center>Upload Paper</center></h4></a>
        </div>
        <div class="panel-body">
          <center>
            <form action="admin.php" method="post"  enctype="multipart/form-data" id="importFrm" >
              <br><br><br>
              <input type="text" name="pprid" placeholder="Paper Id">
              <br><br>
              <input type="text" name="cid" placeholder="Course Id">
              <br><br>
              <input type="text" name="yr" placeholder="Year">
              <br><br>
              <select name="typ">
                <option value="T1">T1</option>
                <option value="T2">T2</option>
                <option value="ES">End Sem</option>
              </select>
              <br><br>
              <input type="file" name="file" accept=".csv" required />
              <br><br>
              <input type="submit" class="btn btn-primary" name="importSubmit" value="UPLOAD">
            </form>
          </center>
        </div>
      </div>
    </div>
  </div>
</body>
</html-->

<?php
//load the database configuration file
include 'dbConfig.php';
if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Paper is added successfully.';
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Paper already Exist';
            break;
        case 'iderr':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Please provide valid course Code.';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upload Paper</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .panel-heading a{float: right;}
    #importFrm{margin-bottom: 20px;display: none;}
    #importFrm input[type=file] {display: inline;}
  </style>
</head>
<body>

<div class="container">
    
    <?php if(!empty($statusMsg)){
        echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
    } ?>
    <div class="panel panel-default">
        <div class="panel-heading">
          <h2>NITC QUESTION BANK</h2>       
            <a href="javascript:void(0);" onclick="$('#importFrm').slideToggle();"><h2><center>UPLOAD PAPER</center></h2></a>

        </div>
        </br>&nbsp;&nbsp;<button class="btn btn-default"><a href="index.php">&nbsp;&nbsp;&nbsp;Logout</a></button>
        <div class="panel-body">
      		<center>
            <form action="importData.php" method="post"  enctype="multipart/form-data" id="importFrm" >
			<br><br><br>
			<input type="text" name="pprid" placeholder="Paper Id" required>
			<br><br>
			<input type="text" required name="cid" placeholder="Course Code" />
			<br><br>
			<input type="text" name="yr" required placeholder="Year">
			<br><br>
			<select name="typ" required>
			<option value="T1">T1</option>
			<option value="T2">T2</option>
			<option value="ES">End Sem</option>
			</select>
                <br><br>
				 <input type="file" name="file" accept=".csv" required />
				<br><br>
				<input type="submit" class="btn btn-primary" name="importSubmit" value="UPLOAD">
				</center>
            </form>
            
        </div>
    </div>
</div>

</body>
</html>