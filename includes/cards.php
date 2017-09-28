<?php

  $server = mysql_connect($servername, $username, $password); 
  $db = mysql_select_db("hotel", $server); 
  $query = mysql_query("SELECT * FROM promo WHERE activo = true"); 
  
?>

<div class="cards">
<?php
               while ($row = mysql_fetch_array($query)) {
                     echo "<div class='card'>
                        <img src='".$row['img']."' style='height: 225px;'>
                        <div class='card-title'>
                        <a href='#' class='toggle-info btn'>
                            <span class='left'></span>
                            <span class='right'></span>
                        </a>
                        <h2>
                            ".$row['titulo']."
                            <small>$".$row['precio']."</small>
                        </h2>
                        </div>
                        <div class='card-flap flap1'>
                        <div class='card-description'>
                            ".$row['descripcion']."    
                        </div>
                        <div class='card-flap flap2'>
                            <div class='card-actions'>
                            <a href='#' class='btn'>Ver Detalles</a>
                            </div>
                        </div>
                        </div>
                        </div>";
               }

            ?>
 </div>


  