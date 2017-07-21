  
        <?php
            
            include "header.php";
            
            $id = $_GET['id'];
            $idmax = 30 * $id;
            $idmin = $idmax - 29;
         ?>

    <table class="table table-stripped"style="margin-top:5%;" > 
        <?php

            $category = $_POST['CType'];
            
            $get = query("Select * from dvd where DVDID >= '$idmin' and DVDID <= '$idmax' order by $category desc");
            $show = mysqli_fetch_all($get, MYSQLI_ASSOC);
            
            foreach($show as $show){
                
                echo "<tr> <td>" . $show['DVDTitle'] . "</td><td>" . $show["$category"] . "</td><td><form action='entertemp.php' method='post'><button class='btn btn-link' name='movieid' value='" . $show['DVDID'] . "'>Add</button></form></td><td><form action='moreinfo.php' method='post'><button class='btn btn-link' name='movieid' value='" . $show['DVDID'] . "' >More Info</button></form></td></tr>";
            
            }
           $up = $id + 1;
           $down = $id - 1;
            echo " </table> <form action='MovieSelect.php?id=" . $down . "' method='post'>
   
                <input name='CType' value='" . $category .  "'/>
                <button>Previous</button>
           
            </form>
            <form action='MovieSelect.php?id=" . $up . "' method='post'>
   
                <input name='CType' value='" . $category .  "'/>
                <button>Next</button>
           
            </form>";
          
            
        ?>
    

    </body>
</html>