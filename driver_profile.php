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

<div>
  <form>
  <label for="NID">NID:</label><br>
  <input type="int" id="NID" name="NID" value="" placeholder="NID" pattern=""><br><br>
  <label for="dlicense">Driving License:</label><br>
  <input type="text" id="dlicense" name="dlicense" value="" placeholder="Driving License" pattern=""<br><br>
  <label for="name">Name:</label><br>
  <input type="int" id="name" name="name" value="" placeholder="Name" pattern=""<br><br>
  <label for="Pnumber">Phone Number:</label><br>
  <input type="int" id="Pnumber" name="Pnumber" value="" placeholder="Phone Number" pattern=""<br><br><br>
  <label for="address">Address:</label><br>
  <input type="text" id="Address" name="Address" value="" placeholder="Address" pattern=""<br><br><br>
   <input type="submit" value="Submit">
</form>
</div>

</body>
</html>