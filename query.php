<?php

function query($string){
    
    include "conn.php";
    return mysqli_query($conn,$string);
}



