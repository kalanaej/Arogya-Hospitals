
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Set the new password</title>
    <link rel="stylesheet" type="text/css" href="../CSS/newpass.css" />
</head>

<body>
<div class="profile">
    <h2><center>Set the new password</center></h2>
<form  name="form1" method="post" action="forgetpasswordinsert.php">
        <table>
        <tr>
            <td>Username </td>
            <td><input type="text" class="pr" name="username"> </td>
        </tr>
        <tr>
            <td>New Password </td>
            <td><input type="password" class="pr" name="pass1"> </td>
        </tr>
        <tr>
            <td>Confirm New Password  </td>
            <td><input type="password" class="pr" name ="pass2"></td>
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
            <td><input type="submit" class="btn1" value="Confirm" name="submit">
                <input type="reset" class="btn1" id="reset" value="Reset">
                <input type="button" class="btn1" value="Cancle"> </td>
        </tr>
    </table>

</form>
</div>
</body>
</html>

