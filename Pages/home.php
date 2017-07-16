<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php 

include "../Functions/header.php";

?>
<html>
    <head>
        <title>Movies Galore</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
           
            <table class="table table-responsive table-striped"> 
                
                <?php

                /*
                $show = mysqli_fetch_all(query("SELECT `Genre` FROM dvd LIMIT 100"),MYSQLI_ASSOC);

                foreach($show as $show ){

                    echo "<tr><td>" . $show['Genre'] . "</td></tr>";
                }*/
               
            
            ?>
                
                <form method="post" >
                <button > Genres </button>
                </form>
               
               <form method="post" >
                <button > Directors </button>
                </form>
                    
                <form method="post" >    
                <button> Rating </button>
                </form>
                 
                <form method="post" >
                <button > Title </button>
                </form>
                    
                <form method="post" >
                <button > Actor </button>
                </form>
                
                
            </table>
           
                
           
        </div>
    </body>
</html>
