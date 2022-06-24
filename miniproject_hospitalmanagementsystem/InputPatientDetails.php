<?php
include_once 'database.php';

if(isset($_POST['save'])) {     

     $Patient_ID = $_POST['Patient_ID'];
     $Patient_Password = $_POST['Patient_Password'];
     $Patient_Name = $_POST['Patient_Name'];
     $Patient_Age = $_POST['Patient_Age'];
     $Patient_Gender = $_POST['Patient_Gender'];
     $Patient_Height = $_POST['Patient_Height'];
     $Patient_Weight = $_POST['Patient_Weight'];
     $Patient_BloodGroup = $_POST['Patient_BloodGroup'];
     $Patient_Symptoms = $_POST['Patient_Symptoms'];
     $Patient_Appointment = $_POST['Patient_Appointment'];
     $Patient_MobNum = $_POST['Patient_MobNum'];
     
     
     $sql = "INSERT INTO Patient (Patient_ID, Patient_Password, Patient_Name, Patient_Age, Patient_Gender, Patient_Height, Patient_Weight, Patient_BloodGroup, Patient_Symptoms, Patient_Appointment, Patient_MobNum)
     
     VALUES ('$Patient_ID', '$Patient_Password', '$Patient_Name', '$Patient_Age', '$Patient_Gender', '$Patient_Height', '$Patient_Weight', '$Patient_BloodGroup', '$Patient_Symptoms', '$Patient_Appointment', '$Patient_MobNum')";
     
     
     if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
     } 
     else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     
     mysqli_close($conn);
}
?>