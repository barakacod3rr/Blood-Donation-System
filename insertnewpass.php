 <?php

     session_start();
      if(isset($_POST['submit'])){
        $password = $_POST['pass'];
        $passwordconfirm = $_POST['passc'];

require_once 'dbconnection.inc.php';

$email = $_SESSION['Email'];

if (empty($password)){
  echo "Kindly input a Password.";
} else if (empty($passwordconfirm)){
  echo "Kindly input Confirm Password.";
} 
else if($password == $passwordconfirm){


$sql = "UPDATE `hospitals` SET `Password`=md5('$password') WHERE `Email_Address`= '$email'";

         $query = mysqli_query($conn,$sql);
       // var_dump($sql);
        if ($conn->query($sql) === TRUE) {
  echo "New Password Recorded Successfully";
   header("Location: index.php");
   session_destroy();
 }
 else {
  echo "Error updating record: " . $conn->error;
}
} 
}

?>
     
