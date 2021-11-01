<?php



include 'config.php';

error_reporting(0);

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
if(isset($_POST['submit'])){
    $transaction =$_POST['transaction'];
    $number = $_POST['number'];
    $location =$_POST['location'];
    $booth = $_POST['booth'];
    $service = $_POST['service'];
    $revenue =$_POST['revenue'];
    $amount = $_POST['amount'];

    $sql = "SELECT * FROM transactions WHERE TransactionID = 'TransactionID'";
    $result = mysqli_query($conn, $sql);
   
    if(!$result->num_rows > 0) {
        $sql = "INSERT INTO transactions (TransactionID, MobileBooths, Location, service, RevenuePerKwacha, TransactionAmount)
        VALUES ('$transaction', '$booth', '$location', '$service', '$revenue', '$amount')" ;

$result = mysqli_query($conn, $sql);


if($result){

    $sql = "UPDATE customer SET amount = amount + '$amount' WHERE number = '$number';";
    $result = mysqli_query($conn, $sql); 
    
    $sql = "UPDATE services SET MonthlyLimit = (MonthlyLimit - '$amount') WHERE service = '$service';";

	$result = mysqli_query($conn, $sql); 
    $sql = "UPDATE revenue SET revenueGen  = revenueGen + ($revenue * $amount) WHERE service = '$service';";

	$result = mysqli_query($conn, $sql); 


    $sql = "UPDATE booth SET revenuePerBooth  = revenuePerBooth + ($revenue * $amount) WHERE booth = '$booth';";
    $result = mysqli_query($conn, $sql); 
    
   

    echo "<script>alert('Wow! Transaction complete.')</script>";
    $transaction = "";
    $booth = "";
    $location = "";
    $service = "";
    $revenue = "";
    $amount = "";
} else {
    echo "<script>alert('Woops! Something Wrong Went.')</script>";
}
} else {
echo "<script>alert('Woops! Transaction ID Already Exists.')</script>";
} 


}
 
 
// if(isset($_POST['submit'])){

    // $amount = $_POST['amount'];



    // $sql = "SELECT * FROM services";
    
 
?>





 










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Deposite</title>


    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../CSS/style.css">

    <link rel="stylesheet" href="../../CSS/deposit.css">
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="WinaData.json"></script> -->
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<script type="text/javascript" >
    function validate() {
              
              if( document.myForm.transaction.value == "" ) {
                 alert( "Please provide transaction ID" );
                 document.myForm.transaction.focus() ;
                 return false;
              }
              if( document.myForm.amount.value == "" ) {
                 alert( "Please provide the amount" );
                 document.myForm.amount.focus() ;
                 return false;
              }
              if( document.myForm.number.value == "" ) {
                 alert( "Please provide the customers phone numbers" );
                 document.myForm.number.focus() ;
                 return false;
              }
               
              return( true );
           }

           function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
 
           
 


   
     </script>    


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
                    <a href="Deposit.php" class="active"><span class="la la-money"></span><span>Deposit</span></a>
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
      
    
 

    <!-- TRANSACTION FORM  -->

<!-- 
registration content -->
 

<div class="container">
    <div class="title">Transaction</div>
   <div id="error"></div>
   <form name="myForm" method="POST" action="" onsubmit="return(validate());">
   <div class="user-details">
   
   <div class="input-box">
   <span class="details">Transaction ID</span>
   <input type="text" placeholder="Enter transacion ID"  name="transaction" value="<?php echo $_POST['transaction'];?>">
   
   </div>
   
   
   <div class="input-box">
       <span class="details">Amount</span>
       <input type="text" placeholder="Enter amount"  name="amount" value="<?php echo $_POST['amount'];?>">
       
       </div>
       
   
                       <div class="input-box">
                           <span class="details">Phone number</span>
                           <input type="text" placeholder="Enter reciepients number" name="number" value="<?php echo $_POST['number'];?>" >
                         
                           </div>
                 

                           <div class="input-box">
                            <span>Location</span>
                            <select name="location" value="<?php echo $_POST['location'];?>">
                                <option>Lusaka CBD</option>
                                <option>Libala</option>
                                <option>Mandevu</option>
                                <option>Matero</option>
                                <option>Kabwata</option>
                                <option>Woodlands</option>
                            </select>


                            <div class="input-box">
                            <span>Booth</span>
                            <select name="booth" value="<?php echo $_POST['booth'];?>">
                                <option>Wina 1</option>
                                <option>Wina 2</option>
                                <option>Wina 3</option>
                                <option>Wina 4</option>
                                <option>Wina 5</option>
                                <option>Wina 6</option>
                            </select>
   
                        </div>


                        <span class="details">Service</span>
                            <select name="service" value="<?php echo $_POST['service'];?>">
                                <option>Airtel Money</option>
                                <option>MTN Money</option>
                                <option>Zamtel Money</option>
                                <option>Zanaco</option>
                                <option>FNB</option>
                            </select>
                             
                        </div>
                        <div class="input-box">
       <span class="details">Revenue Per Kwacha</span>
       <select  placeholder="R.P.K"  name="revenue" id="revenue" value="<?php echo $_POST['revenue'];?>">
   
                                <option>0.05</option>
                                <option>0.04</option>
                                <option>0.06</option>
                                <option>0.045</option>
                                <option>0.035</option>

       </select>
       </div>
               
   
   
   
   </div>
   
 
   
   <div class="button">
       <input type="submit" name="submit" onclick="myFunction()">
   </div>
   
   
   </form>
   
   
   
   
   </div>









   

 
        <!-- end of transactional
             content -->





</div>
</body>
</html>
<!-- 
<script>
    $(document).ready(function(){
    
     load_json_data('Booth');
    
     function load_json_data(id, parent_id)
     {
      var html_code = '';
      $.getJSON('WinaData.json', function(data){
    
       html_code += '<option value="">Select '+id+'</option>';
       $.each(data, function(key, value){
        if(id == 'Booth')
        {
         if(value.parent_id == '0')
         {
          html_code += '<option value="'+value.id+'">'+value.name+'</option>';
         }
        }
        else
        {
         if(value.parent_id == parent_id)
         {
          html_code += '<option value="'+value.id+'">'+value.name+'</option>';
         }
        }
       });
       $('#'+id).html(html_code);
      });
    
     }
    
     $(document).on('change', '#Booth', function(){
      var Booth_id = $(this).val();
      if(Booth_id != '')
      {
       load_json_data('Location', Booth_id);
      }
      else
      {
       $('#location').html('<option value="">Location</option>');
       $('#Service').html('<option value="">Select Service</option>');
      }
     });
     $(document).on('change', '#Location', function(){
      var Location_id = $(this).val();
      if(Location_id != '')
      {
       load_json_data('Service', Location_id);
      }
      else
      {
       $('#Service').html('<option value="">Select Service</option>');
      }
     });
    });
    </script> -->