<?php
    require_once("constants.php");
    $conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
    if(!$conn){
        die("Error connecting" . mysqli_erro($conn));
    }

    // Create the database;
    $sql = "CREATE DATABASE IF NOT EXISTS " .DB_NAME;
    if (!mysqli_query($conn, $sql)) {

        echo "Error creating database: " . mysqli_error($conn);
    }

    // Select the database
    $db_select = mysqli_select_db($conn, DB_NAME);
    if(!$db_select){
        die("Could not connect to database" . mysqli_error($conn));
    }

    $sql = "CREATE TABLE IF NOT EXISTS ". DB_NAME . ".`user` ( `id` INT NOT NULL AUTO_INCREMENT , `fullname` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `track` VARCHAR(50) NOT NULL , `course` VARCHAR(50) NOT NULL , `level` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    if (!mysqli_query($conn, $sql)) {
       echo "Error creating database: " . mysqli_error($conn);
    }
    


