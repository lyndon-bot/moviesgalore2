<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

    include "conn.php";
    include "query.php";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Movies Galore</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    <body>
        <?php
        // put your code here
        
        ?>
        <h1>
            Movies Galore 
        </h1>
        <h6>
            Search Here or Choose a category below
        </h6>
        
        
        <table>
            
        <?php
            
         $col = query("show columns from dvd");
         $show_col = mysqli_fetch_all($col, MYSQLI_ASSOC);
         
         foreach($show_col as $show_col){
                
                echo "<form  method='post' action='select.php'><button class='btn btn-primary' name='category' value='" . $show_col['Field'] . "'>" . $show_col['Field'] . "</button></form>";
         }
         
        
        
        /*   $get = query("Select distinct Genre from dvd");
            $show = mysqli_fetch_all($get,MYSQLI_ASSOC);
            
            foreach($show as $show){
                
                echo "<tr> <td>" . $show['Genre'] . "</td></tr>";
            }
        */
        
 
        ?>      
            
        </table>
          
       <table class="table table-striped ">
            
        <?php
            
            $get_m = query("Select * from dvd limit 16");
            $show_m = mysqli_fetch_all($get_m, MYSQLI_ASSOC);
            
            foreach($show_m as $show_m){
                
                echo "<tr> <td>" . $show_m['DVDTitle'] . "</td></tr>";
            }
        
        
        ?>      
            
        </table>
        
        <div class='form'> </div>
        <ul class='tab-group'>
            <li class='tab active'><a href='#signup'>Sign up</a> </li>
            <li class='tab'> <a href='#login'>log In</a> </li>
        </ul>
             
            <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div>
      
</div> 
        </form>
    </body>
</html>
