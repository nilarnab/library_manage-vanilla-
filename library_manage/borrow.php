<?php
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Borrow</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
    <h2>So, want to borrow something <?php echo $_SESSION['name']; ?> ?</h2>
    <form action="./php/borrow.php" method="POST">
        <div class="form-group">
            <label for="id">Book id</label>
            <input type="text" class="form-control" id="id" placeholder="Enter book id" name="id">
        </div>

        <button type="submit" class="btn btn-default" name="submit" >Submit</button>
    </form>
</div>

</body>

</html>
