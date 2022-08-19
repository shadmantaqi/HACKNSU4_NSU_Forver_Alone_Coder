<?php include 'connection.php';
if(isset($_GET[id]))$sql = "DELETE FROM booking_bydate WHERE id=$_GET[id]";

if ($conn->query($sql) === TRUE) {
    header("location: index.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>