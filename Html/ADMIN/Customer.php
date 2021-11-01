<?php

include 'config.php';

error_reporting(0);

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number =$_POST['number'];
    $address = $_POST['address'];
    $occupation = $_POST['occupation'];
    $gender = $_POST['gender'];

 
    $sql = "SELECT * FROM customer WHERE number = 'number'";
    $result = mysqli_query($conn, $sql);
    if(!$result->num_rows > 0) {
        $sql = "INSERT INTO customer (fullname, email, number, address, occupation, gender)
        VALUES ('$name', '$email', '$number', '$address', '$occupation', '$gender')";
	$result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Wow! Customer Registration Completed.')</script>";
        $name = "";
        $email = "";
        $number = "";
        $address = "";
        $occupation = "";
        $gender = "";
    
       
    } else {
        echo "<script>alert('Woops! Something Wrong Went.')</script>";
    }
} else {
    echo "<script>alert('Woops! Phone number Already Exists.')</script>";
} 

  
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Customers</title>


    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../CSS/customer.css">
 
    <script type="text/javascript" src="../../JS/script.js"></script>

 





</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2> <span class="lab la-accusoft"></span><span><a href="../../index.html" style="color: white;">WinaBwangu</a></span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php"><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="Customer.php" class="active"><span class="las la-users"></span><span>Customer</span></a>
                </li>
                <li>
                    <a href="Deposit.php" ><span class="la la-money"></span><span>Deposit</span></a>
                </li>
                <li>
                    <a href="withdraw.php"><span class="la la-bank"></span><span>Withdraw</span></a>
                </li>
                <li>
                    <a href="Booth.php"><span class="las la-building"></span><span>Booths</span></a>
                </li>
                <li>
                    <a href="agents.php"><span class="las la-user-circle"></span><span>Agents</span></a>
                </li>
                <li>
                    <a href="Transaction.php" ><span class="las la-archive"></span><span>Transactions</span></a>
                </li>
            </ul>
        </div>
 
    </div>
     

    <div class="main-content">
        <header>
        <!-- <div class="header-title"></div> -->
        <h2>
                 <label for="nav-toggle">
                     <span class="las la-bars"></span>
                 </label>
                Customers
                 </h2>
                 
                 
                 <div class="user-wrapper">
                    <img src="../../MEDIA/USER/dummy.png" width="40px" height="40px" alt="default image">
                    <div>
                        <h4>Admin</h4>
                        <span> <?php echo "<h5>Welcome " . $_SESSION['username'] . "</h5>"; ?>
    <a href="logout.php">Logout</a></span>
                        <!-- <a href="../../index.html"><small>Log-out</small> </a> -->
                    </div>
  
                   </div>
        </header>
<!-- 
registration content -->
 

<div class="container">
    <div class="title">Registration</div>
   <div id="error"></div>
   <form name="myForm"  method="post" action="">
   <div class="user-details">
   
   <div class="input-box">
   <span class="details">Full Name</span>
   <input type="text" placeholder="Enter customer names" name="name"  value="<?php echo $_POST['username'];?>">
   <div class="error" id="nameErr"></div>
   </div>
   
   
   <div class="input-box">
       <span class="details">Email address</span>
       <input type="text" placeholder="Enter customer email" name="email" value="<?php echo $_POST['email'];?>">
 
       </div>
   
       <div class="input-box">
           <span class="details">Phone number</span>
           <input type="text" placeholder="Enter phone number" name="number" value="<?php echo $_POST['number'];?>">
  
           </div>
   
           
   
               
   
                   <div class="input-box">
                       <span class="details">Physical address</span>
                       <input type="text" placeholder="Enter Physical address" name="address" value="<?php echo $_POST['address'];?>">
                 
                       </div>
   
                       <div class="input-box">
                           <span class="details">Occupation</span>
                           <input type="text" placeholder="Enter occupation"  name="occupation" value="<?php echo $_POST['occupation'];?>">
      
                           </div>
   
                           <div class="input-box">
                           <span class="details">Gender</span>
                           <input type="text" placeholder="Gender"  name="gender" value="<?php echo $_POST['gender'];?>">
                        
                            
                           </div>
   
   
   
   </div>
   
   
  
   
   <div class="button">
       <input type="submit" name="submit" value="Register">
   </div>
   
   </form>
   
   
   
   
   </div>









        <main>

 
     
    </div>
 
</body>
</html>