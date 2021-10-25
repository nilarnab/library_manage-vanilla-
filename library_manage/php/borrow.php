<?php
    include './connection/connection.php';
    echo "Trying to borrow";

    session_start();

    if (isset($_POST['submit'])) {

        print_r($_POST);



        // status
        // 1 -> available
        // 2 -> borrowed
        // 3 -> damage



        mysqli_close($conn);

    }

