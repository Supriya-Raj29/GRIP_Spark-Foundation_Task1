<!DOCTYPE html>
<?php
include('connection.php');
include('css/alluser.css.php');

session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All USer</title>
</head>
<div id=full>
<body>
    <header><center>
    <h2><a href="index.php" style="color: black; text-decoration:none;text-shadow: 3px 3px 3px  #003300;"> Banking System </a></h2>
    </center>
    
</header>
<nav>
<h2 style="text-shadow: 3px 3px 3px  #003300; left:15vw;position:absolute;">All Users</h2>
<p><a id=log href="index.php" style="font-weight:bold; 
    color:black;
    text-shadow: 3px 3px 3px  #003300;
    text-decoration:none;
    position:absolute; 
    right:15vw;">Back To Home</a></p>
</nav><br><br>
<center>
<section style="width:80vw;height:80vh;">
<table>
                <tr>
                    <td><center><b> <font color="black"style="text-shadow: 3px 3px 3px  #003300;">U_ID</font></b></center></td>
                    <td><center><b><font color="black" style="text-shadow: 3px 3px 3px  #003300;">U_Name</font></b></center></td>
                    <td><center><b><font color="black" style="text-shadow: 3px 3px 3px  #003300;">U_Email</font></b></center></td>
                    <td><center><b><font color="black" style="text-shadow: 3px 3px 3px  #003300;">U_Balance</font></b></center></td>
                </tr>
              <?php
              $q=$conn->query("select * from allusers");
          
              while ($row = $q->fetch_assoc())
             {
                 ?>
                 <tr>
                     <td><center><?php echo $row["u_id"]; ?></td>
                     <td><center><a href="transaction.php" style="text-shadow: 3px 3px 3px #003300; text-decoration:none; color:black;"><?php echo $row["u_name"]; ?></a></td>
                     <td><center><?php echo $row["u_email"]; ?></td>
                     <td><center><?php echo $row["u_balance"]; ?></td>
                     
                 </tr>
                 <?php
             }
            
              ?>
            </table>
          
</section>
</center>
</body>
</div>           
</html>