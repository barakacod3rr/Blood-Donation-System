<?php

if(isset($_POST["adda"])){
    $uname = $_POST['uname'];
	$hname = $_POST['hname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $question = $_POST['rq'];
    $answer = $_POST['ra'];
    $password = $_POST['pass'];
    $passconfirm = $_POST['cpass'];

require_once 'dbconnection.inc.php';

if (empty($password)){
	echo "Kindly input a password.";
}

else if ($password == $passconfirm) {


$sql = "INSERT INTO `hospitals`(`Hospital_Name`, `Username`, `Phone_Number`, `Email_Address`, `Recovery_Question`, `Recovery_Answer`, `Password`) VALUES ('$hname','$uname','$phone','$email','$question','$answer',md5('$password'))";

	mysqli_query($conn, $sql);
	 // var_dump($sql);
	 // die();
	header("Location: index1.php?signup=success");

}else{
	echo "Passwords do not match.";
}

}


if(isset($_POST["addr"])){

  $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $hid = $_POST['hid'];
    $mod = $_POST['mod'];

$don = 0;
$pat = 1;

require_once 'dbconnection.inc.php';

if ($mod == $don){
  $sql2 = "SELECT * FROM `hospitals` WHERE `Hospital_ID`='$hid'";
        // var_dump($sql);
        // die();
        
        $query2 = mysqli_query($conn,$sql2);

        if(mysqli_num_rows($query2) > 0){
            $row2 = mysqli_fetch_assoc($query2);

                $sta = $row2['Hospital_Name'];
                  

 $sql1 = "INSERT INTO `donors`(`Fullname`, `Phone_Number`, `Email_Address`, `Preferred_Hospital`, `Donation_Date`, `Donation_Quantity`, `Status`) VALUES ('$fname','$phone','$email','$hid','N/a','N/a','Pending')";

 mysqli_query($conn, $sql1);
   // var_dump($sql);
   // die();
 // header("Location: index1.php");

echo "<p>Thank you for choosing to donate with us " . $fname . "!!! You have selected " . $sta . " as your preferred hospital. We will contact you as soon as you are scheduled for an appointment, take care!</p>
<br>
<br> 
<p>P.S: Click <a href='index.php'>HERE</a> to go home: </p>";
}
}
else if ($mod == $pat) {

$sql2 = "SELECT * FROM `hospitals` WHERE `Hospital_ID`='$hid'";
        // var_dump($sql);
        // die();
        
        $query2 = mysqli_query($conn,$sql2);

        if(mysqli_num_rows($query2) > 0){
            $row2 = mysqli_fetch_assoc($query2);

                $sta = $row2['Hospital_Name'];
                  

 $sql3 = "INSERT INTO `patients`(`Fullname`, `Phone_Number`, `Email_Address`, `Preferred_Hospital`, `Date_of_Receive`, `Status`) VALUES ('$fname','$phone','$email','$hid','N/a','Pending')";

 mysqli_query($conn, $sql3);
   //var_dump($sql3);
   // die();
 // header("Location: index1.php");

echo "<p>Thank you for choosing to receive from us " . $fname . "!!! You have selected " . $sta . " as your preferred hospital. We will contact you as soon as you are scheduled for an appointment, take care!</p>
<br>
<br> 
<p>P.S: Click <a href='index.php'>HERE</a> to go home: </p>";


            }else{
                echo "Error Occured. The hospital ID you chose is currently not there.</br> Please choose a hospital that is available 
                <br>
                <br> 
                <p>P.S: Click <a href='index.php'>HERE</a> to go home: </p>";
            }
        }

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>INCORRECT</title> 
         <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    </head>
</html>