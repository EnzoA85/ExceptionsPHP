<?php
class Gaston
{
    function TrierCourrierEnRetard(int $nbLettres) 
    {
        echo"<strong> Gaston </strong> - Quoi,  ".$nbLettres." lettre(s) à trier ? ";
        try { 
            echo"OK, OK, je vais m'y mettre... <br/>";
            if ($nbLettres > 3) {
                throw new Exception("Beaucoup trop de lettres...");
            } 
            echo "<br/><I> Une heure plus tard </I><br/><br/>";
            echo "<strong> Gaston </strong> - Ouf, j'ai fini. <br/><br/>";
        } catch(Exception$e) {
            echo"<br/><div class ='alert alert-danger'> <strong> Gaston </strong> - M'enfin ! ".$e->getMessage()."</div>";
        } 
        echo"<div class ='alert alert-success'> <strong> Gaston </strong> - Après tout ce travail, une sieste s'impose.</div>";
    }

    function FaireSignerContrats()
    {
        try {
            echo "<strong> Gaston </strong> - Encore ces contrats ? Ok, je les imprime... <br/>";
            $this->ImprimerContrats();
            echo "A présent une petite signature...";
            $this->AjouterSignature();
            echo "Fantasio, les contrats sont signés !";
        } catch (Exception $e) {
            echo"<div class = 'alert alert-danger'><strong> Gaston </strong> -  M'enfin ! ".$e->getMessage()."</div>";
        }
    }

    function AjouterSignature() 
    {
        echo"Signez ici , M'sieur Demesmaeker.";
    }

    function ImprimerContrats()
    {
        echo "<strong> Gaston </strong> - D'abord, mettre en route l'imprimante.<br/>";
        $this->AllumerImprimante();
        echo"Voilà, c'est fait !";
    }

    function AllumerImprimante()
    {
        echo"<strong> Gaston </strong> - Voyons comment allumer cette machine...";
        throw new Exception("Mais qui a démonté tout l'intérieur ?");
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
<img src="https://upload.wikimedia.org/wikipedia/fr/2/2a/Logo-laposte.png" width="10%">
<body>
    <div class="alert alert-warning">
        <?php
            echo " <strong> Chef </strong> - Debout Gaston ! Il faut trier le courrier ! <br/>";
        ?>
    </div>
    <?php
        $gaston = new Gaston();
        $gaston->TrierCourrierEnRetard(3);
    ?>

    <div class = "alert alert-warning">
        <?php
            echo"<strong> Chef </strong> - Gaston, Mr.Demesmaeker arrive, faites vite!";
        ?>
    </div>
    <?php
        $gaston = new Gaston();
        $gaston->FaireSignerContrats();
    ?>
</body>
</html>