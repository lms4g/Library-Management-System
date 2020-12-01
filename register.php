<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>library management System</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <link href="css/all.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<style type="text/css">
<!--
.style1 {color: #CCCCCC}
-->
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: transparent;
  border-radius:4px 4px 4px 4px;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
  color:white;
}

.bgcolor{
margin-left:0px;
margin-right:0px;

}
</style>
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body style="background-color:3CAEA3;"> 
        <div>
		<img src="img/log.jpg" style="width:100%;" />
		</div>
		<div class="bgcolor">
			<ul>
				<li><a href="index.html">Home |</a></li>
				<li><a href="login.php">Login</a></li>
				
			 </ul>
		</div>
		
		<div class="login">
			<div class="inside_login">
		
				<h1 style="text-align:center;">Register Form</h1>
				<hr />
				<label>Fisrt name</label>
				<br />
				<input class="inp" type="text" name="email" placeholder="Enter your first name ..." required />
				<br />
				<label>Second name</label>
				<br />
				<input class="inp" type="text" name="email" placeholder="Enter your second name ..." required />
				<br />
				<label>Role</label>
				<br />
				<input class="inp" type="text" name="email" placeholder="Enter your role ..." required />
				<p><i> i.e Student ,visitor, employee</i></p>
				<br />
				<label>Email</label>
				<br />
				<input class="inp" type="email" name="email" placeholder="Enter your email ..." required />
				<br />
				<label>Password</label>
				<br />
				<input class="inp" type="password" name="email" placeholder="Enter password" required />
				<br />
				<label>Confirm Password</label>
				<br />
				<input class="inp" type="password" name="email" placeholder="confirm password" required />
				<br />
				<br />
				<div style="text-align:center;"><button> Register</button>
				</div>
				<br />
				<h4 style="text-align:center;">Have an account?<a href="login.php">Click here</a> to log in</h4>
				<br />
				<br />
				
			</div>
		</div>

	<div style="text-align:center;">
		
			<p style="color:white;">
			Copyright &copy; 2020 Library Manangement system 
            </p>
		
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			var acc = document.getElementsByClassName("accordion");
			var i;
			
			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var panel = this.nextElementSibling;
			    if (panel.style.maxHeight) {
			      panel.style.maxHeight = null;
			    } else {
			      panel.style.maxHeight = panel.scrollHeight + "px";
			    }
			  });
			}	
		});
	</script>
</body>
</html>