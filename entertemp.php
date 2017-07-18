<?php

include "query.php";


$custid = "3";
$movieid = $_POST['movieid'];

query("insert into tempcart (tc_custid,tc_dvdid) values ($custid,$movieid)");
header('location:tempcart.php');

