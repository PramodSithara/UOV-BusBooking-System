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
                <!--

                <ul class="navbar">
                        <div class="header-btn">
                        <li><a href="#home" id="loc">University of Vavuniya Transport Service Admin Portal</a></li>
</div>
                </ul>
-->
                <div class="header-btn">
                <a href="menu.php" onclick="alert('You Are Back to Admin Menu');" class="sign-in"> Welcome to University of Vavuniya Transport Service Admin Portal </a>
                </div>

        </header>
        <!--Car List-->
        <div class="heading" id="Search">
                       
                       <h3>Enter REG NO to Get Details</h3> 
        </div>
        <div class="service-container" >
            
                        <form action="" method="post">
        
                        <div class="box">
                                <input type="text" name="userid" id="in" placeholder="Enter User ID" required>
                                <input type="submit" name="search" class=n_btn value="Get Info"> 
                        </form>
                        <table>
                                <tr>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Gender</th>
                                        <th>User ID</th>
                                        <th>Email</th>
                                        <th>Phone NO</th>
                                </tr><br>
                        

                        <?php
                        $connection = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($connection,'uovts');

                        

                        if(isset($_POST['search']))
                        {
                            $id = $_POST['userid'];

                            $query = "SELECT * FROM `registration` where uid='$id' ";
                            $query_run = mysqli_query($connection,$query);

                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td><?php echo $row['sex']; ?></td>
                                <td><?php echo $row['uid']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><a href="delete-process.php?userid=<?php echo $row["id"]; ?>">Delete</a></td>
                            </tr>

                            <?php
                            }
                        }
                        ?>
                        </table>
                        </div>
                </div>


                <form action="" method="post">
        
                        <div class="box">
                                
                                <input type="submit" name="no" class=nn_btn value="Show peoples"> 
                        </form>

                        <table>
                                <tr>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Gender</th>
                                        <th>User ID</th>
                                        <th>Email</th>
                                        <th>Phone NO</th>
                                </tr><br>
                        

                        <?php
                        $connection = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($connection,'uovts');

                        

                        if(isset($_POST['no']))
                        {
                            

                            $query = "SELECT * FROM `registration` ";
                            $query_run = mysqli_query($connection,$query);

                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td><?php echo $row['sex']; ?></td>
                                <td><?php echo $row['uid']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><a href="delete-process.php?userid=<?php echo $row["id"]; ?>">Delete</a></td>
                            </tr>

                            <?php
                            }
                        }
                        ?>
                        </table>
                

        </section>
</body>
</html>