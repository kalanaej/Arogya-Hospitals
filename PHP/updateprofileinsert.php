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
    /*$password = $_POST["pass1"];*/

    $sqAns = $_POST["securityans"];

     $username = $_SESSION['username'];
     $password = $_SESSION['password'];


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




    if ($sqAns === "")
        $errsqAns = "*Answer cannot be be empty";

    else {

        $query = "UPDATE MEMBERSET fname = '$firstname,lname = $lastname,email = $email,telephone = $contactnumber,address = $address,sqAns = $sqAns WHERE username = $username ";
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


/*$query = "INSERTINTO MEMBER (fname,lname,email,telephone,address,cusType,regNo,specArea,username,password,sqAns) VALUES ('$firstname','$lastname','$email','$contactnumber','$address','$cusType','$regNo','$specArea','$username','$password','$sqAns')";
$result = mysqli_query($con,$query);

if (!$result) {
    echo "failed to save data";
    die("Error:" .mysqli_error($con));

} else {
    echo "One record added";
}

mysqli_close($con);*/

?>