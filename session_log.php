<?php
     $login = isset($_POST['nom']) ? $_POST['nom'] : '';
     $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
     $pro = isset($_POST['pro']) ? $_POST['pro'] : '';
     if ($login == '') {
         header('location:log.php?error=1');
     } elseif ($pass != 'admin' && $pass != 'user') {
         header('location:log.php?error=2&amppass='.$pass);
     } elseif ($pass == 'admin' && $pro == 'admin') {
         session_start();
         $_SESSION['nom'] = $login;
         $_SESSION['passs'] = $pass;
         $_SESSION['logged'] = true;
         header('location: ma_session1.php');
     } elseif ($pass == 'user' && $pro == 'visit') {
         session_start();
         $_SESSION['nom'] = $login;
         $_SESSION['pass'] = $pass;
         $_SESSION['logged'] = true;
         header('location: ma_session2.php');
     } elseif ($pass == 'user' && $pro == 'admin') {
         header('location: log.php?error=4');
     } elseif ($pass == 'admin' && $pro == 'user') {
         header('location: log.php?error=5');
     }
