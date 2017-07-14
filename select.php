<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        
            include "query.php";
            include "conn.php";
          
            $category = $_POST['category'];
            
            $get = query("Select * from dvd order by $category desc limit 30");
            $show = mysqli_fetch_all($get,MYSQLI_ASSOC);
            
            foreach($show as $show){
                
                echo "<tr> <td>" . $show['Genre'] . "</td></tr>";
            }
            
        ?>
    </body>
</html>
