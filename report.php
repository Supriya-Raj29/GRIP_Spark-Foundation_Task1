<!DOCTYPE html>
<?php 
include("connection.php");
$uid = $_POST["uid"];
$uname = $_POST["uname"];
$ubal = $_POST["ubal"];

$tid = $_POST["Tid"];
$tname = $_POST["Tname"];

$sql = "SELECT * from allusers where u_id='$uid' and u_name='$uname'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
   $new_bal = $row["u_balance"] - $ubal;
   $sql2 = "UPDATE allusers set u_balance=$new_bal where u_id='$uid'";

   $r2 = $conn->query($sql2);
   if($r2==true){

      $sql3 = "UPDATE allusers set u_balance=u_balance+$ubal where u_id='$tid' and u_name='$tname'";
      $r3=$conn->query($sql3);
      if($r3==true){
          $sql4 = "INSERT into transaction values('$uid','$uname','$tid','$tname','$ubal')";
          $result4=$conn->query($sql4);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Done</title>
</head>
<body>
    <h1 style="color:red">Transaction Done</h1>
</body>
</html>
<?php
      }
      else{
          echo "no 2 done";
      }


   }
   else{
       echo "no bal cut";
   }
    }
}

else{
    echo "sorry invalid user";
}


?>