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
<body>
    <h1>Passenger</h1>
    <div>
        <form action="/action_page.php">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your First Name">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your Last Name">
            <label for="nidcard">NID</label>
            <input type="text" id="nidc" name="nidnum" placeholder="Enter NID No.">
            <label for="phonenum">Phone</label>
            <input type="text" maxlength="11" placeholder="Enter Your Mobile No.">
            <label for="maleorfemale">Gender</label>
            <select id="gendr" name="gendr">
                <option value="mal">Male</option>
                <option value="femal">Female</option>
            </select>
            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Enter Your Address">
            <label for="password">Enter Password</label>
            <input type="text" id="password" name="password" placeholder="Enter Password">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>