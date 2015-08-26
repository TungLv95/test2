<?php
    $id = $_GET['id'];
    xoa($id);
    header('location:index.php');
    ?>
