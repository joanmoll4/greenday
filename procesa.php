<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Mostra el formulari</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.19.1" />
	
</head>

<body>
<h1>Recepció de paràmetres</h1>
<p>Aquesta pàgina mostra tots els paràmetres enviats des de un formulari
</p>
<p>&nbsp;</p>
<?php
$norebut=true;
if (count($_POST)>0)
{
	$norebut=false;
	echo "<h2>Paràmetres passats per POST</h2>";
	foreach($_POST as $nombre_campo => $valor){
   $asignacion = "\$" . $nombre_campo . "='" . $valor . "';";
   eval($asignacion);
   echo $nombre_campo." = ".$asignacion."<br/>";
}//fi del foreach
} 
if (count($_GET)>0)
{
	$norebut=false;
echo "<h2>Paràmetres passats per GET</h2>";
foreach($_GET as $nombre_campo => $valor){
   $asignacion = "\$" . $nombre_campo . "='" . $valor . "';";
   eval($asignacion);
   echo $nombre_campo." = ".$valor."<br/>";
} //fi del foreach
}

if ($norebut) echo "<p>Error: no s'ha rebut res</p>";
?>
</body>

</html>
