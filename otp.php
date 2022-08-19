<!DOCTYPE html>

<html>
     <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    button:hover {
        opacity: 1;
    }

    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    .cancelbtn,
    .signupbtn {
        float: left;
        width: 50%;
    }

    .container {
        padding: 16px;
    }

    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    @media screen and (max-width: 300px) {

        .cancelbtn,
        .signupbtn {
            width: 100%;
        }
    }
</style>

<body>
<?php
include('connection.php');
$otp=rand(1000,9999);
$message="Your OTP Code is $otp. -Shohojatri";
$message=urlencode($message);
if($_POST["psw"]!=null){if($_POST['account_as']=='driver')$sql = "INSERT INTO `driver`(`phoneNo`,`password`, `otp`) VALUES ('$_POST[phone]','$_POST[psw]', '$otp')";
else $sql = "INSERT INTO `passenger`(`phoneNo`,`password`, `otp`) VALUES ('$_POST[phone]','$_POST[psw]', '$otp')";

if ($conn->query($sql) === TRUE) {
    $url='https://serversms.amartable.com/receive.php?number='.$_POST["phone"].'&content='.$message.'&sender=aksc&pin=zin2020';
ob_start();
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  echo $response;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$phone=null;
$otpkey=null;
if(isset($_POST["otp"]))$otpkey=$_POST["otp"];
if(isset($_POST["phone"]))$phone=$_POST["phone"];
echo $account_as=$_POST['account_as'];
if($phone!=null&&$otpkey!=null){
    $sql = "SELECT phoneNo,otp FROM `".$account_as."` where phoneNo='$_POST[phone]' AND otp='$_POST[otp]'";
$result = $conn->query($sql);
echo $sql;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   if($_POST["phone"]==$row["phoneNo"]){
      echo "<meta http-equiv=\"Refresh\" content=\"0; url=\./HACKNSU4_NSU_Forver_Alone_Coder/login.php\" />";
   }
  }
} else {
  echo "0 results";
}
}
?>
    <form action="" method="post" style="border:1px solid #ccc">
        <div class="container">
            <h1>OTP Verification</h1>
            <p>We have sended an OTP to your number <?php echo $_POST["phone"]?><p>
            <hr>
            <label for="psw-repeat"><b>OTP</b></label><br>
            <input type="text" maxlength="4" name="otp" placeholder="Enter 4 digit OTP">
            <input type="hidden" name="phone" value="<?php echo $_POST['phone'];?>">
            <input type="hidden" name="account_as" value="<?php echo $_POST['account_as'];?>">
            <div class="clearfix">
                <button type="submit" class="signupbtn">Verify</button>
            </div>
        </div>
    </form>
</body>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP</title>
</head>

</html>