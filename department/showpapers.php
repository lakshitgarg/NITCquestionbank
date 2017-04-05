<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<HTML>
<HEAD>
<TITLE class="hideit">NITC Question Paper</TITLE>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</HEAD>
<style>
@media print {
.hideit { visibility: hidden }
}
</style>
<body>

	<?php
	include('../dbConfig.php');
	?>
	<center>
		<div class="jumbotron text-center">
		<h4><b>National Institute Of Technology, Calicut</b><h4>
		<h5><b><?php echo $_POST['dept'];?></b><h5>
		<h6><b><?php echo $_POST['papertyp']." Exam"." (".$_POST['year'].")";?></b></h6>
		<h6><b><?php echo $_POST['courseid']." : ".$_POST['course']."(".$_POST['prog'].")";?></b></h6>
		
	</center>
	<?php
		if(isset($_POST['submit']))
		{
			$dept = $_POST['dept'];
			$prog = $_POST['prog'];
			$course = $_POST['course'];
			$courseid = $_POST['courseid'];
			$year = $_POST['year'];
			$papertyp = $_POST['papertyp'];
		  	if($year=="null")
		  	{
				echo "<script>alert('Please Select Year')</script>";
				echo "<script>window.open('student_csed.php?dept=$dept&prog=$prog&courseid=$courseid&papertyp=$papertyp&course=$course','_self')</script>";
				exit(0);
		  	}
		   	if($papertyp=="null")
		  	{
				echo "<script>alert('Please Select Paper type')</script>";
				echo "<script>window.open('student_csed.php?dept=$dept&prog=$prog&courseid=$courseid&papertyp=$papertyp&course=$course','_self')</script>";
				exit(0);
		  	}
			$fq=$db->query("select pprid from paper where cid='$courseid' and year='$year' and type='$papertyp'");
		 	if($fq->num_rows>0)
		 	{
		 		$row=$fq->fetch_assoc();
		 		$pdescid=$row['pprid'];
		 		$fq1=$db->query("select qstn from pdesc where pprid='$pdescid'");
		 		$i=1;
		 		while($row1=$fq1->fetch_assoc())
		 		{
					?>
					<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;Q".$i++." ".":&nbsp;&nbsp;";?>
					<?php echo $row1['qstn']."<br></br>";?>
					<?php
		 		}
		 	}
			else
			{
				echo "<script>alert('paper dose not exist')</script>";
				echo "<script>window.open('csed.php','_self')</script>";
			}	
		}
	?>
	<div class="hideit">
	<center><input type="button" onClick="window.print()" value="Print" class="hideit"/>
	<a href="csed.php"><input type="button" value="Back" class="hideit"/></a></center>
</div>
</div>

</body>

</html>
