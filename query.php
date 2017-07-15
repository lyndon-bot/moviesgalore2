<?php

function query($string){
    
    include "conn.php";
    return mysqli_query($conn,$string);
}

function fetch($string){
    
    return mysqli_fetch_all(query($string), MYSQLI_ASSOC);
}

$user = fetch("select * from user ");

foreach( $user as $user){
    
   echo $user['userid'];
   
}

$orders = fetch("select * from orderentry A inner join orderline B on A.idorderentry = B.orderentryid inner join user C on A.customerid = C.customer_id");

foreach($orders as $orders){
    
    echo $orders['idorderline'];
}

$update_pass = fetch("update user set password = $new_pass where userid = $userid ");






