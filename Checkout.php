<?php
include "header.php";

$ShipM = $_POST['ShipM'];
$Payment = $_POST['Payment'];
$total = $_POST['total'];
date_default_timezone_set('EST');
$orderd =  date('Y-m-d'); 

query("insert into orderentry (order_date,deliverydate,Shipmethod,customerid,paymethod,total_order) values ('$orderd','$orderd','$ShipM','$custid','$Payment','$total')");

$orderid = mysqli_fetch_assoc(query("select idorderentry from orderentry where customerid = '$custid'"));
$orderid = $orderid['idorderentry'];
//$orderlineid = 
        

$get_temp = query("Select * from tempcart A inner join dvd B on A.tc_dvdid = B.DVDID where A.tc_custid = '$custid'");
    $show_temp = mysqli_fetch_all($get_temp, MYSQLI_ASSOC);

        foreach($show_temp as $show_temp){
             
            $dvdid = $show_temp['DVDID'];
            $price = $show_temp['Price'];
            query("insert into orderline (orderentryid,DVDID,quantity,unitprice) values ('$orderid','$dvdid','$custid','$price')");
        }
        
header('location:done.php');