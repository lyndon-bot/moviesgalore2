<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!--Login page-->
<form action="/action_page.php">
    <div class="container">
        <label><b> Username </b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    </div>
    <label><b> Password <b></label>
                <input type="text" name="psw" placeholder="Enter Password" required>
                <button type="submit"> Login</button>
                <input type="checkbox" checked="checked"> Remember Me 
                </div>
                <div class="container" style="background-color: #fff"> <button 
                        type="button" class="cancelbtn"></button>
                        <span class="psw"> <a href="#"> Forgot password?</a> 
                        </span>
                </div>
</form>
<!--Sign up page-->
<form action="/action_page.php" method="post">
    Name <br>
    <input type="text" name='firstname'   value="">
    <input type='text' name='lastname' value=''> <br>
    Password <br>
    <input type='text' placeholder="Enter Password" id="password" required> <br>
    Confirm <br>
    <input type='text' placeholder="Confirm Password" id="confirm_password" required>
    <br>
    Email <br>
    <input type="text" placeholder="Enter Email" name="email" required> <br>
</form>