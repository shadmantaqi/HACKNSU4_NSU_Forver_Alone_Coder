<!DOCTYPE html>
<html>
<style>
input[type=text], input[type=int], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Car</h3>
<?php
               if(isset($_POST["seat"])){   $updateQ="UPDATE `car` SET ".implode(",",$updateQ1)." Where `driver_id`=".$_SESSION["userid"];
              $sql = $updateQ;

if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
} else {
echo "Error updating record: " . $conn->error;
}
             }

$sql = "SELECT * FROM `car` WHERE `driver_id`=".$_SESSION["userid"];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id=$row["id"];
    $model=$row["model"];
    $noplate=$row["noplate"];
    $ac=$row["ac"];
    $type=$row["type"];
    $seat=$row["seat"];
    $driver_id=$row["driver_id"];

              }
            } else {
              echo "0 results";
            }
?>
<div>
  <form method="POST">
  <label for="noplate">Car No. plate:</label><br>
  <input type="text" id="noplate" name="noplate" value="<?php echo $noplate?>" placeholder="Car No. plate" ><br><br>
  <label for="model">Model:</label><br>
  <input type="text" id="model" name="model" value="<?php echo $model?>" placeholder="Model" <br><br>
  <label for="Seat No:">Seat No::</label><br>
  <input type="text" id="Seat No:" name="seat" value="<?php echo $seat?>" placeholder="Seat No:" ><br><br>
  <p>Type:</p>

  <input type="radio" id="html" name="type" value="AC" <?php if($type=="AC")echo "checked"?>>
  <label for="type">AC</label><br>
  <input type="radio" id="Non AC" name="type" value="Non" <?php if($type=="Non")echo "checked"?>>
  <label for="type">Non AC</label><br>
   <input type="submit" value="Submit">
</form>
</div>
</body>
</html>
