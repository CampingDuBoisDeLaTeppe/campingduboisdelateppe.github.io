<html><head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" href="style.css">
<title>Diaporama camping</title>
</head>
<body>
<DIV ID=ejs_photo_box></div>
		<script type="text/javascript">
		ejs_photo = new Array;
		<?php
		$a = 0;
		$handle = opendir("images/photosprivees/petites/4/"); 
		while (($file = readdir())!=false) { 
			clearstatcache(); 
			if($file!=".." && $file!=".") 
				{
				echo "ejs_photo[$a] = 'images/photosprivees/petites/4/$file';";
				$a++;
				}
			}
		closedir($handle); 
		?>	
		function ejs_aff_photos(num)
			{
			if(document.getElementById)
				{
				ejs_fin = "";
				if(num!=0)
					ejs_fin += "<div style='position:absolute;top:500px;left:0px'><A HREF=# onClick='ejs_aff_photos("+(num-1)+");return(false)'><img src='images/precedent.png' BORDER=0 width='50'/></A></div>";
				if(num!=(ejs_photo.length-1))
					ejs_fin += "<div style='position:absolute;top:500px;left:620px'><A HREF=# onClick='ejs_aff_photos("+(num+1)+");return(false)'><img src='images/suivant.png' BORDER=0 width='50'/></A></div>";
				document.getElementById("ejs_photo_box").innerHTML = "<div style='position:absolute;top:100px;left:50px'><IMG SRC='"+ejs_photo[num]+"' BORDER=0 height='500px'><BR>"+ejs_fin+"</div>";
				}
			}
		window.onload = new Function("ejs_aff_photos(0)")
		</script>
<div style='position:absolute;top:600px;left:350px'>
<!-- Begin Free-Buttons.org -->
	<style>#web-buttons-id6ukwq a{display:block;color:transparent;} #web-buttons-id6ukwq a:hover{background-position:left bottom;}a#web-buttons-id6ukwqa {display:none}</style>
	<table id="web-buttons-id6ukwq" width=0 cellpadding=0 cellspacing=0 border=0>
		<tr>
			<td style="padding-bottom:0px" title ="Retour">
				<a href="javascript:history.back()" title="Retour" style="background-image:url(images/retour-files/bt6ukwq2.png);width:89px;height:31px;display:block;"><br/></a>
			</td>
		</tr>
	</table>
<a id="web-buttons-id6ukwqa" href="http://free-buttons.org">Using Image As Button by Free-Buttons.org v2.0</a>
<!-- End Free-Buttons.org -->
</div>
</body>
</html>
