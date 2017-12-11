<?php

     /*$phrase = 'je me nom kheuche';
       echo ucwords($phrase);*/
       // html entities;
       //ergi;ereg
       //nl2br pour remplacer \n par br
       //ereg replace

       $tab = array('cheikh' => array('kheuche', 'saint_louis', 20), 'fa' => array('fatou', 'dk', 21));
       foreach ($tab as  $cle => $value) {
           /*    echo $cle.'<br></br>';
               foreach ($value as $n => $val) {*/

           echo   '<br></br>';
           for ($i = 0; $i < 3; ++$i) {
               echo $cle.' '.$value[$i].' ';
           }
       }
