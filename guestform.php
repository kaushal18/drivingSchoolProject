<!DOCTYPE html>
<html>

<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "drivings";

// $con = mysqli_connect($servername, $username, $password, $dbname);
// if($con == NULL) {
// 	echo " Connection Failed";
// }
// else {
// 	echo "Connected";
// }


//mysqli_select_db($con, 'drivings');


?>

<head>
	<title>Driving School Management System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#0b00ff">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="guestform-style.css">
	<link rel="stylesheet" type="text/css" href="button.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!--<script type = "text/javascript" src = "js/jquery.js"> </script> -->
</head>

<body>
	<!-- navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html">Services</a></li>
            <li><a href="index.html">Testimonials</a></li>
            <li><a href="index.html">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.html">login <i class="fas fa-sign-in-alt"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- end navigation -->
	
	<!-- form -->
	<div class="myform">
		<div class="container">
			<h2>Registration form</h2>
			<p>Please fill the form and submit it with your valid details <br>We assure you that your personal data will be kept safe and secure.<br></p>
			<form onsubmit="return validateform()" method="POST">
				<div class="form-inline">
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<label for="fname">First Name</label><br>
							<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
						</div>
						<div class="col-lg-4 col-md-4">
							<label for="fname">Middle Name</label><br>
							<input type="text" class="form-control" id="mname" placeholder="Enter Middle Name" name="mname">
						</div>
						<div class="col-lg-4 col-md-4">
							<label for="fname">Last Name</label><br>
							<input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
						</div>
					</div>
				</div>
				
				<br>
				
				<div class="form-group">
					<label for="email">Email ID</label>
					<input type="text" class="form-control" id="email" name="email" placeholder="Enter your valid email ID">
				</div>
				
				
				
				<div class="form-inline">
					<div class="row">
					<div class="col-lg-3 col-md-3">
							<label for="dob">Date fo Birth</label><br>
							<input type="date" class="form-control" id="dob" name="dob">
					</div>
					<div class="col-lg-3 col-md-3">
							<label for="age">Age</label><br>
							<input type="number" class="form-control" id="age" name="age" value="18">
					</div>
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="raddress">Residential Address</label>
					<input type="text" class="form-control" id="raddress" name="raddress" placeholder="Your residential address here...">
				</div>
				
				<br>
				
				<div class="form-group">
					<label for="plocation">Pickup Location</label>
					<input type="text" class="form-control" id="plocation" name="plocation" placeholder="Your pickup location here..."><br>
					<div class="form-group form-check">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" value="no" id="sameas">&nbsp;&nbsp;Same as residential address? 
						</label>
					</div>
				</div>
				
				<br>
				
				<div class="form-inline">
					<label for="mobile">Mobile No. :</label>&nbsp&nbsp
					<input type="text" class="form-control" id="mobile" name="mobile" placeholder="6553465345">
				</div>	
				
				<button type="submit" class="mybutton"><span>Register Me</span></button>
			</form>
		</div>
	</div>
	<!-- end form -->

	<!-- footer -->
    <div class="footer">
     	<div class="container">
         	<div class="row">
             	<div class="col-lg-4 col-md-4">
	                 <h4>Contact Us</h4>
	                 <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;111 Main Street, Washington DC, 22222</p>
	                 <p><i class="fas fa-at"></i>&nbsp;&nbsp;info@drive.com</p>
	                 <p><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;+1 222 222 2222</p>
             	</div>
             	<div class="col-lg-4 col-md-4">
	                 <h4>names</h4>
             	</div>
             	<div class="col-lg-4 col-md-4">
	                 <h4>About</h4>
	                 <p>About Us</p>
	                 <p>Privacy</p>
	                 <p>Term & Condition</p>
             	</div>
         	</div>
     	</div>
 	</div>
 	<!-- end footer -->


	<script>
	function validateEmail(email1) {
		var re=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
		return re.test(email1);
	}
	function validateform() {
		var fname=document.getElementById("fname").value;
		var mname=document.getElementById("mname").value;
		var lname=document.getElementById("lname").value;
		var dob=document.getElementById("dob").value;
		var age=document.getElementById("age").value;
		var plocation=document.getElementById("plocation").value;
		var raddress=document.getElementById("raddress").value;
		var mobile=document.getElementById("mobile").value;
		var email=document.getElementById("email").value;
		var x=/^\d+$/;     
		if(fname==null || fname=="") {
			alert("First name can't be blank");
			return false;
		}
		else if(x.test(fname)) {
			alert("Name must only contain characters");
			return false;
		}
		else if(mname==null || mname=="") {
			alert("Middle name can't be blank");
			return false;
		}
		else if(x.test(mname)) {
			alert("Name must only contain characters");
			return false;
		}
		else if(lname==null || lname=="") {
			alert("Last name can't be blank");
			return false;
		}
		else if(x.test(lname)) {
			alert("Name must only contain characters");
			return false;
		}
		else if(!validateEmail(email)) {
			alert("Wrong format of Email ID is entered (abc@xyz.com)");
			return false;
		}
		else if(dob==null || dob=="") {
			alert("Date of Birth can't be blank");
			return false;
		}
		else if(age==null || age=="") {
			alert("age can't be blank");
			return false;
		}
		else if(raddress==null || raddress=="") {
			alert("Residential Address can't be blank");
			return false;
		}
		else if(plocation==null || plocation=="") {
			alert("Pickup location can't be blank");
			return false;
		}	
		else if(!x.test(mobile)) {
			alert("enter valid number");
			return false;
		}
		else if(mobile.length !=10) {
			alert("Phone number must contain exactly 10 digits");
			return false;
		}
	}
	</script>

	<!-- disable pickup location -->
	<script>
	$(document).ready(function(){
	    $("#sameas").click(function(){
	    	var flag = $("#sameas").val();
	        if(flag == "no") {
	    		$("#sameas").val("yes");
				var resiadd = $("#raddress").val();
				//alert(resiadd);
				$("#plocation").val(resiadd);
				$("#plocation").prop('disabled','true');
	        }
	        else {
	        	$("#sameas").val("no");
				var flag = "";
				$("#plocation").val(flag);
				$("#plocation").removeProp('disabled');
	       	}
	    });
	});
	</script>

	<!-- button hover -->
    <script>
	document.querySelector('.mybutton').onmousemove = (e) => {

		const x = e.pageX - e.target.offsetLeft
		const y = e.pageY - e.target.offsetTop

		e.target.style.setProperty('--x', `${ x }px`)
		e.target.style.setProperty('--y', `${ y }px`)
	
	}
	</script>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>