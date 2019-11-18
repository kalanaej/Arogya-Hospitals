<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../CSS/passreset.css" />
</head>
<body>
<div class="profile">
<form  method="post" action="<?= $_SESSION['PHP_SELF']; ?>">
    <table>
        <tr>
            <td> Username  </td>
            <td> <input type="text" class="pr" name="username"></td>
        </tr>
        <tr>
            <td>Security Question</td>
            <td>What is your favourite color?</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="text" class="pr" id="sqAns" name="securityans" required></td>
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
            <td> <input type="submit" class="btn1" name="submit" value="submit"></td>
            <td> <input type="reset" class="btn1" name="reset" value="reset"></td>
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

    $username = $_POST["username"];
    $sqAns = $_POST["securityans"];

    /* $query = "INSERTINTO MEMBER (fname,lname,email,telephone,address,cusType,regNo,specArea,username,password,sqAns) VALUES ('$firstname','$lastname','$email','$contactnumber','$address','$cusType','$regNo','$specArea','$username','$password','$sqAns')";
     $result = mysqli_query($con,$query);*/

    $query = "selectsqAns from MEMBER WHERE username='$username'";

    $result = mysqli_query($con, $query);

    if ($result == $sqAns) {
        header("location: edit.php");
    }
    else
    {

        echo '<script type="text/javascript"> alert("Username or password you have entered is wrong!");</script>';

    }


}







   /* if (!$result) {
        echo "failed to save data";
        die("Error:" .mysqli_error($con));

    } else {
        echo "One record added";
    }

    mysqli_close($con);*/

?>