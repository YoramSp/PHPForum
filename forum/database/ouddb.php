<?php

print_r(PDO::getAvailableDrivers());



        $dbhost = "localhost";
        $database = "test2";
        $user = "Test";
        $wachtwoord = "test";
        try {
            $conn = new PDO("mysql:host=$dbhost;dbname=$database", $user, $wachtwoord);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

?>