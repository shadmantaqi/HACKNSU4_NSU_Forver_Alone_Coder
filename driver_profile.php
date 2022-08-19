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

<h3>Driver</h3>
<?php
                 $insertQ1=array();
                 $insertQ2=array();
                 $updateQ1=array();
                 foreach($_POST as $key => $value) {
                     array_push($insertQ1,"`$key`");
                     array_push($insertQ2,"'$value'");
                     array_push($updateQ1,"`$key`='$value'");
                  };
               if(isset($_POST["password"])){   $updateQ="UPDATE `driver` SET ".implode(",",$updateQ1)." Where `id`=".$_SESSION["userid"];
                  $sql = $updateQ;

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
               }


               $sql = "SELECT * FROM `driver` where `id`=".$_SESSION["userid"];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
    
    $name=$row["name"];
    $driving_license=$row["driving_license"];
    $phoneNo=$row["phoneNo"];
    $nid=$row["nid"];
    $address=$row["address"];
    $password=$row["password"];
    $otp=$row["otp"];


  }
} else {
  echo "0 results";
}


?>
<div>
  <form method="POST">
  <label for="NID">NID:</label><br>
  <input type="int" id="NID" name="nid" value="<?php echo $nid;?>" placeholder="NID" ><br><br>
  <label for="dlicense">Driving License:</label><br>
  <input type="text" id="dlicense" name="driving_license" value="<?php echo $driving_license;?>" placeholder="Driving License" <br><br>
  <label for="name">Name:</label><br>
  <input type="int" id="name" name="name" value="<?php echo $name;?>"" placeholder="Name" <br><br>
  <label for="Pnumber">Phone Number:</label><br>
  <input type="int" id="Pnumber" name="phoneNo" value="<?php echo $phoneNo;?>"" placeholder="Phone Number" <br><br><br>
  <label for="address">Address:</label><br>
  <input type="text" id="Address" name="address" value="<?php echo $address;?>"" placeholder="Address" <br><br><br>
  <label for="Password">Password:</label><br>
  <input type="password" id="Address" name="password" value="<?php echo $password;?>" placeholder="Password" <br><br><br>
  <input type="submit" value="Submit">
</form>
</div>

</body>
</html>