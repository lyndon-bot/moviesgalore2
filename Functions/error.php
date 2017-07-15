<?php

function error($msg){
    
    $_SESSION['$msg'];
    header("location:../pages/error.php");
}