<?php
class Gaston
{
    function TrierCourrierEnRetard(int $nbLettres) 
    {
        echo" <strong> Gaston </strong> - Quoi,  ".$nbLettres." lettre(s) à trier ? ";
        try { 
            echo"OK, OK, je vais m'y mettre... <br/>";
            if ($nbLettres > 3) {
                throw new Exception("Beaucoup trop de lettres...");
            } 
            echo "<br/><I> Une heure plus tard </I><br/><br/>";
            echo " <strong> Gaston </strong> - Ouf, j'ai fini. <br/><br/>";
        } catch(Exception$e) {
            echo"<div class ='alert alert-danger'> M'enfin ! ".$e->getMessage()."</div>";
        } 
        echo"<div class ='alert alert-success'> Après tout ce travail, une sieste s'impose.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Gaston</title>
</head>
<h1>La Poste</h1>
<body>
    <div class="alert alert-warning">
        <?php
            echo " <strong> Chef </strong> - Debout Gaston ! Il faut trier le courrier ! <br/>";
            $gaston = new Gaston();
            $gaston->TrierCourrierEnRetard(3);
        ?>
    </div>
</body>
</html>