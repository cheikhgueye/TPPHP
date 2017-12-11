
   <!DOCTYPE html>
   <html lang="en">
   <head>
   <?php
   require_once 'verif.php';
    ?>    
   <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <link rel="stylesheet" href="log.css">
       <title>page admin</title>
   </head>
   <body>
       <h1> <?php echo $login; ?>  </h1>
       <nav class="admin">
           <ul id='admin'>
               <li><a href="foction.php">function</a></li>
               <li><a href="atelier.php">atelier de travail</a></li>
               <li><a href=""></a></li>
           </ul>
       </nav>
       <a href="sd.php"> <div class='at'>deconnection</div></a>

   </body>
   </html>