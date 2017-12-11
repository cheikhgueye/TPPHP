<?php 
$error = isset($_GET['error']) ? $_GET['error'] : '';
$pass = isset($_GET['pass']) ? $_GET['pass'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="log.css">
</head>
<body>
    <h1>bienvenue sur schoolyard</h1>
    <form action="session_log.php" method="post">
        <fieldset>
           <legend>log in</legend> 
           <label for="pro">profil</label>
      <select name="pro" id="pro">
          <option value="admin">admin</option>
          <option value="visit">visiteur</option>
      </select> <br>
     <label for="nom">nom</label>   <input type="text" name="nom" id=""nom class="inputb">  <br>
     <label for="pass">mot de pass</label>   <input type="password" name="pass" id="pass" class="inputb">  <br>
    
     <input type="submit" value="connection" class="bou">
         
    <?php
    switch ($error) {
    case 1:
    echo 'le nom est oblogatoire';
    break;
    case 2:
    echo 'le mot de passs $pass est invalide';
    break;
    case 3:
    echo 'impossible';
    break;
    case 4: echo 'erreur profil';
    break;
    case 5: echo 'erreur profil';
    break;
}
    ?>

     </fieldset>
    </form>

    
</body>
</html>
