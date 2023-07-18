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

</style>





</head>
<body>
        <header>
                <a href="#" class="logo"><i class='bx bxs-car'></i></a> 
        
                <div class="bx bx-menu" id="menu-icon"></div>
                <div class="header-btn">
                <a href="menu.php" onclick="alert('You Are Back to Admin Login');" class="sign-in"> Welcome to University of Vavuniya Transport Service Admin Portal </a>
                </div>

        </header>

        <div class="heading" id="Search">
                       
        </div>
        <div class="service-container" >
            
                <form action="" method="post">
        
                        <div class="box">
                                
                                <input type="submit" name="no" class=nn_btn value="Show Requests"> 
                        </form>

                        <table>
                                <tr>
                                        <th>No</th>
                                        <th>User ID</th>
                                        <th>Reason</th>
                                </tr><br>
                        

                        <?php
                        $connection = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($connection,'uovts');

                        

                        if(isset($_POST['no']))
                        {
                            

                            $query = "SELECT * FROM `request` ";
                            $query_run = mysqli_query($connection,$query);

                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['uid']; ?></td>
                                <td><?php echo $row['reason']; ?></td>
                                <td><a href="ad_req-dp.php?userid=<?php echo $row["id"]; ?>">Delete</a></td>
                                <td>
                                <form action="req_insert.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <input type="text" id="message" name="reason">
                                        <button type="submit" name="delete">Delete & Submit</button>
                                </form>
                                </td>
                            </tr>

                            <?php
                                session_start();
                                $_SESSION['dash'] = $row['uid'];

                                ?>


                            <?php
                            }
                        }
                        ?>
                        </table>
                

        </section>
</body>
</html>






