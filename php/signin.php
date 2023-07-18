<?php
    $uid = $_POST['id'];
    $password = $_POST['password'];

    // database connection
    $con = new mysqli("localhost","root","","uovts");
    if($con->connect_error){
        die("Failed to connect : ".$con->connect_error);
    }else{
        $stmt = $con->prepare("select * from registration where uid = ?");
        $stmt->bind_param("s",$uid);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password){
                echo "<h2>Login Successfully</h2>";

                //send value 
                //////////////////////////////////
                session_start();
                $_SESSION['$vb'] = $uid;
                header('Location: ../home.php');


            }else{
                echo "<h2>Invalid Email or password</h2>";
            }
        }else{
            echo "<h2>Invalid Email or Password</h2>";
        }
    }

?>