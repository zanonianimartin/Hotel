<?php

  $server = mysql_connect($servername, $username, $password); 
  $db = mysql_select_db("hotel", $server); 
  $query = mysql_query("SELECT * FROM slides ORDER BY id desc LIMIT 3"); 
  
?>
<div id="slider" class="slideshow-container">
    <?php
               while ($row = mysql_fetch_array($query)) {
                   echo "<div class='mySlides fade'>";
                   echo "<img src='".$row['img']."' style='width:100%'>";
                   echo "<div style='text-align:center'><h3>".$row['descripcion']."</h3></div>";
                   echo "</div>";
               }

            ?>

            <div style="text-align:center">
            <span class="dot" ></span> 
            <span class="dot" ></span> 
            <span class="dot"></span> 
</div>
</div>