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
    <title>Transaction</title>


    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../CSS/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 




</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2> <span class="lab la-accusoft"></span><span><a style="color: white;">WinaBwangu</a></span></h2>
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
                <a href="Booth.php"><span class="las la-building"></span><span>Booths</span></a>
            </li>
            <li>
                <a href="agents.php"><span class="las la-user-circle"></span><span>Agents</span></a>
            </li>
            <li>
                <a href="Transaction.php" class="active"><span class="las la-archive"></span><span>Transactions</span></a>
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
               Transaction
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

        <div class="recent-grid">
            <div class="projects">
            <div class="card">
                <div class="card-header">
            <h3>Recent Transactions</h3>
     
     <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
  </span>
            <button>Search <span class="las la-arrow-right"></span></button>
            
            
                </div>
            <div class="card-body">
         
   <br />
 
  
    <div class="container">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
  
  
   <br />
   <div id="result"></div>
  </div>
            
            
            </div>
            </div>
           
            
            </div>
            



    </main>
  



</div>
</body>
</html>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>