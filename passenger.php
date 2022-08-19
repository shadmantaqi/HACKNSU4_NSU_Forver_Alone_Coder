<?php include'protection.php';?>
<!DOCTYPE html>
<html>
<style>
    input[type=text],
    select {
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
<?php
include("connection.php");
                 $insertQ1=array();
                 $insertQ2=array();
                 $updateQ1=array();
                 foreach($_POST as $key => $value) {
                     array_push($insertQ1,"`$key`");
                     array_push($insertQ2,"'$value'");
                     array_push($updateQ1,"`$key`='$value'");
                  };
               if(isset($_POST["password"])){   $updateQ="UPDATE `passenger` SET ".implode(",",$updateQ1)." Where `id`=".$_SESSION["userid"];
                  $sql = $updateQ;

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
               }


               $sql = "SELECT * FROM `passenger` where `id`=".$_SESSION["userid"];
               $result = $conn->query($sql);
               
               if ($result->num_rows > 0) {
                 // output data of each row
                 while($row = $result->fetch_assoc()) {
                  
                   
                   $name=$row["name"];
                   $phoneNo=$row["phoneNo"];
                   $nid=$row["nid"];
                   $gender=$row["gender"];
                   $address=$row["address"];
                   $password=$row["password"];

               
               
                 }
               } else {
                 echo "0 results";
               }               
?>
<body>
    <h1>Passenger</h1>
    <div>
        <form action="" method="post">
            <label for="fname">Name</label>
            <input type="text" id="fname" name="name" value="<?php echo $name ?>" placeholder="Your Name">
            <label for="nidcard">NID</label>
            <input type="text" id="nid" name="nid" value="<?php echo $nid ?>" placeholder="Enter NID No.">
            <label for="phonenum">Phone</label>
            <input type="text" maxlength="11" value="<?php echo $phoneNo ?>" placeholder="Enter Your Mobile No." name="phoneNo">
            <label for="maleorfemale">Gender</label>
            <select id="gendr" name="gender">
                <option value="male" <?php if($gender=='male')echo "selected";?>>Male</option>
                <option value="female"<?php if($gender=='female')echo "selected";?>>Female</option>
            </select>
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="<?php echo $address ?>" placeholder="Enter Your Address">
            <label for="password">Enter Password</label>
            <input type="password" id="password" name="password" value="<?php echo $password ?>" placeholder="Enter Password">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>