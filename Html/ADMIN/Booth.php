<?php


include 'config.php';

error_reporting(0);

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
    <title>Booths</title>


    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../CSS/style.css">

    <link rel="stylesheet" href="../../CSS/booths.css">





<style>
    

</style>







</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
<h2> <span class="lab la-accusoft"></span><span><a href="../index.html" style="color: white;">WinaBwangu</a></span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php"><span class="las la-igloo"></span><span>Dashboard</span></a>
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
                    <a href="Booth.php" class="active"><span class="las la-building"></span><span>Booths</span></a>
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
             Booth Revenue
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
            <nav>
                
                <ul class="menu">
                    <li><a href="#">Booths</a>
                    
    <ul class="submenu">
        <li><a href="#">Wina1,lusaka-CBD</a>
        
        <ul class="submenu2">
    <li><a href="#">Airtel Money/0.05</a></li>
    <li><a href="#">MTN Money/0.06</a></li>
    <li><a href="#">Zamtel Money/0.045</a></li> 
    <li><a href="#">Zanaco/0.035</a></li> 
    <li><a href="#">FNB/0.04</a></li>

    
        </ul>
        </li>
        <li><a href="#"> Wina2,Libala</a>
        <ul class="submenu2">
            <li><a href="#">Airtel Money/0.05</a></li>
            <li><a href="#">MTN Money/0.06</a></li>
            <li><a href="#">Zamtel Money/0.045</a></li>
            <li><a href="#">FNB/0.04</a></li>
    
        </ul>
        
        
        
        </li>
        <li><a href="#"> Wina3,Kabwata</a>
            <ul class="submenu2">
                <li><a href="#">Airtel Money/0.05</a></li>
                <li><a href="#">MTN Money/0.06</a></li>
                <li><a href="#">Zamtel Money/0.045</a></li> 
                <li><a href="#">Zanaco/0.035</a></li> 
                <li><a href="#">FNB/0.04</a></li>
        
            </ul>
            
            
            
            </li>
            <li><a href="#"> Wina4,Mandevu</a>
                <ul class="submenu2">
                    <li><a href="#">Airtel Money/0.05</a></li>
                    <li><a href="#">MTN Money/0.06</a></li>
                    <li><a href="#">Zamtel Money/0.045</a></li>
            
                </ul>
                
                
                
                </li>

                <li><a href="#"> Wina5,Wood-lands</a>
                    <ul class="submenu2">
                        <li><a href="#">Airtel Money/0.05</a></li>
                        <li><a href="#">MTN Money/0.06</a></li>
                        <li><a href="#">Zanaco/0.035</a></li> 
                        <li><a href="#">FNB/0.04</a></li>
                
                    </ul>
                    
                    
                    
                    </li>
                    <li><a href="#"> Wina6,Matero-East</a>
                        <ul class="submenu2">
                            <li><a href="#">Airtel Money/0.05</a></li>
                            <li><a href="#">MTN Money/0.06</a></li>
                            <li><a href="#">Zamtel Money/0.045</a></li> 
                        
                    
                        </ul>
                        
                        
                        
                        </li>

    
    </ul>
    
    
                    </li>
                
                </ul>
            </nav>






            <div class="cards">
<div class="card-single">
    <div>
        <h1>Wina 1</h1>
        <?php  
        $query = "SELECT * FROM booth WHERE booth = 'Wina1';" ;
        $result = mysqli_query($conn,$query);
        
        while ($row = mysqli_fetch_array($result)) {
            echo "".$row["revenuePerBooth"]."<br>";
        }
        
        ?>
        <span>Total Revenue</span>

    </div>
    <div>
        <span class="la la-money"></span>
    </div>
</div>

<div class="card-single">
    <div>
        <h1>Wina 2</h1>
        <?php  
        $query = "SELECT * FROM booth WHERE booth = 'Wina2';" ;
        $result = mysqli_query($conn,$query);
        
        while ($row = mysqli_fetch_array($result)) {
            echo "".$row["revenuePerBooth"]."<br>";
        }
        
        ?>
        <span>Total Revenue</span>

    </div>
    <div>
        <span class="la la-money"></span>
    </div>
</div>
<div class="card-single">
    <div>
        <h1>Wina 3</h1>
        <?php  
        $query = "SELECT * FROM booth WHERE booth = 'Wina3';" ;
        $result = mysqli_query($conn,$query);
        
        while ($row = mysqli_fetch_array($result)) {
            echo "".$row["revenuePerBooth"]."<br>";
        }
        
        ?>
        <span>Total Revenue</span>

    </div>
    <div>
        <span class="la la-money"></span>
    </div>
</div>

<div class="card-single">
    <div>
        <h1>Wina 4</h1>
        <?php  
        $query = "SELECT * FROM booth WHERE booth = 'Wina4';" ;
        $result = mysqli_query($conn,$query);
        
        while ($row = mysqli_fetch_array($result)) {
            echo "".$row["revenuePerBooth"]."<br>";
        }
        
        ?>
        <span>Total Revenue</span>

    </div>
    <div>
        <span class="la la-money"></span>
    </div>
</div>


<div class="card-single">
    <div>
        <h1>Wina 5</h1>
       
        <?php  
        $query = "SELECT * FROM booth WHERE booth = 'Wina5';" ;
        $result = mysqli_query($conn,$query);
        
        while ($row = mysqli_fetch_array($result)) {
            echo "".$row["revenuePerBooth"]."<br>";
        }
        
        ?>
        <span>Total Revenue</span>

    </div>
    <div>
        <span class="la la-money"></span>
    </div>
</div>


<div class="card-single">
    <div>
        <h1>Wina 6</h1>
        <?php  
        $query = "SELECT * FROM booth WHERE booth = 'Wina6';" ;
        $result = mysqli_query($conn,$query);
        
        while ($row = mysqli_fetch_array($result)) {
            echo "".$row["revenuePerBooth"]."<br>";
        }
        
        ?>
        <span>Total Revenue</span>

    </div>
    <div>
        <span class="la la-money"></span>
    </div>
</div>


</div>












            <!-- <div class="PieChart">
     
    
                <h1>Service frequency</h1>
                
                <div id="piechart"></div>
                
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                
                <script type="text/javascript">
                // Load google charts
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                
                // Draw the chart and set the chart values
                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                  ['Task', 'Service Frequency'],
                  ['Airtel Money', 30],
                  ['MTN Money', 20],
                  ['Zamtel Money', 10],
                  ['Zanaco', 20],
                  ['FNB', 20]
                
                ]);
                
                  // Optional; add a title and set the width and height of the chart
                  var options = {'title':'Service frequency', 'width':500, 'height':500};
                
                  // Display the chart inside the <div> element with id="piechart"
                  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                  chart.draw(data, options);
                }
                </script>
             </div> -->

        </main>
    </div>
</body>
</html>