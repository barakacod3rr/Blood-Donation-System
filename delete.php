                             <!--------------------------FOR SYSTEM ADMIN-------------------------->      
                                  
<?php

if (isset($_POST['dela'])) {
  require 'dbconnection.inc.php';

  $id = $_POST['id'];

  if (empty($id)) {
    echo "Please Input a Administrator ID.";
  }else{
    $sql = "DELETE FROM `hospitals` WHERE `Hospital_ID` = '$id'";
    mysqli_query($conn, $sql);
    header("Location: index1.php");
  }
}         
                                             // UPDATING SCHEDULES//

if (isset($_POST['ups'])) {
  require 'dbconnection.inc.php';

  $hid = $_POST['hid'];
  $pid = $_POST['pid'];
  $did = $_POST['did'];
  $stat = $_POST['stat'];
   $date = $_POST['date'];
  $time = $_POST['time'];
  $date2 = $_POST['date2'];

$timestamp = strtotime($date);
$timestamp2 = strtotime($date2);

if ($timestamp2 > $timestamp) {
  echo "Ensure date of schedule is after today's date.";
}else{

require_once 'dbconnection.inc.php';


$sql3 = "SELECT * FROM `hospitals` WHERE `Hospital_ID`='$hid'";
        // var_dump($sql);
        // die();
        
        $query2 = mysqli_query($conn,$sql3);

        if(mysqli_num_rows($query2) > 0){
            $row2 = mysqli_fetch_assoc($query2);

                $sta = $row2['Hospital_Name'];
                  

 $sql = "UPDATE `patients` SET `Preferred_Hospital`='$hid',`Status`='$stat' WHERE `Patient_ID` = '$pid'";
 $sql1 = "INSERT INTO `schedule`(`Donor_ID`, `Patient_ID`, `Date`, `Time`, `Status`) VALUES ('$did','$pid','$date','$time','$stat')";
 $sql2 = "UPDATE `donors` SET `Preferred_Hospital`='$hid',`Status`='$stat' WHERE `Donor_ID` = '$did'";

 mysqli_query($conn, $sql);
 mysqli_query($conn, $sql1);
 mysqli_query($conn, $sql2);

   // var_dump($sql);
   // die();
 //header("Location: index1.php");

echo "<p id='section'> You have succesfully set a schedule !!! Kindly contact the respective donor " . $did . " and patient " . $pid . " using their email or phone number.</p>
<br>
<br> 
<p>P.S: Click <a href='index1.php'>HERE</a> to go home: </p>";


            }else{
                echo "Incorrect Hospital ID.";
            }
        }
}
                                
                                        

        if (isset($_POST['ups1'])) {
  require 'dbconnection.inc.php';
    $sid = $_POST['sid'];
  $hid = $_POST['hid'];
  $pid = $_POST['pid'];
  $did = $_POST['did'];
  $stat = $_POST['stat'];
   $quan = $_POST['quan'];
  $rec = $_POST['rec'];
  $date1 = $_POST['date1'];

require_once 'dbconnection.inc.php';
  
  $timestamp = strtotime($rec);
$timestamp1 = strtotime($date1);

if ($timestamp1 > $timestamp) {
  echo "Ensure date of receive is after today's date.";
}else{                

 $sql = "UPDATE `patients` SET `Date_of_Receive`='$rec',`Status`='$stat' WHERE `Patient_ID` = '$pid'";
 $sql1 = "UPDATE `schedule` SET `Status`='$stat' WHERE `Schedule_ID` = '$sid'";
 $sql2 = "UPDATE `donors` SET `Donation_Date` ='$rec',`Donation_Quantity`='$quan',`Status`='$stat' WHERE `Donor_ID` = '$did'";

 mysqli_query($conn, $sql);
 mysqli_query($conn, $sql1);
 mysqli_query($conn, $sql2);

   // var_dump($sql);
   // die();
 // header("Location: index1.php");

echo "<p id='section'>You have succesfully completed a donation!!! The donation was between donor " . $did . " and patient " . $pid . ".</p>
<br>
<br> 
<p>P.S: Click <a href='index1.php'>HERE</a> to go home: </p>";
}

            }
        
                                   //DELETE DONORS AND PATIENT IDs//

if (isset($_POST['dels'])) {
  require 'dbconnection.inc.php';

  $id4 = $_POST['id4'];
 $mod = $_POST['mod'];

$don = 0;
$pat = 1;

require_once 'dbconnection.inc.php';

if ($mod == $don){
    $sql = "DELETE FROM `donors` WHERE `Donor_ID` = '$id4'";
    mysqli_query($conn, $sql);
    header("Location: index1.php");
} else if ($mod == $pat){
    $sql = "DELETE FROM `patients` WHERE `Patient_ID` = '$id4'";
    mysqli_query($conn, $sql);
    header("Location: index1.php");
}else {
  echo "Patient/Donor does not exist.";
}
}

?>