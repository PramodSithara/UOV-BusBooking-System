<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM registration");
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UOV-TS</title>
        <link rel="stylesheet" href="../css/style1.css">




<style>

table,th,td{
    border:2px solid black;
    width:1100px;
    background-color:#ccffff;
    text-align:center;
    margin-left: 186px;
    line-height: 2;
    border-radius: 2px;
}

.n_btn{
    width:15%;
    height:5%;
    font-size:22px;
    padding:0px;
    
}

.nn_btn{
        width:15%;
        height:5%;
        font-size:22px;
        padding:0px;
        margin-left:1055px;  
}

#in{
    margin-left:800px;
    width: 255px;
    height: 33px;
    margin-bottom: 16px;
}

.heading{
    margin-top:68px;
}
#loc{
        padding-left: 0px;
        margin-left: 24px;
}

.button-group {
  display: flex;
  justify-content: center;
  margin-top: 120px;
  align-items: stretch;
  flex-wrap: nowrap;
  justify-content: flex-start;
  flex-direction: column;
  width: 350px;
}

.button {
  background-color: #ccc;
  color: #000;
  border: none;
  padding: 10px 20px;
  margin-right: 5px;
  border-radius: 5px 0 0 5px;
  cursor: pointer;
  transition: background-color 0.2s ease;
  padding-top: 60px;
  margin-left: 580px;
}

.button.active {
  background-color: #1abc9c;
  color: #fff;
  width: 350px;
}

.button:hover {
  background-color: #aaa;
}

.button:first-child {
  border-radius: 5px;
}

.button:last-child {
  border-radius: 0 5px 5px 0;
}

.button-group a .button{
    width: 350px;
    border-radius: 5px ;
}


</style>





</head>
<body>
        <header>
                <a href="#" class="logo"><i class='bx bxs-car'></i></a> 
        
                <div class="bx bx-menu" id="menu-icon"></div>
                

                

                </ul>

                <div class="header-btn">
                        <a href="admin.php" onclick="alert('You Are Back to Admin Login');" class="sign-in"> Welcome to University of Vavuniya Transport Service Admin Portal </a>
                </div>

        </header>
                <div class="button-group">
                <button class="button active">All</button>
                <a href="booking.php"><button class="button">Show Bookings</button></a>
                <a href="panel.php"><button class="button">Manage Users</button></a>
                <a href="payment.php"><button class="button">Payments</button></a>
                <a href="ad_req.php"><button class="button">Special Request</button></a>
                <a href="msg.php"><button class="button">Messages</button></a>
                </div>


        
</body>
</html>