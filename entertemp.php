<?php

include "header.php";

$movieid = $_POST['movieid'];

query("insert into tempcart (tc_custid,tc_dvdid) values ('$custid','$movieid')");
header('location:tempcart.php');

