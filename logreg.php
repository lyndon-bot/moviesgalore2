<?php
require_once 'query.php';
$submit = $_POST['submit'] ;

function login(){
 
   
   $uname = $_POST['uname'];
   $psw = md5($_POST['psw']);
   
   $login = query("select * from user where userid = '$uname' and password ='$psw'");
   $check = mysqli_num_rows($login);
   
    if($check == 1){
        
        session_start();
        $get_session = mysqli_fetch_assoc($login);
        $_SESSION['custid'] = $get_session['customer_id'];
        $_SESSION['username'] = $get_session['userid'];
        header('location:home.php');
        
        
    } else{
        
      header('location:login.php');
    }
   
        
}

function register(){
  
    $uname = $_POST['uname'];
    $psw = md5($_POST['psw']);
    
    $reg = query("insert into user (userid,password) values ('$uname','$psw')"); 
    login();
}

switch($submit){
    
case 1: login();
   break;

case 2: register();
    break;
    
    
}