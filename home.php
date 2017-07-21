<?php

    include "header.php";
?>

        <h1>
            Movies Galore 
        </h1>

        
<div class="panel panel-default">
    <div class="panel-heading">
       
        <h2 class="panel-title" style="text-align: center;">Choose a category below </h2> 
    </div>
    <div class="pannel-body">
     
        <div style=" display:flex; justify-content: center;">
            
            <form action="MovieSelect.php?id=1" method="post">
                <button class="form-control btn btn-info" style="" name="CType" value="Genre">  Movie Type</button>
            </form>
            
            <form action="MovieSelect.php" method="post">
                <button class="form-control btn btn-info" style="" name="CType" value="Director"> Director </button>
            </form>
            
            <form action="MovieSelect.php" method="post">
                <button class="form-control btn btn-info" style="" name="CType" value="Actor"> Actor </button>
            </form>
            
            <form action="MovieSelect.php" method="post">
                <button class="form-control btn btn-info" style="" name="CType" value="Rating"> Rating </button>
            </form>
            
            <form action="MovieSelect.php" method="post">
                <button class="form-control btn btn-info" style="" name="CType" value="Price"> Price </button>
            </form>
            
        </div>
        
    </div>
    
    
</div>

        <!-- <div class='form'> </div>
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
                            <input class="form-control" type="text"required autocomplete="off"/>
                        </div>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input  type="email"required autocomplete="off"/>
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

                </form>-->

            </div>

        </div>

    </div> 
</form>
</body>
</html>
