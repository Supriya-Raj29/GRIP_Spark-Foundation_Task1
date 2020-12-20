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
    <title>History</title>
</head>
<div id=full>
<body>
    <header><center>
    <h2><a href="index.php" style="color: black; text-decoration:none;text-shadow: 3px 3px 3px  #003300;"> Banking System </a></h2>
    </center>
    <marquee behavior="scroll" direction="right" scrollamount="10" style="font-weight:bold; font-size:30px;text-decoration:none; color:#003300;font-style: oblique;">“Welcome to banking system ....GRIP_The Spark Foundation_Task1!”</marquee><br>

</header>
<nav>
<h2 style="text-shadow: 3px 3px 3px  #003300;left:15vw;position:absolute;">View All Transactions</h2>
<p><a id=log href="index.php" style="font-weight:bold; 
    color:black;
    text-shadow: 3px 3px 3px  #003300;
    text-decoration:none;
    position:absolute; 
    right:15vw;">Back To Home</a></p>
</nav>
<br><br><br>
<section><center>
<table>
                <tr>
                    <td><center><b> <font color="black"style="text-shadow: 3px 3px 3px  #003300;">Sender</font></b></center></td>
                    <td><center><b><font color="black" style="text-shadow: 3px 3px 3px  #003300;">Sender Name</font></b></center></td>
                    <td><center><b><font color="black" style="text-shadow: 3px 3px 3px  #003300;">Receiver</font></b></center></td>
                    <td><center><b><font color="black" style="text-shadow: 3px 3px 3px  #003300;">Receiver Name</font></b></center></td>
                    <td><center><b><font color="black" style="text-shadow: 3px 3px 3px  #003300;">Transfer Money</font></b></center></td>

                </tr>
              <?php
              $q=$conn->query("select * from transaction");
          
              while ($row = $q->fetch_assoc())
             {
                 ?>
                 <tr>
                     <td><center><?php echo $row["s_id"]; ?></td>
                     <td><center><a href="transaction.php" style="text-shadow: 3px 3px 3px #003300; text-decoration:none; color:black;"><?php echo $row["s_name"]; ?></a></td>
                     <td><center><?php echo $row["t_id"]; ?></td>
                     <td><center><?php echo $row["t_name"]; ?></td>
                     <td><center><?php echo $row["pay"]; ?></td>

                     
                 </tr>
                 <?php
             }
            
              ?>
            </table>
            </center>
</section>
</body>
<br><br><br><br><br>
<marquee behavior="scroll" direction="right" scrollamount="10" style="font-weight:bold; font-size:25px;text-decoration:none; color:#003300;font-style: oblique;">“Welcome to banking system ....!”</marquee><br><br>
<marquee behavior="scroll" direction="left" scrollamount="12" style="font-weight:bold; font-size:25px;text-decoration:none; color:black;font-style: oblique;">“Transfer Your Money...!”</marquee><br><br>
<marquee behavior="scroll" direction="right" scrollamount="14" style="font-weight:bold; font-size:25px;text-decoration:none; color:#003300;font-style: oblique;"> “View Your Current Balance..!”</marquee>
            </div></html>