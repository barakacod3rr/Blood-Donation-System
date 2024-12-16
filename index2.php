                                         <!-- HOSPITAL ADMINISTRATOR PAGE-->
<?php
require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['Email1']) && !isset($_SESSION['adminname1'])) {
    header("Location: index.php");
}else{
  $email = $_SESSION['Email1'];
  $query=mysqli_query($conn,"SELECT * FROM `hospitals` WHERE `Email_Address`='$email'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
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

	
	
	<!-- Start top bar -->
	<div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-top">
						<a class="new-btn-d br-2" href="#appointment"><span>Schedule Appointment</span></a>
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
	                 <!---------------------- End top bar ---------------------->
	
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

	                                 <!----------------------------- HEADER ------------------------------------->
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
						<li><a class="nav-link" href="#appointment">Update</a></li>
                        <li><a class="nav-link" href="#gallery">Schedules</a></li>
						<li><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	                        <!----------------------- End header ---------------------->
	
	                        <!-------------------------------- BANNER ------------------------------>
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-01.jpeg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Welcome Administrator, <?php echo $row['Username'] ?></h1>
								<p>A platform where blood donors can easily volunteer to give blood and patients can request for blood.</p>
								<a href="#services" class="btn">Administrators</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-02.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Do You Need Help?</h1>
								<p>Contact the main administrator below.</p>
								<a href="#contact" class="btn">Contact</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-03.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Thank you for working with us!</h1>
								<p>You can schedule your donor and patients awaiting appointments. Check those who have already picked your hospital ID first.</p>
								<a href="#appointment" class="btn">Schedule</a>
							</div>
						</div>
						
					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	                               <!------------------------ End Banner ----------------------------->
	
	                          <!--------------------------- ABOUT US --------------------------------->
	<div id="about" class="about-box">
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
	                                     <!------------------------ End About us ---------------------->

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
	
	                               
	
	                            <!--------------------------------- APPOINTMENTS -------------------------->
	<div id="appointment" class="appointment-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>List of Patients & Donors</h2>
					
					</div>
				</div>
			</div>
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
<div class="row">
				<div class="col-lg-12">
<button class="btn btn-common" onclick="printData1()">Print the List of Patients</button> 
				</div>
			</div>
			 <div class="row">
<label style="text-align: center;">SCHEDULE APPOINTMENTS for A Patient/Donor below:</label>
<br>
<br>
<form method="POST" action="delete1.php">
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
                 <div class="row">
<label style="text-align: center;">HAVE YOU DONATED YET? Update An Existing Appointment below:</label>
<br>
<br>
<form method="POST" action="delete1.php">
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
                 <div class="row" style="text-align: center;">
<label>To Delete a Paitent/Donor, kindly input the Patient/Donor ID in the field below:</label>
<br>
<br>
<form method="POST" action="delete1.php">
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
                                      <!------------------------- form end ----------------------->
	                       <!----------------------------- End Appointment ----------------------------------->
	
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

	
	
	                                  <!-------------------------- CONTACT ---------------------------------->
	<div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Log Out</h2>
						<p>Click <a href="logout.php">HERE</a> to Logout.</p>
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
				
			</div>
		</div>
	</div>
	                              <!---------------------- End Contact ------------------------------>
	
	
	                     <!--------------------------------- FOOTER --------------------------------->
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