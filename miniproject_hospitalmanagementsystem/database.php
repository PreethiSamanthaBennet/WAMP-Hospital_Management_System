<?php 
 $servername='localhost:3308'; 
 $username='root'; 
 $password=''; 
 $dbname = "HospitalManagementSystem"; 
 $conn=mysqli_connect($servername,$username,$password,$dbname); 
 if(!$conn){ 
     die('Could not Connect MySQL:' .mysql_error()); 
 } 
 ?>