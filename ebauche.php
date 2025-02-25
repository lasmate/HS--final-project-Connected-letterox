<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>page d'information</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" media="screen" href="CSS.css" />
            <script src="gradient.js"></script>
        </head>


    <body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <header>
            <P ><h1>BOITE AUX LETTRES CONNECTEE</h1></P>
        </header>
      <span style="cursor:crosshair">
            <?php $page = $_SERVER['PHP_SELF'];
            $sec = "30";
            header("Refresh: $sec; url=$page");     
            ?>
                <nav class="nav" class="navbar.collapse">
                    <ul class="navbar">
                        <li><a href="cleaner.php" >vider la base</a></li>
                        <li><a href="acceuil.php" >acceuil</a></li>        
                   </ul>
                </nav>
                
        <article>
        
        </table>
            <?php
                
                try
                {
                // On se connecte à MySQL
                    $bdd = new PDO('mysql:host=localhost;dbname=boiteauxlettres;charset=utf8', 'root', '');
                }
                catch(Exception $e)
                {
                // En cas d'erreur, on affiche un message et on arrête tout
                        die('Erreur : '.$e->getMessage());
                }
                // Si tout va bien, on peut continuer
                // On récupère tout le contenu de la table 
                $reponse = $bdd->query('SELECT *FROM lettres ORDER BY `id` DESC LIMIT 10');
    
                while ($donnees = $reponse->fetch())
                { 
            ?>
                <table>
                <thead>
                    <tr>
                    <th> <img class="logo" src="img/Date.png" alt="LOGODATE" height="90" width="110"></th>
                    <th> <img class="logo" src="img/Porte.jpg"  alt="PORTE" height="90" width="110"></th>
                    <th> <img class="logo" src="img/Trappe.jpg"  alt="TRAPPE" height="90" width="110"></th>
                    <th> <img class="logo" src="img/Balance.jpg"  alt="POID"height="90" width="110"></th>
                    <th> <img class="logo" src="img/Batterie.jpg"  alt="BATTERIE" height="90" width="110"></th>
                    
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                    <td> <p class="pp"><b><?php echo $donnees['Hlettres']; ?><br></b></p></td>
                    <td> <p class="pp"><b><?php echo $donnees['Porte']; ?><br></b> ‌‌ ‌‌  ‌ ‌ </p></td>
                    <td> <p class="pp"><b><?php echo $donnees['Trappe']; ?><br></b> ‌‌ ‌‌  ‌ ‌ </p></td>
                    <td> <p class="pp"><b><?php echo $donnees['Plettres']; ?><br></b> ‌‌ ‌‌  ‌ ‌ </p></td>
                    <td> <p class="pp"><b><?php echo $donnees['Ubat']; ?><br></b> ‌‌ ‌‌  ‌ ‌ </p></td>
                    </tr>
                </tbody>
                <tfoot>
                
                </tfoot>
                </table>
            <?php
                }
                $reponse->closeCursor(); // Termine le traitement de la requête*
            ?>

         </article >     
        
      </span>
        <footer>       
        </footer>   
    </body>
 </html>
  