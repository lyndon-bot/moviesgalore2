<?php

include "header.php";
          
            $category = $_POST['category'];
            
            $get = query("Select * from dvd order by $category desc limit 30");
            $show = mysqli_fetch_all($get,MYSQLI_ASSOC);
            
            foreach($show as $show){
                
                echo "<tr> <td>" . $show['DVDTitle'] . "</td> <td>" . $show["$category"] . "</td></tr>";
            }
            
        ?>
        </table>
    </body>
</html>
