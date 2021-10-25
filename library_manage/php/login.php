<?php
    include './connection/connection.php';

    session_start();

    if (isset($_POST['submit']))
    {

        print_r($_POST);

        $email = $_POST['email'];
        $password = $_POST['pwd'];

       // Perform query
       $sql = "SELECT * FROM users WHERE email= '$email'  AND password = '$password'";
       $result = mysqli_query($conn, $sql);
       
       if (mysqli_num_rows($result) > 0) {
         // output data of each row
//         echo "Logged in";

           $row = $result->fetch_assoc();

           $_SESSION['id'] = $row['id'];
           $_SESSION['name'] = $row['name'];
           $_SESSION['branch'] = $row['branch'];
           $_SESSION['email'] = $email;
           $_SESSION['password'] = $password;

           header("Location: ../home.php");

       } else {
         echo "wrong usename or passwords";
       }
        
        mysqli_close($conn);
        
    }