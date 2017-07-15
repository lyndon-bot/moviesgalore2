<?php

function query($string){
    include "config.php";
    
    return mysqli_query($conn,$string);
    
}

function display($string){
    
   $query = query($string);
   return  mysqli_fetch_assoc($query);
}
