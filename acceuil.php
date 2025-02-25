<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>page d'information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS.css" />
    <script src="main.js"></script>
</head>

    

    <body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <header>
            <P><h1>BOITE AUX LETTRES CONNECTEE</h1></P>
            
        </header>
        <span style="cursor:crosshair">
                      
                <nav class="btn-grad" >
                    <ul class="navbar">
                        <li><a href="  " >mise a jour </a></li>
                        <li><a href="ebauche.php">retour</a></li>
                             
                   </ul>
                </nav>
         <article>
         <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "boiteauxlettres"; 
 try
 {
     // On se connecte à MySQL
     $bdd = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8",$username,""); 
    // set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
   {
    die('Erreur : '.$e->getMessage());
   }

?>
            <form action="ebauche.php" method="post">
                <b>identifiant:</b>
                <input type="text" name="username" >
                <br>
                <b>mot de passe:</b>
                <input type="text" name="password" >
                <br>
                <input type="submit" value="Submit">
              </form> 
         </article >        
                      
        </span>
        <footer>       
        </footer>   
    </body>
 </html>
    