<?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "latihan";
        
        $con = mysqli_connect($host, $user, $password, $database);

        if (mysqli_connect_errno()) {
            echo "failed to connect to MySQL" . mysqli_connect_error();
            exit();
        }
        ?>