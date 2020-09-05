<?php
    $db = new PDO('mysql:localhost;dbname=survey_data', 'root', '');

    // check condition
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];

        $sql_u = "SELECT * FROM users WHERE username = '$username'";
        $res_u = mysqli_query($db, $sql_u);

        if (mysqli_num_rows($res_u) > 0) {
            $name_error = "Sorry... username already taken";
        }
        else {
            $query = "insert into data(username) VALUES ('$username')";
            $result = mysqli_query($db, $query);
            echo 'Submitted';
            exit();
        }
    }
?>