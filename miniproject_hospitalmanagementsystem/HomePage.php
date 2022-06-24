<?php
  
    // get the post records 
    $LoginMode = $_POST['LoginMode']; 
    
    // database insert SQL code 
    if($_POST['LoginMode']== "Patient") {
       header('Location: Patient.html');
    } 
    else if($_POST['LoginMode']== "Doctor") {
       header('Location: Doctor.html');
    } 
    else if($_POST['LoginMode']== "Admin") {
       header('Location: Admin.html');
    }
 
?>