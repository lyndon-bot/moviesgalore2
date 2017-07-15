<?php


function  add($itemid,$number){
    
    include "conn.php";
    include "query.php";
    
    query("insert into tempcart values ($itemid,$number) where TC_CUSTID = $id");
    
    
}

function  remove($itemid){
    
    include "conn.php";
    include "query.php";
    
    query("delete from tempcart where Id = $itemid");
    
}

function  checkout(){
    
    include "conn.php";
    include "query.php";
    
    $value = show("select * from temp cart where TC_CUSTID = $id");
      query("insert into cart $value ");
    
}

