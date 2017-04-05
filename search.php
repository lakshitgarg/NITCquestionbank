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
<div id="set">
<div class="container">
  <form class="form-horizontal" method="get" action="search.php">
    <div class="row">
      <center><h1>Search Question</h1></center><br>
      	<h4>Course Code:</h4>
        <input type="text" class="form-control" id="sid" name="sid" required placeholder="Enter Course Code"></br>
        <h4>Keyword</h4>
        <input type="text" class="form-control" id="kw" name="kw" required placeholder="Enter Keyword"></br>
        <div class="text-center">
          <button class="btn btn-danger " name="sk" value="submit" type="submit" >Search</button>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
</body>
<br><br>


<table class="table table-hover">
	<tbody>
		<tr align="center">
			<td><h3>Course Code</h3></td>
			<td><h3>Question No</h3></td>
			<td><h3>Year</h3></td>
			<td><h3>Exam Type</h3></td>
			<td><h3>Question</h3></td>
		</tr>
	</tbody>
<?php
include 'dbConfig.php';
if(isset($_GET['sk']))
{
	
	$a=$_GET['sid'];
	$b=$_GET['kw'];
	
	$prevQuery = "SELECT pprid,year,type FROM paper WHERE cid = '$a'";
	
    $prevResult = $db->query($prevQuery);

    $c=0;
    if($prevResult->num_rows > 0)
    {
		
		while($row=$prevResult->fetch_assoc())
		{
			
			$year = $row['year'];
			$type = $row['type'];
			$q="SELECT qstn FROM pdesc WHERE MATCH(qstn) Against('$b') and pprid='".$row['pprid']."'";
			
		    $q1=$db->query($q);
			if($q1->num_rows>0)
			{
				
				$i=1;
				while($row2=$q1->fetch_assoc())
				{
					$c++;
					?>
					<tr align="center">
						<td align="center"><?php echo $a;?> </td>
						<td align="center"><?php echo $i++;?></td>
						<td align="center"><?php echo $year;?> </td>
						<td align="center"><?php echo $type;?> </td>
						<td><?php echo $row2['qstn']."<br>";?></td>
					</tr>
					<?php
				}
			}
		}
	}
	if($c==0)
		{
			echo "<script>alert('Enter Valid Details')</script>";
			exit(0);
		}
}
?>
</table>


