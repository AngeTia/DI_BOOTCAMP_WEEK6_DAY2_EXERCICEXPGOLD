<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercise_2 Motif Utilisant Des Boucles For </title>
    </head>
    <body>
        <?php  
            $nombre = 1;
            for($nombre=1;$nombre<=8;$nombre++)
            {
                for ($nombre1=1;$nombre1<=$nombre;$nombre1++)
                    {
                        echo "*";
                    }
                echo "<br>";
            }
        ?>
    </body>
</html>