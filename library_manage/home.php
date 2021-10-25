<?php
    session_start();

    print_r($_SESSION);

    ?>


<p>Hi <?php echo $_SESSION['name'] ?></p>


<!--options-->

<ul>
    <li>
        show books available
    </li>

    <li>
        <a href="./borrow.php">Borrow book</a>
    </li>

    <li>
        return book
    </li>


</ul>

