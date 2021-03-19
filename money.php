<?php
	session_start();
  $connect = mysqli_connect("localhost", "root", "", "basic_bankingsystem");
?> 
<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>send money</title>
	<style type="text/css">
		form{
			font-size: 40px;
			font-weight:30px;
			text-align: center;
			margin: auto;
			padding-top: 80px;
			color: white;
		}
		label{
			padding-top: 20px;
			justify-content: left;
			font-weight: 100px;
			
		}
		.container{
			width: 500px;
			
			padding-left: 400px;
			
		}
		.container input{
			width:90%;
			clear: both;
			height: 35px;
			border: 50px;
			color:black;
		}
		button{
			font-size: 30px;
      		padding: 50px 10px;
      		background-color: #071a3d; 
			color: white;
			margin-left: 700px;
		}
		

		
		.press{
			padding-top: 50px;
			padding-left: 750px;
			margin-left: 700px;
		}
		body{
			background-image: url("https://img.freepik.com/free-photo/colour-smoke-background_71163-197.jpg?size=626&ext=jpg");
			margin: 0;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.click{
			width: 300px;
			background-color: #edfc47;
			color: white;
			font-size: 25px;
			margin-left: 500px;
			margin-top:30px;
			height:40px;
		}
		.click:hover{
			
			background-color: #edfc47;
		}
		a{
      color: white;
      font-size:20px;
    	}
	</style>
  <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
<div id="navbar">
  <a class="hi" href="index.php"><i class="fa fa-home"></i> Home</a>
  <a class="hello" href="table.php"><i class="fa fa-list"></i> USERS LIST</a>
  <a class="bye" href="transaction.php"><i class="fa fa-history"></i> Transaction History</a>
  </div>

	<div class="container">
		<form action="transfer.php" method="post">
			<label><b>SENDER:</b></label>
			<input list="names" id="sender_name" type="text" name="sender_name", placeholder="ENTER FULL NAME" required>
			<datalist id="names">
				<option value="Natasha Shetty"></option>
				<option value="Latisha Shetty"></option>
				<option value="Purtee Mahajan"></option>
				<option value="Gaurav Yadav"></option>
				<option value="Komal Dayma"></option>
				<option value="Utkarsh Rawat"></option>
				<option value="Jos Buttler"></option>
				<option value="Ben Azelart"></option>
				<option value="Pierson "></option>
				<option value="Ronak Verma"></option>
				
			</datalist>
		</br>
			<label><b>RECIEVER:</b></label>
			<input list="names" type="" id="receiver_name" name="receiver_name" placeholder="ENTER FULL NAME"  required>
			<datalist id="names">
				<<option value="Natasha Shetty"></option>
				<option value="Latisha Shetty"></option>
				<option value="Purtee Mahajan"></option>
				<option value="Gaurav Yadav"></option>
				<option value="Komal Dayma"></option>
				<option value="Utkarsh Rawat"></option>
				<option value="Jos Buttlersss"></option>
				<option value="Ben Azelart"></option>
				<option value="Pierson "></option>
				<option value="Ronak Verma"></option>
			</datalist>
		</br>
			<label><b>AMOUNT: </b></label>
			<input type="number" id="amount" name="amount" placeholder="ENTER THE AMOUNT" required></div>
			<input class="click" type="submit" name="" value="Send Money">
		</form>
	
<!-- 	</div>
	<script type="text/javascript" src="alert.js"></script>
	<div class="press">
		<button >Send Amount</button>
	</div> -->
	
</body>
</html>