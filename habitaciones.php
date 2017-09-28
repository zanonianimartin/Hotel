<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body>
        <?php 
        include('db/conexion.php');
       
        include('includes/nav.html'); ?>
        
        <div id ="content" >
            <?php 
                include('includes/listahabitaciones.php');
            ?>
        </div>
        
         



    <?php include('includes/footer.html'); ?>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
    <script src="js/functions.js"></script> 
    </body>

</html>