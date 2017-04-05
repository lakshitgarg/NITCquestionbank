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
<h3>National Institute Of Technology, Calicut<h3>
<h4><?php echo $_GET['dept'];?><h4>
<h5><?php echo $_GET['papertyp']." Exam"." (".$_GET['year'].")";?></h5>
<h5><?php echo $_GET['courseid']." : ".$_GET['course']."(".$_GET['prog'].")";?></h5>

</center>




	
<?php
if(isset($_GET['submit']))
{
  $dept = $_GET['dept'];
  $prog = $_GET['prog'];
  $course = $_GET['course'];
  $courseid = $_GET['courseid'];
  $year = $_GET['year'];
  $papertyp = $_GET['papertyp'];
  
  if($year=="null")
  {
	  echo "<script>alert('Please Select Year')</script>";
	  exit(0);
  }
   if($papertyp=="null")
  {
	  echo "<script>alert('Please Select Paper type')</script>";
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
	<center><?php echo "Q".$i++." ";?>
	<?php echo $row1['qstn']."<br>";?>

	
	<?php
 } }
else
{
	
	echo "<script>alert('paper dose not exist')</script>";
}	
}
?>


<center><input type="button" onClick="window.print()" value="Print" class="hideit"/></center>
</body>
</html>
