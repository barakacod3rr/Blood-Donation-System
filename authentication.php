                                     <!--checking if login is correct in mainpage-->                                      
<?php
require_once "dbconnection.inc.php";

session_start();

if(isset($_POST['login'])){

    $id = $_POST['email'];
    $password = $_POST['password'];
    $email = 'eann.murimi@strathmore.edu';

    if(empty($id)){
        echo "Please input an email.";
    }else if(empty($password)){
        echo "Please enter your password."; 
        
   } else{
         $sql = "SELECT * FROM `hospitals` WHERE `Email_Address`='$email'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $pass = $row['Password'];

if(md5($password) == $pass){

                $_SESSION['adminname'] = $row['Hospital_ID'];
                $_SESSION['Email'] = $row['Email_Address'];
                echo "Login Succesful.";
                header("Location: index1.php");

                
            }else{
                $sql1 = "SELECT * FROM `hospitals` WHERE `Email_Address`='$id'";

        $query1 = mysqli_query($conn,$sql1);

        if(mysqli_num_rows($query1) > 0){
            $row1 = mysqli_fetch_assoc($query1);

            $pass1 = $row1['Password'];

if(md5($password) == $pass1){

                $_SESSION['adminname1'] = $row1['Hospital_ID'];
                $_SESSION['Email1'] = $row1['Email_Address'];
                echo "Login Succesful.";
                header("Location: index2.php");
            }
            }
            else{

             echo "Please input your correct credentials. </br>FOR LOGIN INQUIRIES</br> Email the Administrator: @eann.murimi@strathmore.edu </br> Call Administrator : 0797722930 </br >.
                <br>
                <br> 
                <p>P.S: Click <a href='index.php'>HERE</a> to go home: </p>";
            }
    
}     
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