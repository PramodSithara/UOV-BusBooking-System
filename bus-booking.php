<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload Image File</title>
    <style>
      body {
        background-color: #333;
        color: #fff;
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
      }

      form {
        margin: 110px auto;
        width: 50%;
        padding: 20px;
        border: 2px solid #fff;
        border-radius: 5px;
        background-color: #444;
        text-align: center;
      }

	  .abs {
  		display: inline-block;
  		padding: 10px 20px;
  		background-color: #000;
  		color: #fff;
  		font-size: 16px;
  		text-align: center;
  		border: none;
  		border-radius: 4px;
  		cursor: pointer;
		}

		.abs:hover {
  		background-color: #333;
		}


      label {
        display: inline-block;
        width: 100px;
        margin-bottom: 10px;
      }

      input[type="text"], input[type="file"] {
        padding: 10px;
        width: 70%;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        background-color: #fff;
        color: #333;
      }

      input[type="submit"] {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: #fff;
        font-size: 16px;
        text-align: center;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
    </style>
  </head>
  <body>
    <?php
    session_start(); 
    $name = $_SESSION['$vb'];
    ?>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "uovts");
    if(isset($_POST["submit"])){
      $receipt = $_POST["receipt"];
      if($_FILES["image"]["error"] == 4){
        echo
        "<script> alert('Image Does Not Exist'); </script>"
        ;
      }
      else{
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if ( !in_array($imageExtension, $validImageExtension) ){
          echo
          "
          <script>
            alert('Invalid Image Extension');
          </script>
          ";
        }
        else if($fileSize > 1000000){
          echo
          "
          <script>
            alert('Image Size Is Too Large');
          </script>
          ";
        }
        else{
          $newImageName = uniqid();
          $newImageName .= '.' . $imageExtension;

          move_uploaded_file($tmpName, 'data/image/' . $newImageName);
          $query = "INSERT INTO payment VALUES('','$name', '$receipt', '$newImageName')";
          mysqli_query($conn, $query);
          echo
          "
          <script>
            alert('Successfully Added');
          </script>
          ";
        }
      }
    }
    ?>
    <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
      <label for="name">ID :</label>
      <input type="text" name="uid" id = "name" value="<?php echo strtoupper($name); ?>" required value="" readonly> <br>
	  <label for="name">Receipt	 :</label>
      <input type="text" name="receipt" id = "name"  required> <br>
	  <label for="image">Image : </label>
      <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br> <br>
      <button type = "submit" name = "submit" class="abs">Submit</button>
