<?php
    include "insert.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="../CSS/newpass.css" />
</head>

<body>
<div class="profile">
<h2><center>Register</center></h2>
<form  name="form1" method="post" action="insert.php">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" class="pr" id ="fname" name = "fname"> </td>

        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" class="pr" id="lname" name ="lname" > </td>

        </tr>
        <tr>
            <td>E-mail</td>
            <td><input type="email" class="pr"  id="email" name ="email" > </td>

        </tr>
        <tr>
            <td>Contact Number</td>
            <td><input type="text" class="pr" id="telephone" name ="telephone" ></td>

        </tr>
        <tr>
            <td>Address</td>
            <td><textarea class="pr" id="address" name ="address" rows="3" > </textarea></td>

        </tr>
        <tr>
        <tr>
            <td>Username(Enter Your NIC No) </td>
            <td><input type="text" class="pr" id="username" name="username"> </td>


        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" class="pr" id="pass1" name ="pass1" > </td>
            <td><?= $errpassword ?></p></td>
        </tr>
        <tr>
            <td>Confirm Password  </td>
            <td><input type="password" class="pr" id="pass2" name ="pass2"></td>

        </tr>
        <tr>
            <td>Security Question</td>
            <td>What is your favourite color?</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="text" class="pr" id="sqAns" name="securityans" > </td>

        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class="btn1"  value="Confirm" name="submit">
                <input type="reset" class="btn1" id="reset" value="Reset">
                <input type="button" class="btn1" value="Cancle"> </td>
        </tr>
    </table>

</form>
</div>
</body>
</html>





























