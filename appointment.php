<?php
$con = mysqli_connect('localhost', 'root', '','veterinary');

// get the post records
$txtfname = $_POST['txtfname'];
$txtlname = $_POST['txtlname'];
$txtpname = $_POST['txtpname'];
$txtanimaltype = $_POST['txtanimaltype'];
$txtemail = $_POST['txtemail'];
$txtcontact_no = $_POST['txtcontact_no'];
$txtreason = $_POST['txtreason'];
$txtappointment_date = $_POST['txtappointment_date'];

// database insert SQL code
$sql = "INSERT INTO 'patients' ('Id', 'firstname', 'lastname', 'petname', 'animaltype', 'email', 'contact_no', 'reason', 'appointment_date' ) VALUES ('0', '$txtfname', '$txtlname', '$txtpname', '$txtanimaltype', '$txtemail', '$txtcontact_no', '$txtreason', '$txtappointment_date')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Appointment Records Inserted";
}

?>