<?php include 'protection.php'?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    input[type=text],input[type=date],input[type=time],
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


    .slidecontainer {
        width: 100%;
    }

    .slider {
        -webkit-appearance: none;
        width: 100%;
        height: 25px;
        background: #d3d3d3;
        outline: none;
        opacity: 0.7;
        -webkit-transition: .2s;
        transition: opacity .2s;
    }

    .slider:hover {
        opacity: 1;
    }

    .slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 25px;
        height: 25px;
        background: #04AA6D;
        cursor: pointer;
    }

    .slider::-moz-range-thumb {
        width: 25px;
        height: 25px;
        background: #04AA6D;
        cursor: pointer;
    }
</style>
<?php

include('connection.php');
                 $insertQ1=array();
                 $insertQ2=array();
                 $updateQ1=array();
                 foreach($_POST as $key => $value) {
                     array_push($insertQ1,"`$key`");
                     array_push($insertQ2,"'$value'");
                     array_push($updateQ1,"`$key`='$value'");
                  };
  if(isset($_POST["pickDate"]))  {              $sql = "INSERT INTO `booking_bydate`(".implode(",",$insertQ1).") VALUES(".implode(",",$insertQ2).")";
                  
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }}
?>
<body>
    <h1>Date</h1>
    <div>
        <form action="" method="post">
            <label for="fname">Pick Date</label>
            <input type="date" name="pickDate">

    <br>
    <label for="fname">Pick Time</label>
            <input type="time" name="pickTime">

    <br>
    <label for="type">Max Budget</label>
    <input type="text" value="" name="maxBudget">
    <input type="hidden" name="userID" value="<?php echo $_SESSION["userid"]?>">

    <label for="type">Car Type</label>
    <select id="type" name="ac">
        <option value="select">Select</option>
        <option value="ac">AC</option>
        <option value="non">NON AC</option>
    </select>
    <br>
    <label for="country">Pick Location</label>
    <select id="country" name="pickLocation">
        <option value="select">Select</option>
        <option value="nonac">Bashundhara</option>
        <option value="nonac">Old Dhaka</option>
        <option value="nonac">Dhanmondi</option>
        <option value="nonac">Banani</option>
        <option value="nonac">Gabtoli</option>
        <option value="nonac">Gulshan</option>
        <option value="nonac">Badda</option>
    </select>
    <label for="country">Drop Off Lacation</label>
    <select id="country" name="dropLocation">
        <option value="select">Select</option>
        <option value="nonac">Bashundhara</option>
        <option value="nonac">Old Dhaka</option>
        <option value="nonac">Dhanmondi</option>
        <option value="nonac">Banani</option>
        <option value="nonac">Gabtoli</option>
        <option value="nonac">Gulshan</option>
        <option value="nonac">Badda</option>
    </select>
    <br>
        <input type="submit" value="Create Request">
        </form>
    </div>
</body>
</html>