<?php
$cour = $_GET['var'];
include 'dbConfig.php';
$prevQuery = "SELECT cid FROM course WHERE cname = '$cour'";
    $prevResult = $db->query($prevQuery);
    if($prevResult->num_rows > 0)
    {
		while($row=$prevResult->fetch_assoc())
		{
			$year = $row['cid'];
			echo $year;
		}
	}
	?>