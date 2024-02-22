<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<title>Accueil</title> 
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	$pb='0';
	//-----------------------------------------------
    //TEST DES VARIABLES
    //-----------------------------------------------
	if($_POST["mail"] == "e-mail")
	{
		?>
		<td>
		<p>L'adresse mail est erronnée.</p>
		</td>
		<?php
		$pb++;
	}
	
	if($_POST["prenom"] == "Prénom")
	{
		?>
		<td>
		<p>Le prénom est erronné.</p>
		</td>
		<?php
		$pb++;
	}
	
	if($_POST["nom"] == "Nom")
	{
		?>
		<td>
		<p>Le nom est erronné.</p>
		</td>
		<?php
		$pb++;
	}
	
	if($_POST["message"] == "Message")
	{
		?>
		<td>
		<p>Le message est erronné.</p>
		</td>
		<?php
		$pb++;
	}

	//-----------------------------------------------
    //DECLARE LES VARIABLES
    //-----------------------------------------------
	$destinataire='campingcurtet@hotmail.fr';
    $email_expediteur=$_POST["mail"];
    $message_texte=$_POST["message"];
	$objet=$_POST["objet"];
    

    //-----------------------------------------------
    //GENERE LA FRONTIERE DU MAIL ENTRE TEXTE ET HTML
    //-----------------------------------------------

    $frontiere = '-----=' . md5(uniqid(mt_rand()));

    //-----------------------------------------------
    //HEADERS DU MAIL
    //-----------------------------------------------

    $headers = 'From: "'.$_POST["prenom"].' '.$_POST["nom"].'" <'.$email_expediteur.'>'."\n";
    $headers .= 'MIME-Version: 1.0'."\n";
    $headers .= 'Content-Type: multipart/mixed; boundary="'.$frontiere.'"';

    //-----------------------------------------------
    //MESSAGE TEXTE
    //-----------------------------------------------
    $message = 'This is a multi-part message in MIME format.'."\n\n";

    $message .= '--'.$frontiere."\n";
    $message .= 'Content-Type: text/plain; charset="iso-8859-1"'."\n";
    $message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
    $message .= $message_texte."\n\n";
	 
	
if($pb == '0')
{
	ini_set('SMTP','smtp.orange.fr');
	ini_set("maximum_execution_time", '0');
	if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
	{?>
		</tr><tr>
		<td colspan="2">
			<center>
			<h2>Nous vous remercions pour votre message !</h2>
			<a href="javascript:history.go(-1)">Retour à l'envoi d'un message.</a>
			</center>
		</td>
	<?php
	}
	else // Non envoyé
	{
	?>
		</tr><tr>
		<td colspan="2">
			<center>
			<h2>Votre message n'a pas pu être envoyé !</h2>
			<a href="javascript:history.go(-1)">Retour à l'envoi d'un message.</a>
			</center>
		</td>
	<?php
	}
}
else
{
?>
		</tr><tr>
		<td colspan="<?php echo ++$pb ?>">
			<center>
			<h2>Votre message n'a pas pu être envoyé !</h2>
			<a href="javascript:history.go(-1)">Retour à l'envoi d'un message.</a>
			</center>
		</td>
	<?php
}
?>
</tr>
</table>
</body>
</html>