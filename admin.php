<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

include "query.php";
include "conn.php";

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $user = fetch("select * from user ");

        foreach( $user as $user){
    
        echo $user['userid'];
   
        }

        $orders = fetch("select * from orderentry A inner join orderline B on A.idorderentry = B.orderentryid inner join user C on A.customerid = C.customer_id");

        foreach($orders as $orders){

            echo $orders['idorderline'];
        }

       // $update_pass = fetch("update user set password = $new_pass where userid = $userid ");
        
        
        ?>
    </body>
</html>
