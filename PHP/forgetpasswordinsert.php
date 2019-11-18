<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Password Reset</title>
    <link rel="stylesheet" type="text/css" href="../CSS/forgetinsert.css" />
</head>

<body>
<div class="profile">
    <h2><center>Password Reset</center></h2>
<form  name="form1" method="post" action='<?php $_SERVER['PHP_SELF'] ?>'>
    <table>
        <tr>
            <td> New Password</td>
            <td><input type="password" class="pr" id="pass1" name ="pass1" > </td>
        </tr>
        <tr>
            <td>Confirm New Password  </td>
            <td><input type="password" class="pr" id="pass2" name ="pass2"></td>
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
            <td><input type="submit" class="btn1" name="submit" value="Confirm" >
                <input type="reset" class="btn1" id="reset" value="Reset">
                <input type="button" class="btn1" value="Cancle"> </td>
        </tr>
    </table>

</form>
</div>
</body>
</html>


<?php
session_start();

include ('db_connect.php');

if(isset($_POST["submit"])) {

    $password = $_POST["pass1"];
    $conpass = $_POST["pass2"];
    $username = $_POST["username"];


    $query1 = "UPDATE MEMBER SET password = '$password' WHERE username= '$username'";
    $result = mysql_query($query1);

    if(!$result)
    {
        echo "new password couldn't be updated!!";
        die("Error:" .mysql_error($con));
    }

    else{
        echo "Your new password has been saved ";
    }
}


?>