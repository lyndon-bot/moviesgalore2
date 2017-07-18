<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include "header.php"; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="Checkout.php" method="post" style="margin-top: 100px;"> 
            
            <select name="ShipM">
                <option value="3.50">FedEx</option>
                <option value="3.75">UPS</option>
                <option value="2.75">USPS</option>
            </select>
            
            <select name="Payment">
                <option>Mastercard</option>
                <option>VISA</option>
                <option>American Express</option>
                <option>Discovery</option>
            </select>
            
            
        
        
       <table class="table table-reponsive table-stripped" style="margin-top: 50px;">
        <?php
            
            $get_temp = query("Select * from tempcart A inner join dvd B on A.tc_dvdid = B.DVDID ");
            $show_temp = mysqli_fetch_all($get_temp, MYSQLI_ASSOC);
            $total = 0;
            
            foreach($show_temp as $show_temp){
                
               echo "<tr> <td>" . $show_temp['DVDTitle'] . "</td><td>" . $show_temp['Price'] . "</td><td></tr>";
               $total += $show_temp['Price'];
            
           }

        ?>
           <tr> <td> Total: <?php echo $total; ?> </td> </tr>
        </table>  
         
            <input value="<?php echo $total;?>" name="total" style="visibility: hidden;"/>   
       
            <button class="btn btn-primary form-control"> Purchase </button>
        </form>
    </body>
</html>
