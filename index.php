<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html>

<head>
  <meta http-equiv="Content-type" content="text/html; charset=iso-8859-2">
  <title>Środowisko pracy informatyka</title>
<link href="css/styl.css" rel="stylesheet" type="text/css">
</head>


<body>

<div class="img_container">
	<!--<img src="img/hot-wheels.png">-->
</div>

<table class="glowna" width="900" align="center">
	<tr>
		<td colspan="2" class="naglowek">
		
		<!-- Top menu -->
		<table cellspacing="0" width="100%" border="0">
			<tr>			
				<td class="menu_t"><a class="menu_l" href="index.php?id=1" align="center">Glowna</a></td>
				<td class="menu_t"><a class="menu_l" href="index.php?id=2" align="center">Wylistowac</a></td>
				<td class="menu_t"><a class="menu_l" href="index.php?id=3" align="center">Dodac</a></td>
				<td class="menu_t"><a class="menu_l" href="index.php?id=5" align="center">Edytowac</a></td>
				<td class="menu_t"><a class="menu_l" href="index.php?id=7" align="center">Usunic</a></td>
				<td class="menu_t"><a class="menu_l" href="index.php?id=9" align="center">Formularz</a></td>
			</tr>
		</table>
			
		</td>
	</tr>
	<tr>
		<td valign="top" class="tresc">
			<b><p style="color:#FF0000";></p></b>
<?PHP
if(empty($_GET["id"])) $_GET["id"]=1;
if($_GET["id"]==1) include("main.php");
if($_GET["id"]==2) include("wykaz.php");
if($_GET["id"]==3) include("dodaj.php");
if($_GET["id"]==4) include("dodaj_po.php");
if($_GET["id"]==5) include("edytacja.php");
if($_GET["id"]==6) include("edytacja_po.php");
if($_GET["id"]==9) include("formularz.php");
if($_GET["id"]==10) include("formularz_po.php");
if($_GET["id"]==7) include("delete.php");
if($_GET["id"]==8) include("delete_po.php");


 ?>
		</td>
	</tr>
	<tr>
		<td colspan="2" height="50" bgcolor="#F9CA01">Segeda Oleksandr II grupa</td>
	</tr>
</table>
</body>
</html>