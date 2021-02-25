<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/nav.css">
    <script src="https://kit.fontawesome.com/f03e221f59.js" crossorigin="anonymous"></script>
    <title>Occa'z</title>

</head>
<body>
<img class='logo'src="./img/occazlogo.png" alt="" srcset="">
<nav>
    <div class="conteneur-nav">
        <label for="mobile"><i class="fas fa-bars"></i></label>
        <input type="checkbox" id="mobile" role='button'>
        
        <ul>
            <li><a href="#">Accueil</a></li>
            <li class='deroulant'><a href="#">Liste Annonce</a>
                <ul class="sous">
                    <li><a href="#">Véhicules</a></li>
                    <li><a href="./indexinfo.php">Informatiques</a></li>
                    <li><a href="#">Touquet</a></li>
                </ul>
            </li>
            <li><button class="deposer"><a class="annonce"href="#">Deposer une annonce</a></button></li>
        </ul>
    </div>
</nav>
    
</body>
</html>