<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: dashboard.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
 
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../CSS/login.css">
    <title>Sign in</title>


 
 


<style>



</style>

</head>
         
        
    
        <body>
          <div class="main">
            <p class="sign" align="center">Sign in</p>
            <form method="POST" action = "" class="form1" >
              <input class="un " type="email" align="center" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
              <input class="pass" type="password" align="center" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
              <button name="submit" class="submit">Login</button>
           
              <p class="forgot" align="center"><a href="#">Forgot Password?</p>
                    
                
            </div>




</body>
</html>