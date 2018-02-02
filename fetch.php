<?php
$servername = "eu-cdbr-west-01.cleardb.com:3306";
$username = "b4e2418e59d7ed";
$password = "b46998fc";

try {
    $conn = new PDO("mysql:host=$servername;dbname=heroku_705a32a5ae1bbea", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>