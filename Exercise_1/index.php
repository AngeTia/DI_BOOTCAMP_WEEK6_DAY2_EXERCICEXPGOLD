<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Longueur De La Ficelle Calculer La Factorielle D'un Nombre</title>
  </head>
  <body>
      <form action="" method ="POST">
      <h2>Le factoriel d'un nombre</h2>
      <p> Nombre :<input type="number" name="noms" > </p>
      <button type="submit" name ="submit" value ="valider">send</button>
      </form>

      <?php
          if (isset( $_POST['submit'])) 
          { 
            $fact = 1;
            for ($i = 1; $i <= $_POST['noms']; $i++) 
            {
              $fact = $fact * $i;
            } 
            echo 'Le factoriel de ' . $_POST['noms']  . ' est ' . $fact;
          }
      ?>
      
  </body>
</html>