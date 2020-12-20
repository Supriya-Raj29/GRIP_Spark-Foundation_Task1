<?php
include('connection.php');
include('css/style.css.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
	<title>Transaction</title>
</head>
<div id=full>
<body>	<center>
<marquee behavior="scroll" direction="right" scrollamount="10" style="font-weight:bold; font-size:30px;text-decoration:none; color:#003300;font-style: oblique;">“Welcome to banking system ....GRIP_The Spark Foundation_Task1!”</marquee>


<br><br><br>
<h1 style="text-shadow: 3px 3px 3px green;">Transfer Your Money</h1>
<p><a id=log href="index.php" style="font-weight:bold; 
    color:black;
    text-shadow: 3px 3px 3px  #003300;
    text-decoration:none;
	position:absolute; 
	right:15vw;">Back To Home</a></p><br><br>

<form action="report.php" method="post">
				<table>
                    <h3 style="text-shadow: 3px 3px 3px green;">Transfer From</h3>
					<tr>
						<td width="200px" height="50px" style="text-shadow: 3px 3px 3px #336600; color:black;  font-size: large;font-weight:bold;">User Id</td>
						<td width="200px" height="50px"> <input type="text" name="uid" placeholder="Enter user id" style="border-radius: 10px;"></td>
						<td width="200px" height="50px" style="text-shadow: 3px 3px 3px #336600; color:black;font-size: large;font-weight:bold;">User Name</td>
                        <td width="200px" height="50px"> <input type="text" name="uname" placeholder="Enter user Name" style="border-radius: 10px;"></td>
                        
                    </tr>
                    </table><br><br>
                    <table>
                    <h3 style="text-shadow: 3px 3px 3px green;">Transfer To</h3>
					<tr>
                         <td width="200px" height="50px" style="text-shadow: 3px 3px 3px #336600; color:black;font-size: large;font-weight:bold;">User Id</td>
						<td width="200px" height="50px"> <input type="text" name="Tid" placeholder="Enter user id" style="border-radius: 10px;"></td>
						<td width="200px" height="50px" style="text-shadow: 3px 3px 3px #336600; color:black;font-size: large;font-weight:bold;">User Name</td>
                        <td width="200px" height="50px"> <input type="text" name="Tname" placeholder="Enter user Name" style="border-radius: 10px;"></td>
                        <td width="200px" height="50px" style="text-shadow: 3px 3px 3px #336600; color:black;font-size: large;font-weight:bold;">Transfer Amount</td>
						<td width="200px" height="50px"> <input type="number" name="ubal" placeholder="Enter amount" style="border-radius: 10px;"></td>
						
					</tr>
					
                    
					<tr>
						<td><input type="submit" name="Done" value="Done" style="border-radius: 10px;text-shadow: 3px 3px 3px #336600; color:black;font-size: large;"></td>
					</tr>
					
				</table>
                </form>  
                
                

		</center>	
</body>
<marquee behavior="scroll" direction="right" scrollamount="10" style="font-weight:bold; font-size:25px;text-decoration:none; color:#003300;font-style: oblique;">“Welcome to banking system ....!”</marquee><br><br>
<marquee behavior="scroll" direction="left" scrollamount="12" style="font-weight:bold; font-size:25px;text-decoration:none; color:black;font-style: oblique;">“Transfer Your Money...!”</marquee><br><br>
<marquee behavior="scroll" direction="right" scrollamount="14" style="font-weight:bold; font-size:25px;text-decoration:none; color:#003300;font-style: oblique;"> “View Your Current Balance..!”</marquee></div>
</html>


