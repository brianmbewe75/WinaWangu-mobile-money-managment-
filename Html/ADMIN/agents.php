<?php

include 'config.php';

error_reporting(0);

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $phonenumber = ($_POST['number']);
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $address = ($_POST['address']);
    $gender = ($_POST['gender']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM agent WHERE email = 'email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO agent (username, email, phonenumber, password, address, gender)
        VALUES ('$username', '$email', '$phonenumber', '$password', '$address', '$gender')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Wow! Agent Registration Completed.')</script>";
                $username = "";
                $email = "";
                $address = "";
                $gender = "";
                $phonenumber = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Already Exists.')</script>";
        }
    } else {
        echo "<script>alert('Password Not Matched.')</script>";
    }
}




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Agents</title>


    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../CSS/agents.css">
    <link rel="stylesheet" href="../../CSS/style.css">








</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2> <span class="lab la-accusoft"></span><span><a href="#" style="color: white;">WinaBwangu</a></span></h2>
        </div>


        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php"><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="Customer.php"><span class="las la-users"></span><span>Customer</span></a>
                </li>
                <li>
                    <a href="Deposit.php"><span class="la la-money"></span><span>Deposit</span></a>
                </li>
                <li>
                    <a href="withdraw.php"><span class="la la-bank"></span><span>Withdraw</span></a>
                </li>
                <li>
                    <a href="Booth.php"><span class="las la-building"></span><span>Booths</span></a>
                </li>
                <li>
                    <a href="agents.php" class="active"><span class="las la-user-circle"></span><span>Agents</span></a>
                </li>
                <li>
                    <a href="Transaction.php"><span class="las la-archive"></span><span>Transactions</span></a>
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
                Agents
            </h2>

            <!-- Drop down hear -->






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
        <main>

            <div class="container">
                <div class="title">Add Agent</div>
                <div id="error"></div>
                <form name="myForm" action="" method="POST">
                    <div class="user-details">

                        <div class="input-box">
                            <span class="details">User Name</span>
                            <input type="text" placeholder="Enter your names" name="username" value="<?php echo $_POST['username'] ?>">

                        </div>


                        <div class="input-box">
                            <span class="details">Email address</span>
                            <input type="text" placeholder="Enter your email" name="email" value="<?php echo $_POST['email'] ?>">

                        </div>

                        <div class="input-box">
                            <span class="details">Phone number</span>
                            <input type="text" placeholder="Enter your number" name="number" value="<?php echo $_POST['number'] ?>">

                        </div>

                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="password" placeholder="Enter your password" name="password" value="<?php echo $_POST['password'] ?>">

                        </div>

                        <div class="input-box">
                            <span class="details">Confirm password</span>
                            <input type="password" placeholder="Confirm your password" name="cpassword" value="<?php echo $_POST['cpassword'] ?>">

                        </div>

                        <div class="input-box">
                            <span class="details">Physical address</span>
                            <input type="text" placeholder="Enter Physical address" name="address" value="<?php echo $_POST['address'] ?>">

                        </div>


                        <div class="input-box">
                            <span class="details">Gender</span>
                            <input type="text" placeholder="Enter Gender" name="gender" value="<?php echo $_POST['gender'] ?>">

                        </div>



                    </div>







                    <div class="button">
                        <input type="submit" name="submit" value="Register">
                    </div>

                </form>




            </div>




        </main>
    </div>
</body>

</html>