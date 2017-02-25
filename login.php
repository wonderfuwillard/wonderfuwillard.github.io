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
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";
// Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
       $sql = "SELECT * FROM user WHERE uid='$id' AND pwd='$pwd'";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "Login successful";
        } else {
            echo "Login fail";
        }

        $conn->close();
        ?>

        <meta http-equiv=refresh content="2;url=log.html">
    </body>
</html>
