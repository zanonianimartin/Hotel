<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body >
        <?php 
        include('db/conexion.php');
       
        include('includes/nav.html'); ?>
        <br>
        <div id ="content">
            <div id="gallery">
                <div id="image">
                    <img src="images/habitaciones/1.jpg" alt="asdasd">
                </div>
                <div id="image">
                    <img src="images/habitaciones/2.jpg" alt="asdasd">
                </div>
                <div id="image">
                    <img src="images/habitaciones/3.jpg" alt="asdasd">
                </div>
                <div id="image">
                    <img src="images/habitaciones/4.jpg" alt="asdasd">
                </div>
                <div id="image">
                    <img src="images/habitaciones/5.jpg" alt="asdasd">
                </div>
            </div>
        
        <div class="container">
        <table class="table-fill">
            <tbody class="table-hover">
                <tr>
                    <td class="text-left">Mini bar</td>
                    <td class="text-left"><img src="fonts/success.png" alt="success"></td>
                </tr>
                <tr>
                    <td class="text-left">Aire acondicionado</td>
                    <td class="text-left"><img src="fonts/success.png" alt="success"></td>
                </tr>
                <tr>
                    <td class="text-left">TV con conexión por cable</td>
                    <td class="text-left"><img src="fonts/success.png" alt="success"></td>
                </tr>
                <tr>
                    <td class="text-left">Terraza</td>
                    <td class="text-left"><img src="fonts/nosuccess.png" alt="success"></td>
                </tr>
                <tr>
                    <td class="text-left">WIFI</td>
                    <td class="text-left"><img src="fonts/success.png" alt="success"></td>
                </tr>
                <tr>
                    <td class="text-left">Caja fuerte</td>
                    <td class="text-left"><img src="fonts/nosuccess.png" alt="success"></td>
                </tr>
            </tbody>
        </table>
                

                
            </div>
        </div>
         



    <?php include('includes/footer.html'); ?>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
    <script src="js/functions.js"></script>
    </body>

</html>