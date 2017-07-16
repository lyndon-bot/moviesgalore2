<?php

function query($string){
    
    include "conn.php";
    return mysqli_query($conn,$string);
}

function fetch($string){
    
    return mysqli_fetch_all(query($string), MYSQLI_ASSOC);
}





