<?php
session_start();
$_SESSION['information'] = '';

if (!empty($_FILES))
{
    $imageNom = $_FILES['image']['name'];
    $imageType = $_FILES['image']['type'];
    $imageTaille = $_FILES['image']['size'];
    $imageTemporaire = $_FILES['image']['tmp_name'];
    $imageError = $_FILES['image']['error'];
} else
{
    echo 'Vous devez sélectionner un fichier';
}

$affichageErreurs = '';
$erreurs = 0;


if ($imageError == 0)
{
    if ($imageType != 'image/jpeg')
    {
        $affichageErreurs .= "Le fichier n'est pas au format jpeg ou extension invalide<br>";
        $erreurs++;
    }

    if (exif_imagetype($imageTemporaire) != IMAGETYPE_JPEG)
    {
        $affichageErreurs .= "Ce fichier n'est pas une image jpeg<br>";
        $erreurs++;
    }

} else
{
    $affichageErreurs = 'Impossible de télécharger le fichier, erreur de sélection<br>';
}

if ($imageTaille > 500000)
{
    $affichageErreurs .= 'Le fichier est trop volumineux, le poids maximal est de 500ko <br>';
    $erreurs++;
}

$nbFichiers = -2;

if ($erreurs == 0)
{

    $nbFichiers = -2;
    $dossier = opendir("../images/galerie");
    while ($fichier = readdir($dossier))
    {
        $nbFichiers++;
    }
    $image_num = $nbFichiers + 1;
    $imageNom = 'image' . $image_num . '.jpg';

    $destination = "../images/galerie/" . $imageNom;

    if (move_uploaded_file($imageTemporaire, $destination))
    {
        $erreurs = 0;
        $affichageErreurs = 'Le fichier est bien en ligne';
    } else
    {
        $affichageErreurs = 'Erreur de téléchargement<br>';
        $erreurs++;
    }
}

// On affiche les erreurs
if ($erreurs != 0)
{
    echo $affichageErreurs;
} else
{
    echo 'Téléchargement terminé avec succès<br>';
}


$_SESSION['information'] = $affichageErreurs;
header('location: ../galerie.php');

?>