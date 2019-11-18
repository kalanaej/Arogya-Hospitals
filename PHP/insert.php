<?php
    session_start();

include ('db_connect.php');

if(isset($_POST["submit"])) {

    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $email = $_POST["email"];
    $contactnumber = $_POST["telephone"];
    $address = $_POST["address"];
    $username = $_POST["username"];
    $password = $_POST["pass1"];
    $conpass = $_POST["pass2"];
    $sqAns = $_POST["securityans"];

    if ($firstname == "")
        $errfname = "*First name cannot be be empty";

    elseif (!preg_match("/^[a-zA-Z]+$/", $firstname))
        $errfname = "*Enter only text for your Name";

    if ($lastname == "")
        $errlname = "*Last name cannot be be empty";

    elseif (!preg_match("/^[a-zA-Z]+$/", $lastname))
        $errlname = "*Enter only text for your Name";

    if ($email == "")
        $erremail = "*Email cannot be be empty";

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
        $erremail = "*Enter a valid Email Address";

    if ($contactnumber == "")
        $errcontactnumber = "*contact number cannot be be empty";

    elseif (!preg_match("/^[0-9]+$/", $contactnumber))
        $errcontactnumber = "*Enter only numbers for your contact number";


    if ($address == "")
        $erraddress = "*Address cannot be be empty";

    elseif (!preg_match("/^[a-zA-Z0-9,.]+$/", $address))
        $erraddress = "*Enter only text and numbers for your Address";


    if ($username == "")
        $errusername = "*Username cannot be be empty";

    elseif (!preg_match("/^[0-9Vv]+$/", $username))
        $errusername = "*Username can only contain numbers and letter 'V' only.";


    if ($password == "")
        $errpassword = "*Password cannot be be empty";

    elseif (strlen($password) < 6)
        $errpassword = "*Your password must contain at least 6 characters.";

    elseif (!preg_match("#[0-9]#", $password))
        $errpassword = "*Your password must contain at least one Digit.";

    if ($conpass == "")
        $errconpassword = "*Re-enter Paswword cannot be be empty";

    elseif ($conpass != $password)
        $errconpass = "*Your passwords are not matching";


    if ($sqAns === "")
        $errsqAns = "*Answer cannot be be empty";

    else {

        $query1 = "SELECT* FROM MEMBER WHERE username='$username'";
        $result1 = mysqli_query($con, $query1);
        $num1 = mysqli_num_rows($result1);

        $query2 = "SELECT* FROM MEMBER WHERE email='$email'";
        $result2 = mysqli_query($con, $query2);
        $num2 = mysqli_num_rows($result2);

        if ($num1 > 0) {
            $errusername = '*Username already taken';
        }
        if ($num2 > 0) {
            $erremail = '*E-mail already taken';
        } else {
            $query = "INSERTINTO MEMBER (fname,lname,email,telephone,address,username,password,sqAns) VALUES ('$firstname','$lastname','$email','$contactnumber','$address','$username','$password','$sqAns')";
            $result = mysqli_query($con, $query);

            if (!$result) {
                echo "failed to save data";
                die("Error:" . mysqli_error($con));
            } else {
                echo "One record added";
                //header("location: Redirect.html");
            }
        }
    }
}

?>

    <!--/*$query = "INSERTINTO MEMBER (fname,lname,email,telephone,address,cusType,regNo,specArea,username,password,sqAns) VALUES ('$firstname','$lastname','$email','$contactnumber','$address','$cusType','$regNo','$specArea','$username','$password','$sqAns')";
    $result = mysqli_query($con,$query);

    if (!$result) {
        echo "failed to save data";
        die("Error:" .mysqli_error($con));

    } else {
        echo "One record added";
    }

    mysqli_close($con);*/
-->
