<?php

      function pl($tab)
      {
          $n = count($tab);
          $pln = strlen($tab[0]);
          for ($i = 0; $i < $n; ++$i) {
              if (strlen($tab[$i]) > $pln) {
                  $nom = $tab[$i];
                  $pln = strlen($tab[$i]);
              }
          }

          return $pln;

          return $nom;
      }
     function moy($tb)
     {
         $p = count($tb);

         $s = $tb[0];
         for ($i = 1; $i < $p; ++$i) {
             $s = $s + $tb[$i];
         }
         $mo = $s / $p;

         return $mo;
     }
     function plg($tab)
     {
         $x = count($tab);
         $y = $tab[0];
         for ($i = 0; $i < $x; ++$i) {
             if ($tab[$i] > $y) {
                 $y = $tab[$i];
             }
         }

         return $y;
     }
      $tableau = array('nom' => array('li', 'cheikh', 'line', 'diop'), 'age' => array(10, 70, 10));

    echo 'le nombre de caractere du nom le plus long est '.pl($tableau['nom'], $nom).'<br> </br>';
    echo 'la moyenne d age est '.moy($tableau['age']).'<br> </br>';
    echo 'l age max est '.plg($tableau['age'], $nom);
