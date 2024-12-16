                                            <!--MAIN ADMIN HOMEPAGE-->
<?php
require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['Email']) && !isset($_SESSION['adminname'])) {
    header("Location: index.php");
}else{
  $email = $_SESSION['Email'];
  $query=mysqli_query($conn,"SELECT * FROM `hospitals` WHERE `Email_Address`='$email'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>RED LIVES - Homepage</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    

   

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
     <!-- <div id="preloader">
		<div class="loader">
			<img src="images/preloader.gif" alt="" />
		</div>
    </div>end loader -->
    <!-- END LOADER -->
	
	<!-- Start top bar -->
	<div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-top">
						<a class="new-btn-d br-2" href="#services"><span>Book Appointment</span></a>
						
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wel-nots">
						<p>Welcome to Our Blood Bank and Donation Management System!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End top bar -->
	
	    <style type="text/css">
        
          table{
    border: solid 1px black;
    align-items: center;
  }

   th, tr, td{
    border: solid 1px black;
    padding: 0px 0px;
  }
    </style>

	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a href="index.php"><!-- <img src="images/logo.png" alt="image"> --><p style="font-size: 30px; color: red;">RED LIVES</p></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">About Us</a></li>
                        <li><a class="nav-link" href="#services">Administrators</a></li>
						<li><a class="nav-link" href="#appointment">Update</a></li>
                        <li><a class="nav-link" href="#gallery">Schedules</a></li>
						<li><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->
	
	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-01.jpeg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Welcome Administrator, <?php echo $row['Username'] ?></h1>
								<p>A platform where blood donors can easily volunteer to give blood and patients can request for blood.</p>
								<a href="#contact" class="btn">Contact Us</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-02.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>We are Expert in The Field of Blood Donation</h1>
								<p>Our system has the ability to keep Donor and Patient records.</p>
								<a href="#appointment" class="btn">Appointment</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-03.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Thank you for working with us!</h1>
								<p>Ready blood donors and patients that need blood can register within the system for appointments and the suggested hospitals can be alerted on their side and they can coordinate the appointment schedules</p>
								<a href="#" class="btn">Contact Us</a>
							</div>
						</div>
						
					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	                         <!---------------------------- End Banner -------------------------->
	
	                                  <!------------------------ ABOUT US---------------------->
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>About Us</h2>
							<p>A userfriendly platform where blood donations are made easier to the patients and hospitals.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<h2> Welcome to RED Lives </h2>
								<p>Healthcare centres organise blood donations manually by setting up blood donation camps and going to institutions like schools. This process, however, requires a lot of time and resources since a large number of people come at once to one place. Moreover, keeping track of documents may be challenging since all the documents are done manually.</p>
								<p>The main aim of the system is to create a user-friendly platform that blood donors and patients in need of blood can reach out to hospitals for their needs be it requesting for blood or volunteering to give blood. In addition, hospital administrators are able to schedule for their donors and patient's appointments.</p>
							
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="about-m">
									<ul id="banner">
										<li>
											<img src="images/about-img-01.jpeg" alt="">
										</li>
										<li>
											<img src="images/about-img-02.jpg" alt="">
										</li>
										<li>
											<img src="images/about-img-03.jpg" alt="">
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	                     <!---------------------- End About us -------------------------->

		        <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

		        <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

		        <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>
	
	<!-- Start Services -->
	<div id="services" class="services-box">
		<div class="container">
			<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>List of Hospital Administrators</h2>
						</div>
					</div>
				</div>
			<div class="row">
				
				                        <table id="printTable">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Hospital ID</th>
<th style="text-align: left;
  padding: 8px;">Username</th>
  <th style="text-align: left;
  padding: 8px;">Hospital Name</th>
  <th style="text-align: left;
  padding: 8px;">Phone Number</th>
<th style="text-align: left;
  padding: 8px;">Email Address</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "blood_bank");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Hospital_ID`, `Hospital_Name`, `Username`, `Phone_Number`, `Email_Address` FROM `hospitals`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Hospital_ID"] . "</td><td>" . $row["Username"] . "</td><td>" . $row["Hospital_Name"] . "</td><td>" . $row["Phone_Number"] . "</td><td>"
. $row["Email_Address"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
<br>
<br> 
<br>
<br>
</div>
<div class="row">
				<div class="col-lg-12">
<button class="btn btn-common" onclick="printData()">Print the List of Hospitals</button> 
				</div>
			</div>
			 <div class="row">
<label style="text-align: center;">To Add A Hospital Administrator, kindly fill the form below:</label>
<br>
<br>
<form method="POST" action="insertion.inc.php">
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Hospital Name</label>
                                        <input id="name" name="hname" required type="text" placeholder="Hospital Name" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Username</label>
                                        <input id="name" name="uname" required type="text" placeholder="Fullname" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" required type="email" placeholder="Email Address" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Phone Number</label>
                                        <input id="date" name="phone" type="text" required placeholder="07 XXXX XXXX" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text Input -->
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Recovery Question</label>
                                        <input id="id" type="text" name="rq" required placeholder="Password Recovery Question..." class="form-control input-md">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Recovery Answer</label>
                                        <input id="id" type="text" name="ra" required placeholder="Password Recovery Question.." class="form-control input-md">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Password</label>
                                        <input id="pass" type="password" name="pass" required placeholder="Password..." class="form-control input-md">
                                        <input type="checkbox" onclick="myFunction()">Show Password
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Verify Password</label>
                                        <input id="pass1" type="password" name="cpass" required placeholder="Password #1..." class="form-control input-md">
                                        <input type="checkbox" onclick="myFunction1()">Show Password
                                    </div>
                                </div>
                            
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="adda" class="new-btn-d br-2">Add Administrator</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <br>
                <br>
                                 <!--------------------- Revealing password function-------------------->
                	<script type="text/javascript">
				
								function myFunction() {
          var x =
          document.getElementById('pass');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }
  
        						function myFunction1() {
          var x =
          document.getElementById('pass1');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }

			</script>

                 <div class="row" style="text-align: center;">
<label>To Delete an Administrator, kindly input the Hospital ID in the field below:</label>
<br>
<br>
<form method="POST" action="delete.php">
	<div class="col-md-12">
                                    <div class="form-group">
 <input id="" type="text" name="id" required placeholder="Administrator ID..." class="form-control input-md">
                                    </div>
                                       <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="dela" class="new-btn-d br-2">Delete Administrator</button>
                                    </div>
                                </div>
</form>
                </div>
                    </div>
                </div>
            </div>
			
	<!-- End Services -->
	
	<!-- Start Appointment -->
	<div id="appointment" class="appointment-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>List of Patients & Donors</h2>
					
					</div>
				</div>
			</div>

			                      <!-----------------------DONOR DATA TABLE---------------------------->

			<div class="row">
								                        <table id="printTable2">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Donor ID</th>
<th style="text-align: left;
  padding: 8px;">Fullname</th>
  <th style="text-align: left;
  padding: 8px;">Phone Number</th>
  <th style="text-align: left;
  padding: 8px;">Email Address</th>
<th style="text-align: left;
  padding: 8px;">Preferred Hospital</th>
    <th style="text-align: left;
  padding: 8px;">Donation Date</th>
      <th style="text-align: left;
  padding: 8px;">Donation Quantity</th>
<th style="text-align: left;
  padding: 8px;">Status</th>
</tr>
               <!--------------------------- Fetch data from sql to table for donors--------------------------->
<?php
$conn = mysqli_connect("localhost", "root", "", "blood_bank");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Donor_ID`, `Fullname`, `Phone_Number`, `Email_Address`, `Preferred_Hospital`, `Donation_Date`, `Donation_Quantity`, `Status` FROM `donors`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Donor_ID"] . "</td><td>" . $row["Fullname"] . "</td><td>" . $row["Phone_Number"] . "</td><td>" . $row["Email_Address"] . "</td><td>"
. $row["Preferred_Hospital"]. "</td><td>"
. $row["Donation_Date"]. "</td>
<td>"
. $row["Donation_Quantity"]. "</td>
<td>"
. $row["Status"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
<br>
<br> 
<br>
<br>
</div>
                                   <!-----------------------------PATIENTS DATA TABLE--------------------------->

<div class="row">
				<div class="col-lg-12">
<button class="btn btn-common" onclick="printData2()">Print the List of Donors</button> 
				</div>
			</div>
				<div class="row">
				
				                        <table id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Patient ID</th>
<th style="text-align: left;
  padding: 8px;">Fullname</th>
  <th style="text-align: left;
  padding: 8px;">Phone Number</th>
  <th style="text-align: left;
  padding: 8px;">Email Address</th>
<th style="text-align: left;
  padding: 8px;">Preferred Hospital</th>
    <th style="text-align: left;
  padding: 8px;">Date of Received Blood</th>
<th style="text-align: left;
  padding: 8px;">Status</th>
</tr>
             <!-- Fetch data from sql to table for patients-->
<?php
$conn = mysqli_connect("localhost", "root", "", "blood_bank");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Patient_ID`, `Fullname`, `Phone_Number`, `Email_Address`, `Preferred_Hospital`, `Date_of_Receive`, `Status` FROM `patients`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Patient_ID"] . "</td><td>" . $row["Fullname"] . "</td><td>" . $row["Phone_Number"] . "</td><td>" . $row["Email_Address"] . "</td><td>"
. $row["Preferred_Hospital"]. "</td><td>"
. $row["Date_of_Receive"]. "</td>
<td>"
. $row["Status"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
                
</table>
<br>
<br> 
<br>
<br>
</div>
                                   <!-------------------------SCHEDULING EACH PERSON-------------------------->

<div class="row">
				<div class="col-lg-12">
<button class="btn btn-common" onclick="printData1()">Print the List of Patients</button> 
				</div>
			</div>
			 <div class="row">
<label style="text-align: center;">To Schedule or Update A Patient/Donor, kindly fill the form below:</label>
<br>
<br>
<form method="POST" action="delete.php">
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Hospital ID</label>
                                        <input id="name" name="hid" required type="text" placeholder="Hospital ID" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Patient ID</label>
                                        <input id="name" name="pid" required type="text" placeholder="Patient ID" class="form-control input-md">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Donor ID</label>
                                        <input id="name" name="did" required type="text" placeholder="Donor ID" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Donation Date</label>
                                        <input id="name" name="date" required type="date" class="form-control input-md">
                                        <input id="today" name="date2" hidden required type="text">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Donation Time</label>
                                        <input id="name" name="time" required type="time" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text Input -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Status</label>
                                        <select id="appointmentfor" required name="stat" class="form-control input-md">
                                            <option value="" disabled selected>Choose Status</option>
											<option value="Pending">Pending</option>
											<option value="Set">Set</option>
											<option value="Cancelled">Canclled</option>
											<option value="Completed">Completed</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="ups" class="new-btn-d br-2">Add Schedule</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <br>
                <br>

                                            <!--------------------------- UPDATING SCHEDULES------------------------->

                 <div class="row">
<label style="text-align: center;">To Update An Existing Schedule, kindly fill the form below:</label>
<br>
<br>
<form method="POST" action="delete.php">
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Schedule ID</label>
                                        <input id="name" name="sid" required type="text" placeholder="Schedule ID" class="form-control input-md">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Hospital ID</label>
                                        <input id="name" name="hid" required type="text" placeholder="Hospital ID" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Patient ID</label>
                                        <input id="name" name="pid" required type="text" placeholder="Patient ID" class="form-control input-md">
                                    </div>
                                </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Donor ID</label>
                                        <input id="name" name="did" required type="text" placeholder="Donor ID" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Donation Quantity</label>
                                        <input id="email" name="quan" type="number" placeholder="Donation Quantity in ml" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Date to Receive Blood</label>
                                        <input id="date" name="rec" type="date" class="form-control input-md">
                                        <input id="today1" name="date1"  hidden required type="text">
                                    </div>
                                </div>
                                <!-- Text Input -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Status</label>
                                        <select id="appointmentfor" required name="stat" class="form-control input-md">
                                            <option value="" disabled selected>Choose Status</option>
											<option value="Pending">Pending</option>
											<option value="Set">Set</option>
											<option value="Cancelled">Cancelled</option>
											<option value="Completed">Completed</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="ups1" class="new-btn-d br-2">Update Schedule</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                                  <!--------------------------- DELETING PATIENT AND DONOR IDS------------------------>

                 <div class="row" style="text-align: center;">
<label>To Delete a Paitent/Donor, kindly input the Patient/Donor ID in the field below:</label>
<br>
<br>
<form method="POST" action="delete.php">
	<div class="col-md-12">
                                    <div class="form-group">
 <input id="" type="text" name="id4" required placeholder="Patient/Donor ID..." class="form-control input-md">
                                    </div>
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Module</label>
                                        <select id="appointmentfor" required name="mod" class="form-control input-md">
                                            <option value="" disabled selected>Choose Module</option>
											<option value="1">Patient</option>
											<option value="0">Donor</option>
                                        </select>
                                    </div>
                                </div>
                                       <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="dels" class="new-btn-d br-2">Delete Donor/Patient</button>
                                    </div>
                                </div>
</form>
                </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</form>
</div>
</div>
</div>
</form>
</div>
</form>
</div>
</div>
</div>
                        <!------------------------------ form end ---------------------------->
	                    <!------------------------------- End Appointment ---------------------------->
	
			        <script type="text/javascript">
function printData3()
{
   var divToPrint=document.getElementById("printTable3");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

      <script>
 n =  new Date();
  y = n.getFullYear();
  m = n.getMonth() + 1;
  d = n.getDate();
  document.getElementById("today").value = m + "/" + d + "/" + y;
  </script>

        <script>
 n =  new Date();
  y = n.getFullYear();
  m = n.getMonth() + 1;
  d = n.getDate();
  document.getElementById("today1").value = m + "/" + d + "/" + y;
  </script>

	<!-- Start Gallery -->
	<div id="gallery" class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>List of Schedules</h2>
						
					</div>
				</div>
			</div>

			                           <!--------------------------- SCHEDULES DATA TABLE-------------------------->

						<div class="row">
								                        <table id="printTable3">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Schedule ID</th>
<th style="text-align: left;
  padding: 8px;">Donor ID</th>
  <th style="text-align: left;
  padding: 8px;">Patient ID</th>
  <th style="text-align: left;
  padding: 8px;">Date</th>
<th style="text-align: left;
  padding: 8px;">Time</th>
<th style="text-align: left;
  padding: 8px;">Status</th>
</tr>

                                <!-----------------------CONNECT SQL TO PHP FOR SCHEDULES---------------------->
                                
<?php
$conn = mysqli_connect("localhost", "root", "", "blood_bank");
                          // Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Schedule_ID`, `Donor_ID`, `Patient_ID`, `Date`, `Time`, `Status` FROM `schedule`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
                       // output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Schedule_ID"] . "</td><td>" . $row["Donor_ID"] . "</td><td>" . $row["Patient_ID"] . "</td><td>" . $row["Date"] . "</td><td>"
. $row["Time"]. "</td><td>"
. $row["Status"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
<br>
<br> 
<br>
<br>
</div>
<div class="row">
				<div class="col-lg-12">
<button class="btn btn-common" onclick="printData3()">Print the Schedules</button> 
				</div>
			</div>
		</div>
	</div>

	
	
	                <!----------------------------- CONTACT --------------------------------->
	<div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Log Out Below</h2>
						<a href="logout.php">LOGOUT</a> 
						           <style type="text/css">
						           	.title-box a {background-color: #f44336;}
						           </style>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-12 col-xs-12">
					<div class="left-contact">
						<h2>Contact Us</h2>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-location-arrow" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Address</h4>
								<p>Nairobi, Kenya</p>
							</div>
						</div>
						
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Phone Number</h4>
								<a href="#">+254 797 722930</a><br>
							</div>
						</div>
					</div>
				</div>
				              <div class="sdgpic">
				              <a href="https://www.globalgoals.org/goals/3-good-health-and-well-being/" target="_blank"><img src="images/sdgg3.png" width="180px" height="150px" alt="SDG Goal 3"></a></div>
				
			</div>
		</div>
	</div>
	                         <!------------------------------ End Contact ---------------------------->
	
	
	                                <!----------------------------- FOOTER------------------------------->
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">All Rights Reserved. &copy; 2022 <a href="#">RED LIVES</a> Design By : Eann Murimi (139118)</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>	
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>
</html>