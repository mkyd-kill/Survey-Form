<!-- Initialization of the php commands while integrating its database -->
<?php

    // Variable declaration
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $ethics = $_POST['ethics'];
    $mostLike = $_POST['mostLike'];
    $improve = $_POST['improve'];
    $comment = $_POST['comment'];
    $increase = $_POST['increase'];
    $benefited = $_POST['benefited'];
    $development =$_POST['development'];
    $pulling_down = $_POST['pulling_down'];
    $help = $_POST['help'];

    // Database connections
    session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $db_name = "survey_data";
    $tbl_name = "data";


    // Create connections
    $conn = new mysqli($host, $user, $password, $db_name);
    if (!$conn) {
        die("Could not connect to server: ". $conn->mysql_error);
    }

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into data(username, gender, age, ethics, mostLike, improve, comment, increase, benefited, development, pulling_down, help) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisssssssss", $username, $gender, $age, $ethics, $mostLike, $improve, $comment, $increase, $benefited, $development, $pulling_down, $help);
        $stmt->execute();
        header('Location: header.php'); // Redirect to another off page
        $stmt->close();
        $conn->close();
    }
?>