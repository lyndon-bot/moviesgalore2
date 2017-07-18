<?php

include "query.php";
$movieid = $_POST['movieid'];
query(" Delete from tempcart where tc_dvdid = $movieid");

header('location:tempcart.php');
