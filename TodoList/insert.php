<?php
$List = $_POST['list'];
    include "config.php";
    mysqli_query($con ,"INSERT INTO `tbltodo`( `list`) VALUES ('$List')");
    header("location:index.php")
?>