<?php
//load the database configuration file
include 'dbConfig.php';

if(isset($_POST['importSubmit'])){
    
    //validate whether uploaded file is a csv file
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            //skip first line
            fgetcsv($csvFile);
            
$a=$_POST['pprid'];
$a1=$_POST['cid'];
$a2=$_POST['yr'];
$a3=$_POST['typ'];

 $prevQuery = "SELECT pprid FROM paper WHERE pprid = '$a'";
                $prevResult = $db->query($prevQuery);
                if($prevResult->num_rows > 0){
                    
                  $qstring = '?status=err';
                 // echo "paper already exist";
				}else{
                    $prevQuery2 = "SELECT cid FROM course WHERE cid = '$a1'";
                $prevResult2 = $db->query($prevQuery2);
                if($prevResult2->num_rows > 0){
            $db->query("INSERT INTO paper VALUES ('$a','$a1','$a2','$a3')");
            while(($line = fgetcsv($csvFile)) !== FALSE){
                $db->query("INSERT INTO pdesc VALUES ('$a','".$line[0]."')");
                
				}
				$qstring = '?status=succ';
				}else{
					 $qstring = '?status=iderr';
					}
            
           
            fclose($csvFile);
				}
         
		}
}}

header("Location: admin.php".$qstring);
?>