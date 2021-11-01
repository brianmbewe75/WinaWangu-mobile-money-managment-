<?php
//fetch.php
include 'config.php'; 
$connect = mysqli_connect("localhost", "root", "", "WinaBwangu");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM transactions
  WHERE TransactionID LIKE '%".$search."%'
  OR MobileBooths LIKE '%".$search."%' 
  OR Location LIKE '%".$search."%' 
  OR Service LIKE '%".$search."%' 
  OR RevenuePerKwacha LIKE '%".$search."%'
  OR TransactionAmount LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM transactions ORDER BY TransactionID
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>TransactionID</th>
     <th>Mobile Booths</th>
     <th>Location</th>
     <th>Service</th>
     <th>RevenuePerKwacha</th>
     <th>TransactionAmount</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["TransactionID"].'</td>
    <td>'.$row["MobileBooths"].'</td>
    <td>'.$row["Location"].'</td>
    <td>'.$row["Service"].'</td>
    <td>'.$row["RevenuePerKwacha"].'</td>
    <td>'.$row["TransactionAmount"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
