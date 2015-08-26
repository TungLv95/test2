<?php
    if (isset($_POST['submit'])){
        $ten=$_POST['ten'];
        $mota=$_POST['mota'];
        $gia=$_POST['gia'];
            
        if (isset($ten) && isset($mota) && isset($gia)){
        them($ten, $mota, $gia);
        header('location:index.php');
        }
    
}
include 'view/them.php';
?>
    
    
    
