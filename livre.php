<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="livre.css">
    </head>
  <body>
    <?php

      $livre1 = array(
        'prime' => true,
        'name' => 'Les meilleurs conseils de David Goodenough',
        'author' => 'David Goodenough',
        'prix' => '2000'
      );

      $livre2 = array(
        'prime' => true,
        'name' => 'Comment réaliser vos bruitages',
        'author' => 'Jean-Michel Bruitage',
        'prix' => '30'
      );

      $livre3 = array(
        'prime' => false,
        'name' => 'Comment faire regner la justice',
        'author' => 'Canard man',
        'prix' => '49'
      );

      $livre4 = array(
        'prime' => true,
        'name' => 'Le top des plus beaux monuments en photo',
        'author' => 'Gilbert Montagne',
        'prix' => '5'
      );

      $livre5 = array(
        'prime' => false,
        'name' => 'Construire un mur pour les nuls',
        'author' => 'Donald Trump',
        'prix' => '45'
      );

      $livre6 = array(
        'prime' => false,
        'name' => 'Devenir un sex-symbol',
        'author' => 'Franky Vincent',
        'prix' => '10'
      );

      $livre7 = array(
        'prime' => false,
        'name' => 'Classement des meilleurs saumons',
        'author' => 'Norvegian king',
        'prix' => '50'
      );

      $livre8 = array(
        'prime' => true,
        'name' => 'Top des meilleurs bonnets a grelot',
        'author' => 'Oui-oui',
        'prix' => '35'
      );

      $livre9 = array(
        'prime' => false,
        'name' => 'Comment choisir son gif animé',
        'author' => 'Manon Noblet',
        'prix' => '20'
      );

      $livre10 = array(
        'prime' => true,
        'name' => 'Apprendre a se coiffer',
        'author' => 'Zinedine Zidane',
        'prix' => '30'
      );

      $books = array($livre1, $livre2, $livre3, $livre4, $livre5, $livre6, $livre7, $livre8, $livre9, $livre10);

      echo '<div class= "container">'; 

      foreach ($books as $book) {
          echo '<div class= "livres">';
          echo 'Titre: ' .$book['name']. '<br />';
          echo 'Par: ' .$book['author']. '<br />';
          echo 'Prix: ' .$book['prix']. '€<br />';
        
        if ($book['prime']==true) {
          echo 'Ce livre est disponible en prime <br/>';
          
        }
        else {
          echo '<div class= "red">';
          echo 'Ce livre n\'est pas disponible en prime </div>';
        }

        if ($book['prix']>=25) {
          echo '<div class= "green">';
          echo 'Livraison gratuite <br />';
        }
          echo '</div>';
          echo '</div>';
      }

    ?>
  </body>
</html>      
