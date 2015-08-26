<?php
$id = $_GET['id'];
$sp = getsanpham($id);
    if (isset($_POST['submit'])){
        $ten=$_POST['ten'];
        $mota=$_POST['mota'];
        $gia=$_POST['gia'];
            
        if (isset($ten) && isset($mota) && isset($gia)){
        sua($ten, $mota, $gia, $id);
        header('location:index.php');
        }
    
}
include 'view/sua.php';
?>
    
    
    
