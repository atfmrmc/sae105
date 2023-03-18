<?php
session_start();
$_SESSION['information'] = '';

if (count($_POST) == 0)
{
	header("location: /contact.php");
}

$nom = $_POST["nom"];
$subjectinfo = $_POST['typeContact'];
$prenom = $_POST["prenom"];
$message = $_POST["message"];
$email = $_POST["email"];

$prenom = ucwords($prenom);
$nom = ucwords($nom);

$subject = $subjectinfo . " : Confirmation d'envoie de message - SAE105 ";
$headers = [];
$headers['From'] = 'mmi22c13@mmi-troyes.fr';
$headers['Reply-to'] = 'no-reply@mmi-troyes.fr';
$headers['X-Mailer'] = 'PHP/' . phpversion();
$headers['MIME-Version'] = '1.0';
$headers['content-type'] = 'text/html; charset=utf-8';

if (mail("mmi22c13@mmi-troyes.fr", $subject, $message, $headers))
{
	echo "Mail de contact OK";
} else
{
	echo "Erreur d'envoi du mail de contact";
}

$subject = "SAE105 : Nous avons bien pris en compte votre demande " . $prenom . " " . $nom . " au sujet de " . $subjectinfo;
$headers = [];
$headers['From'] = 'mmi22c13@mmi-troyes.fr';
$headers['Reply-to'] = 'no-reply@mmi-troyes.fr';
$headers['X-Mailer'] = 'PHP/' . phpversion();
$emailDest = $email;

if (mail($email, $subject, $message, $headers))
{
	echo "Mail de contact OK";
} else
{
	echo "Erreur d'envoi du mail de contact";
}

if (!empty($_POST['email']))
{

	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$nom = $_POST['nom'];
	} else
	{
		header('location: /contact.php');
	}

} else
{
	header('location: /contact.php');
}

$affichageRetour = ''; // Lignes à ajouter au début des vérifications
$erreurs = 0;

if (!empty($_POST['nom']))
{
	$nom = $_POST['nom'];
} else
{
	$affichageRetour .= '<span>*</span>Champ <span>Nom</span> obligatoire<br>';
	$erreurs++;
}

if (!empty($_POST['email']))
{

	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$email = $_POST['email'];
	} else
	{
		$affichageRetour .= 'Champ email renseigné invalide<br>';
		$erreurs++;
	}

} else
{
	$affichageRetour .= '<span>*</span>Champ <span>Email</span> obligatoire<br>';
	$erreurs++;
}

if (!empty($_POST['typeContact']))
{
	$formType = $_POST['typeContact'];
} else
{
	if (isset($_POST['typeContact']))
	{
		$formType = $_POST['typeContact'];
	} else
	{
		$formType = '';
	}

	$affichageRetour .= '<span>*</span>Champ <span>Type</span> obligatoire<br>';
	$erreurs++;
}


if (!empty($_POST['sujet']))
{
	$formSujet = $_POST['sujet'];
} else
{
	$affichageRetour .= '<span>*</span>Champ <span>Sujet</span> obligatoire<br>';
	$erreurs++;
}

if (!empty($_POST['message']))
{
	$formMessage = $_POST['message'];
} else
{
	$affichageRetour .= '<span>*</span>Champ <span>Message</span> obligatoire<br>';
	$erreurs++;
}

if ($erreurs == 0)
{
	if (mail($emailDest, $subject, $message, $headers))
	{
		$erreurs = 0;
		header("location: /contact.php");
	} else
	{
		$erreurs++;
	}

	$affichageRetour = 'Votre demande a bien été envoyée';

	if ($erreurs != 0)
	{
		$affichageRetour = 'Echec de l\'envoi du message';
	}
}

$_SESSION['information'] = $affichageRetour;
header('location: ../contact.php');

?>