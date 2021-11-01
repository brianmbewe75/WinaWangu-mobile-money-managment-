<?php 

include ('config.php');

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Dashboard</title>


    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../CSS/style.css">
 
</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
<h2> <span class="lab la-accusoft"></span><span><h2>WinaBwangu</h2></span>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php"class="active"><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="Customer.php" ><span class="las la-users"></span><span>Customer</span></a>
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
                 Dashboard 
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
        <main>


<div class="cards">
<div class="card-single">
    <div>
        <h1>Airtel Money
        <?php  
        $query = "SELECT * FROM services WHERE service = 'Airtel Money';" ;
        $result = mysqli_query($conn,$query);
        
        while ($row = mysqli_fetch_array($result)) {
            echo "<h2>"."k ".$row["MonthlyLimit"]."</h2>";
        }
        
        ?>
        </h1>
        <span>Month Limit</span>

    </div>
    <div>
        <span class="la la-money"></span>
    </div>
</div>

<div class="card-single">
    <div>
        <h1>MTN money
        <?php  
        $query = "SELECT * FROM services WHERE service = 'MTN Money';" ;
        $result = mysqli_query($conn,$query);
        
        while ($row = mysqli_fetch_array($result)) {
            echo "<h2>"."k ".$row["MonthlyLimit"]."</h2>";
        }
        
        ?>
        </h1>
        <span>Month Limit</span>

    </div>
    <div>
        <span class="la la-money"></span>
    </div>
</div>
<div class="card-single">
    <div>
        <h1>Zamtel Money
        <?php  
        $query = "SELECT * FROM services WHERE service = 'Zamtel Money';" ;
        $result = mysqli_query($conn,$query);
        
        while ($row = mysqli_fetch_array($result)) {
            echo "<h2>"."k ".$row["MonthlyLimit"]."</h2>";
        }
        
        ?>
        </h1>
        <span>Month Limit</span>

    </div>
    <div>
        <span class="la la-money"></span>
    </div>
</div>

<div class="card-single">
    <div>
        <h1>Zanaco
        <?php  
        $query = "SELECT * FROM services WHERE service = 'Zanaco';" ;
        $result = mysqli_query($conn,$query);
        
        while ($row = mysqli_fetch_array($result)) {
            echo "<h2>"."k ".$row["MonthlyLimit"]."</h2>";
        }
        
        ?>
        </h1>
        <span>Month Limit</span>

    </div>
    <div>
        <span class="la la-money"></span>
    </div>
</div>


</div>



<div class="cards">
  
    
    <div class="card-single">
        <div>
            <h1>FNB
            <?php  
        $query = "SELECT * FROM services WHERE service = 'FNB';" ;
        $result = mysqli_query($conn,$query);
        
        while ($row = mysqli_fetch_array($result)) {
            echo "<h2>"."k" .$row["MonthlyLimit"]."</h2>";
        }
        
        ?>
        </h1>
            <span>Month Limit</span>
    
        </div>
        <div>
            <span class="la la-money"></span>
        </div>
    </div>
    
    <div class="card-single">
        <div>
            <h1>Total Revenue 
            <?php
                    $sql ="SELECT SUM(revenueGen) as totalsum FROM revenue";
                    $result = $conn-> query($sql);
                    if ($result->num_rows > 0) {
                        while ($row =$result-> fetch_assoc()) {
                            echo "<h2>"."k " . $row['totalsum']. "</h2>";
                        }}
                    ?></h1>
            <span>cash</span>
    
        </div>
        <div>
            <span class="lab la-google-wallet"></span>
        </div>
     </div>
     <div class="card-single">
        <div>
            <h1>Total capital
            <?php
                    $sql ="SELECT SUM(capital) as totalsum FROM revenue";
                    $result = $conn-> query($sql);
                    if ($result->num_rows > 0) {
                        while ($row =$result-> fetch_assoc()) {
                            echo "<h2>"."k " . $row['totalsum']. "</h2>";
                        }}
                    ?></h1>
            <span>cash</span>
    
        </div>
        <div>
            <span class="lab la-google-wallet"></span>
        </div>
     </div>
    
    
   
    </div>

 

 
 
   



</body>
</html>