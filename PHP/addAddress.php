<?php
    require 'connect_db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Comments on Library Services</title>
</head>
<body>
<div align="center">
    <h4>
        <?php
        if(isset($_POST["address"]))
        {
            $address = $_POST["address"];

        }
        else
        {
            $error = "Address area not filled";
            echo $error;
        }
        //insert data to the database
        if (isset($_POST["proceed"])){
            $insertString = "INSERT INTO address VALUES('$address');";

            if(!mysql_query('$insertString')){
                die('Error : '.mysql_error());
            }
            else{
                echo '<br/>';
                echo 'Success';
            }
        }
        ?>
        <hr/>
    </h4>
</div>
</body>
</html>
