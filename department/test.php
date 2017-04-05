<?php
include('../dbConfig.php');

?>
 
         
          <?php
          $q="select year from paper where cid='CHEM100' ";
          $q1=$db->query($q);
             while($row=$q1->fetch_assoc())
          {
           
            echo $row['year'];
            
          
         
        }
        ?>
      