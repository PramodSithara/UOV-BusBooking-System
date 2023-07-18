<?php
include_once 'database.php';
$sql = "DELETE FROM registration WHERE id='" . $_GET["userid"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    
    header('Location: menu.php');
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>