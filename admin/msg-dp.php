<?php
include_once 'database.php';
$sql = "DELETE FROM contact WHERE id='" . $_GET["userid"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header('Location: msg.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>