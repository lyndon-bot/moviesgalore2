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
            
            $get_temp = query("Select * from tempcart A inner join dvd B on A.tc_dvdid = B.DVDID ");
            $show_temp = mysqli_fetch_all($get_temp, MYSQLI_ASSOC);
            $total = 0;
            
            foreach($show_temp as $show_temp){
                
               echo "<tr> <td>" . $show_temp['DVDTitle'] . "</td><td>" . $show_temp['Price'] . "</td><td><form action='removetemp.php' method='post'><button class='btn btn-link' name='movieid' value='" . $show_temp['DVDID'] . "'>Remove</button></form></td><td><form action='moreinfo.php' method='post'><button class='btn btn-link' name='movieid' value='" . $show_temp['DVDID'] . "' >More Info</button></form></td></tr>";
               $total += $show_temp['Price'];
            
           }

        ?>
           <tr> <td> <?php echo $total; ?> </td> </tr>
        </table>  
        
        <form action="CheckoutF.php" method="post" > 
            <button class="btn btn-primary form-control"> Checkout </button>
        </form>
        
        <form action="Checkout.php" method="post" > 
            <button class="btn btn-warning form-control"> Return To Shopping </button>
        </form>
        
    </body>
</html>
