<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div id="heading">
<div id="logo">
<a href="Index.php" class="buildsite">MyHomePage</a>
<br><span id="connect">LEARNING SOMETHING NEW!</span></div>
<div id="tab1"><a href="Index.php" class="log">SIGNUP</a></div>
<div id="tab2"><a href="login.php" class="log">LOGIN</a></div>
<div id="tab3"><a href="about.php" class="log">ABOUT</a></div>
</div>
<div id="main">
<div id="signup">
SIGN UP
</div>
<div id="forms">
<form action="" method="POST" name="myform" onsubmit="return(validate());">
*<input type="text" name="name" placeholder="Your Name" id="details">
*<input type="text" name="username" placeholder="Choose a Username" id="details"><br>
*<input type="password" name="password" placeholder="New Password" id="details">
*<input type="password" name="rpassword" placeholder="Re-enter Password" id="details"><br>
*<input type="text" name="mail" placeholder="Your E-Mail" id="details"><br>
*<input type="radio" name="gender" value="Male"><span id="mf">Male</span>
<input type="radio" name="gender" value="Female"><span id="mf">Female</span><br>
<input type="submit" name="submit" value="Submit" id="sbut">
</form>
</div>
<?php
if(isset($_POST['submit'])){
$con=mysqli_connect("localhost","vardhman","vardhi","assign");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$mail = mysqli_real_escape_string($con, $_POST['mail']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);

$sql="INSERT INTO form_data (Name ,username, Email, password, Gender)
VALUES ('$name', '$username', '$mail', '$password', '$gender')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo nl2br("You have Signed-Up Successfully!\nYou can now Log-In!");

mysqli_close($con);
}
?>

</div>
<script type="text/javascript" src="index.js"></script>
</body>
</html>
