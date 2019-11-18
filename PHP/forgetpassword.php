<?php

    include "db_connect.php";
    session_start ();

$username = $_SESSION["username"];


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Forgot Your Password</title>
    <link rel="stylesheet" type="text/css" href="../CSS/forgetpass.css" />
</head>

<body>
<div class="profile">
<h2><center>Reset the password</center></h2>

<form  name="form1" method="post" action='<?php $_SERVER['PHP_SELF'] ?>' >
    <table>

        <tr>
            <td>Username(Enter Your NIC No) </td>
            <td><input type="text" class="pr" id="username" name="username"></td>
        </tr>
        <tr>
            <td>Security Question: What is your favourite color?</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="text" class="pr" id="sqAns" name="securityans" required > </td>
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
                <input type="reset" class="btn1" id="reset" value="Reset"></td>
        </tr>
    </table>
</form>
</div>










<?php

include("db_connect.php");


if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $sqAns = $_POST["securityans"];


    // $person = mysqli_query($connection,"select * from customer WHERE email = '$email'");

   /* $person=mysqli_query($con,"select * from MEMBER WHERE username='$username'");*/

    $query= "select* from MEMBER WHERE username='$username'";

    $result = mysqli_query($con,$query);


    $detail = mysqli_fetch_array($result);

    if( $detail["sqAns"] == $sqAns) {
        echo"reset the password";
        print "<script language='JavaScript'> document.location.replace('newpassword.php');</script>";

    }else {
        echo "username or password not matched";
    }

}
?>
</body>
</html>




