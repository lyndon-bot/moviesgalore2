  
        <?php
            
            include "header.php";
         ?>

    <table class="table table-stripped"style="margin-top:5%;" > 
        <?php

            $category = $_POST['CType'];
            
            $get = query("Select * from dvd order by $category desc limit 30");
            $show = mysqli_fetch_all($get, MYSQLI_ASSOC);
            
            foreach($show as $show){
                
                echo "<tr> <td>" . $show['DVDTitle'] . "</td><td>" . $show["$category"] . "</td><td><form action='entertemp.php' method='post'><button class='btn btn-link' name='movieid' value='" . $show['DVDID'] . "'>Add</button></form></td><td><form action='moreinfo.php' method='post'><button class='btn btn-link' name='movieid' value='" . $show['DVDID'] . "' >More Info</button></form></td></tr>";
            
            }
        
        ?>
    </table>

    </body>
</html>