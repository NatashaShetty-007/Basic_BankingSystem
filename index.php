
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Basic_Banking System</title>
	<style type="text/css">
		body{
			background-image: url("https://previews.123rf.com/images/anawat/anawat1709/anawat170900168/85348362-double-exposure-of-coins-and-city-background-for-finance-and-banking-concept.jpg");
			/*To scale the image in a nice way */
      background-repeat: no-repeat;
  			background-size: cover;
        margin: 0;  
		}
    	h1{
      font-size: 100px;
      text-align: center;
      color: black;
      text-shadow: 2px 2px #282828;
      font-family:"Times New Roman", Times, serif;
    }
    h2{
      font-size: 100px;
      text-align: center;
      color: black;
      text-shadow: 2px 2px #282828;
      font-family:"Times New Roman", Times, serif;
    }
    	button{
      font-size: 30px;
      padding: 10px 30px;
      justify-content: center;
      background-color: #071a3d;
      color: rgba(221, 243, 19, 0.74);
      text-decoration: none;
     

    }
    	h2{
      text-align: center;
      font-size: 55px;
      color: black;
      text-shadow: 1px 1px #f7f8f8;


    }
    	div{
      
      margin-left: auto;
      margin-right: auto;

    }
    .container{
      padding-left: 630px;
     

    }
    h3{
    	text-align: center;
    	font-size: 25px;
    	color: black;
      text-shadow: 1px 1px #3b5278;

    }
    a{
      color: white;
      font-size:25px;
      
    }
    button:hover{
      background-color: rgba(221, 243, 19, 0.74);
      text-align: center;
    }
    .footer {
     position: fixed;
     left: 0;
     bottom: 0;
     width: 100%;
     background-color: #071a3d;
     color: white;
     text-align: center;
     margin-bottom:0px;
    
}

  </style>
  <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
	
<?php $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "user_list";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
  
     ?>


  <div id="navbar">
  <a class="hi" href="index.php"><i class="fa fa-home"></i> Home</a>
  <a class="hello" href="table.php"><i class="fa fa-list"></i> USERS LIST</a>
  <a class="bye" href="transaction.php"><i class="fa fa-history"></i> Transaction History</a>
  
  </div>


	 <h1><u>GALAXY BANK</u></h1>
  <h2><i><u>Your financial safety is our concern.</u></i></h2>
  <!-- <h2>Your financial safety is our concern.</h2> -->
  
  <div class="container">
    <button><a href="money.php"><b>SEND MONEY</b></a></button>
    <!--\ <button id="user"><a href="table.php">View USERS LIST</button>
      <button><a href="transaction.php">Transaction History</a></button> -->
  </div>
  
  <div class="footer">
   <p>© Created by Natasha Shetty | TSF</p>
  </div>


</body>

	

</body>
</html>