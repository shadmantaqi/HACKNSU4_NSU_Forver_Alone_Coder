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

<div>
  <form>
  <label for="noplate">Car No. plate:</label><br>
  <input type="int" id="noplate" name="noplate" value="" placeholder="Car No. plate" pattern=""><br><br>
  <label for="model">Model:</label><br>
  <input type="text" id="model" name="model" value="" placeholder="Model" pattern=""<br><br>
  <p>Type:</p>
<form action="/action_page.php">
  <input type="radio" id="html" name="type" value="AC">
  <label for="type">AC</label><br>
  <input type="radio" id="Non AC" name="type" value="Non AC">
  <label for="type">Non AC</label><br>
  
   <input type="submit" value="Submit">
</form>
</div>

</body>
</html>

