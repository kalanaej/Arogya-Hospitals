
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../CSS/login.css" />
</head>
<body>


<?php

include("db_connect.php");
    session_start ();

if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $password = $_POST["pass1"];


    // $person = mysqli_query($connection,"select * from customer WHERE email = '$email'");

    $person=mysqli_query($con,"select* from MEMBER WHERE username='$username'");




    $detail = mysqli_fetch_array($person);
    if( $detail['pass1'] == $password && isset($detail)) {
        echo "login successfull";
        $_SESSION['user']=$details;

        $_SESSION['firstname']=$detail['fname'];
        $_SESSION['lastname']=$detail['lname'];
        $_SESSION['username']=$detail['username'];
        $_SESSION['password']=$detail['pass1'];



    }else {
        echo "username or password not matched";
    }

}
?>

<div class="profile">
    <h2><center>Sign In</center></h2>
<form  method="post" action="<?= $_SESSION['PHP_SELF']; ?>">
    <table>
        <tr>
            <td> Username(Enter your NIC No)   </td>
            <td> <input type="text" class="pr" name="username"></td>
        </tr>
        <tr>
            <td> Password   </td>
            <td> <input type="password" class="pr" name="password"></td>
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
            <td> <input type="submit" class="btn1" name="submit" value="Submit"></td>
            <td><input type="reset" class="btn1" name="reset" value="reset">
                <input type="button" class="btn1" value="Cancle"> </td>
        </tr>

    </table>
</form>
</div>

</body>
</html>