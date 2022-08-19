<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<style>

input[type=text], input[type=password], select {
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

<center><h2 style="padding-bottom: 100px">Shohojatri</h2></center>

<div>
  <form method="POST" action="authentication.php">
    <label for="phone">Phone No.</label>
    <input type="text"  name="phone" placeholder="Your phone number">

    <label for="password">Password</label>
    <input type="password"  name="password" placeholder="Enter Password">
        <label for="login_as">Login as</label><br>
                    <input type="radio" id="html" name="account_as" value="passenger">
<label for="html">Passenger</label>
<input type="radio" id="css" name="account_as" value="driver">
<label for="css">Driver</label><br>
    <input type="submit" value="Login">
   
    </table>
  </form>
  <center><a href="signup.php">New here? Create an Account</a></center>
</div>
<?php session_destroy();?>
</body>
</html>


