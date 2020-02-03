<?php
	$fakt = 'NIE';
	if(isset($_POST['faktura'])){
		if($_POST['faktura'] == 'on')
		{
			$fakt = 'TAK';
		}
	}
?>
<h1>Wprowadzono dane</h1>
<p>Model: <?php echo $_POST['name_html'] ?></p>
<p>Year: <?php echo $_POST['year_html'] ?></p>
<p>Faktura: <?php echo $fakt ?> </p>
<p>Kolor: <?php echo $_POST['color'] ?></p>

<?php
$str = "Model = " . $_POST['name_html'] . "
Year = ". $_POST['year_html']."
Faktura = ".$fakt."
Kolor: ".$_POST['color']." 
";

mail("gnolazena@gmail.com", "hotWheels", "Formularz");

?>