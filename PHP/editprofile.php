<?php

    include "db_connect.php";
    session_start ();

$username = $_SESSION["username"];


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit the profille</title>
    <link rel="stylesheet" type="text/css" href="../CSS/editprofile.css" />
</head>

<body>

<?php
$query= "select* from MEMBER WHERE username='$username'";

$result = mysqli_query($con,$query);

$detail = mysqli_fetch_array($result);


    $firstname = $detail["fname"];
    $lastname = $detail["lname"];
    $email = $detail["email"];
    $contactnumber = $detail["telephone"];
    $address = $detail["address"];
    $username = $detail["username"];
    $sqAns = $detail["sqAns"];

?>


<div class="profile">
<form  name="form1" method="post" action="updateprofileinsert.php">
    <table>
        <tr>
            <td>First Name</td>
        </tr>

        <tr>
            <td><input type="text"  id ="fname" class="pr" name = "fname" value = "<?= $firstname; ?>" ></td>
</tr>
<tr>
    <td>Last Name</td>
</tr>
        <tr>
    <td><input type="text" id="lname" class="pr" name ="lname" value = "<?= $lastname; ?>"> </td>
</tr>
<tr>
    <td>E-mail</td>
</tr>
        <tr>
    <td><input type="email" id="email"class="pr"  name ="email" value = "<?= $email ; ?>"></td>
</tr>
<tr>
    <td>Contact Number</td>
</tr>
        <tr>
    <td><input type="text" id="telephone" class="pr" name ="telephone" value = "<?= $contactnumber; ?>"> </td>
</tr>
<tr>
    <td>Address</td>
</tr>
        <tr>
    <td><textarea id="address" class="pr1" name ="address" rows="3" value = "<?= $address ; ?>"> </textarea></td>
</tr>
<tr>
    <td>Username </td>
    <td> <?= $username ; ?></td>
<tr>
    <td>Security Question: What is your favourite color?</td>
</tr>
<tr>

    <td><input type="text" id="sqAns" class="pr" name="securityans" value = "<?= $sqAns ; ?>"> </td>
</tr>

<tr>
        <tr>
    <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
    <td>

        <input type="submit" class="btn1" name="submit" value="Save Changes" >
        <input type="reset" class="btn1" id="reset" value="Reset">
        <input type="button" class="btn1" value="Cancle"> </td>

</tr>
</table>
</div>
</body>
</html>


