<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $id = $_POST["name"];
        $pwd = $_POST["pwd"];
        $rpwd = $_POST["rpwd"];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";

        if ($pwd == $rpwd) {
// Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "INSERT INTO user (uid,pwd) VALUES ($id,$pwd)";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        } else {
            echo "password error";
        }
        ?>

        <meta http-equiv=refresh content="2;url=log.html">
    </body>
</html>
