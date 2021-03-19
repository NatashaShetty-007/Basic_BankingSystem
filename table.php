<?php
	
		$conn = mysqli_connect("localhost", "root", "", "basic_bankingsystem");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>USERS LIST</title>
    <style type="text/css">
        table, th,tr,td{
            border: 2px solid black;
        }
        .center{
            margin-left: auto;
            margin-right: auto;
            
            
            
        }
        table{
            width: 900px;
            height: 500px;
            color: black;
            font-size: 30px;
            border-color: white;
        }
        h1{
            text-align: center;
            color: black;
            font-size: 40px;
            


        }
        body{
            background-image: url("https://previews.123rf.com/images/anawat/anawat1709/anawat170900168/85348362-double-exposure-of-coins-and-city-background-for-finance-and-banking-concept.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
        }
        th, td{
            text-align: center;
            /* border: 2px solid black; */
            
        }
        th{
            background-color: black ;
            color: white;
            border: 2px solid black;

        }
        a{
            font-size:20px;
        }
        tr{
            font-size:25px;
            border: 2px solid black;    
            background-color: #f2f2f2;
            
        }
        tr:hover{
            background-color: #eff545;
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
    
    <h1><u>USERS LIST</u></h1>
    <table class="center">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>BALANCE</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php $sql = "SELECT id, name, email, balance FROM user_list";
        $result = mysqli_query($conn, $sql);?>
        <?php while( $row = mysqli_fetch_array($result)) : ?>
        
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['balance']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>

</body>
</html>