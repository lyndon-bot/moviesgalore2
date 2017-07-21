<?php

include "header.php";

$movieid = $_POST['movieid'];
query(" Delete from tempcart where tc_dvdid = '$movieid' and tc_custid = '$custid'");

header('location:tempcart.php');
