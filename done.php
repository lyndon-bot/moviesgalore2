<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include "header.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table class="table table-reponsive table-stripped" style="margin-top: 50px;">
        <?php
            
            $get_temp = query("Select * from orderentry A inner join user B on A.customerid = B.customer_id where A.customerid = '1'");
            $show_temp = mysqli_fetch_all($get_temp, MYSQLI_ASSOC);
            
            foreach($show_temp as $show_temp){
                
               echo "<tr><td>" . $show_temp['order_date'] . "</td><td>" . $show_temp['deliverydate'] . "</td><td>" . $show_temp['Shipmethod'] . "</td><td>" . $show_temp['userid'] . "</td><td>" . $show_temp['paymethod'] . "</td><td>" . $show_temp['total_order'] . "</td></tr>";
           
            
           }

        ?>
        </table>  
    </body>
</html>
