<?php
include 'dbConfig.php';
?>
<form action="search.php" method="get">
<input type="text" name="sid">
<input type="text" name="kw">
<input type="submit" name="sk">
</form>
<?php
if(isset($_GET['sk']))
{
	
	$a=$_GET['sid'];
	$b=$_GET['kw'];
	$prevQuery = "SELECT pprid FROM paper WHERE cid = '$a'";
                $prevResult = $db->query($prevQuery);
                if($prevResult->num_rows > 0){
					while($row=$prevResult->fetch_assoc())
					{
	$q="SELECT qstn FROM pdesc WHERE MATCH(qstn) Against('$b') and pprid='".$row['pprid']."'";
    $q1=$db->query($q);
	if($q1->num_rows>0)
	{
		
		while($row2=$q1->fetch_assoc())
		{
			
			echo $row2['qstn']."<br>";
			
		}
	}
}}}
?>