<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
 <link rel="stylesheet" href="style.css">
<title>Photos de l'espace priv�</title> 
</head>
<body >
<h1> :: Espace priv� </h1>
<hr>

<?php
	include("../cecilegregoire.fr/fonctions/fonctions.php");
	
	if( test_log($_POST["passe"]) )
	{
	?>
	<table width=100%>
	  <tr height=300>
		   <td align="center">
				<p align="center">Repas champ�tre <br> � la mairie de Saint Franc</p>
				<a href="1.php" ><img width="200px" src="images/photosprivees/petites/1/DSCF3049.JPG"></a>
		   </td>
		   <td align="center">
				<p align="center">Le 10 ao�t : <br>f�te au camping pour f�ter <br>le mariage de C�cile et Gr�goire</p>
				<a href="2.php" ><img width="200px" src="images/photosprivees/petites/2/DSCF4543.JPG"></a>
		   </td>
		   <td align="center">
				<p align="center">Anniversaire de Ga�lle</p>
				<a href="3.php" ><img width="200px" src="images/photosprivees/petites/3/DSCF3318.JPG"></a>
		   </td>
		</tr>
		<tr>
		   <td>
				
		   </td>
		   <td align="center">
				<p align="center">Ap�ro � la grange</p>
				<a href="4.php" ><img width="200px" src="images/photosprivees/petites/4/DSCF3083.JPG"></a>
		   </td>
		   
		   <td align="center">
				
		   </td>
	  </tr>
	</table>
	<?php
	}
	else
	{
		?> 
		<h1>Mauvais mot de passe</h1> <a href="javascript:history.back()">retour</a>
		<?php
	}
	?>
</body>
</html>
