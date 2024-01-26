<?php
if (isset($_POST["submit"])){
    $profilepic=$_POST['profile-pic'];
    $NIC=$_POST['NIC'];
	$firstName=$_POST['FirstName'];
	$LastName=$_POST['LastName'];
    $TypeOfPlan=$_POST['TypeOfPlan'];
    $AddressLine01=$_POST['Address01'];
    $AddressLine02=$_POST['Address02'];
    $DateOfBirth=$_POST['DateOfBirth'];
    $Gender=$_POST['Gender'];
    $contactNumber=$_POST['contactNumber'];
    $Email=$_POST['Email'];
    $UpdateMedical=$_POST['UpdateMedical'];
    $Paymethod=$_POST['Paymethod'];
    $Paymentfrequency=$_POST['PaymentFrequency'];


    include'dbh.php';
    
    $sql="INSERT INTO register(profilepic,NIC,FirstName,LastName,TypeOfPlan,AddressLine01,AddressLine02,DateOfBirth,Gender,contactNumber,Email,UpdateMedical,Paymethod,Paymentfrequency) values('$profilepic','$NIC','$firstName','$LastName','$TypeOfPlan','$AddressLine01','$AddressLine02',
    '$DateOfBirth','$Gender','$contactNumber','$Email','$UpdateMedical','$Paymethod','$Paymentfrequency');";


    if (mysqli_query($conn,$sql)==True){
        echo"<script>alert('Details is added');window.location.href='../profile_reg.php';</script>";
    }else{
        echo "Error";

    }

    $duplicate = mysqli_query($conn, "SELECT * FROM register WHERE NIC='$NIC',contactNumber='$contactNumber'");
    if (mysqli_num_rows($duplicate) > 0) {
    echo "<script>alert('NIC is already registered'); window.location.href='profile_reg.php';</script>";
    }


   /* $duplicate=mysqli_query($conn,"select * from register where NIC='$NIC'");
if (mysqli_num_rows($duplicate)>0)
{
header("Location: ../profile_reg.php?message=NIC already exists.");
}*/
}
?>