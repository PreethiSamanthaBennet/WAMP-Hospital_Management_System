<?php
include_once 'database.php';
error_reporting(E_ALL ^ E_NOTICE);

if(isset($_POST['login'])) { 
     $Patient_ID = $_POST['Patient_ID'];
     $Patient_Password = $_POST['Patient_Password'];

     $sql = "SELECT * FROM Patient WHERE Patient_ID = '$Patient_ID' AND Patient_Password = '$Patient_Password'";

     #mysqli_query($conn, $sql)

     $aResult=$conn->query($sql);
     # if($aResult->num_rows > 0) { }
     # else {
     #     echo "Incorrect ID or Password. ";
     # }

     if (mysqli_query($conn, $sql)) { } 
     else {
        exit("Incorrect ID or Password. ");
        /* echo "Error: " . $sql . "
" . mysqli_error($conn); */
     }

     while($rows = $aResult->fetch_assoc()){
         $Patient_ID = $rows['Patient_ID'];
         $Patient_Name = $rows['Patient_Name'];
         $Patient_Age = $rows['Patient_Age'];
         $Patient_Gender = $rows['Patient_Gender'];
         $Patient_Height = $rows['Patient_Height'];
         $Patient_Weight = $rows['Patient_Weight'];
         $Patient_BloodGroup = $rows['Patient_BloodGroup'];
         $Patient_Symptoms = $rows['Patient_Symptoms'];
         $Patient_Appointment = $rows['Patient_Appointment'];
         $Patient_MobNum = $rows['Patient_MobNum'];
         $RoomNum = $rows['RoomNum'];
         $Patient_Diagnosis = $rows['Patient_Diagnosis'];
         $Patient_Prescription = $rows['Patient_Prescription']; 

         echo "Patient ID : " . $Patient_ID . "<br>";
         echo "Name : " . $Patient_Name . "<br>";
         echo "Age : " . $Patient_Age . "<br>";
         echo "Gender : " . $Patient_Gender . "<br>";
         echo "Height : " . $Patient_Height . "<br>";
         echo "Weight : " . $Patient_Weight . "<br>";
         echo "Blood Group : " . $Patient_BloodGroup . "<br>";
         echo "Symptoms : " . $Patient_Symptoms . "<br>";
         echo "Appointment Timings : " . $Patient_Appointment . "<br>";
         echo "Mobile Number : " . $Patient_MobNum . "<br>";
         echo "Room Number : " . $RoomNum . "<br>";
         echo "Diagnosis : " . $Patient_Diagnosis . "<br>";
         echo "Prescription : " . $Patient_Prescription . "<br>";
    }
}

if($_POST['register'] == "register") {
      header('Location: InputPatientDetails.html');
}

/* if(isset($_POST['register'])) {
       header('Location: InputPatientDetails.html');
} */

?>