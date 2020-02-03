<p><b>Nastepujaca osoba zostanie dodana do bazy:</b></p>

<table border="1" class="data">
<tr><td width="120"><b>Model:</b> </td><td width="200"><? echo $_POST["name_html"];?></td></tr>
<tr><td width="120"><b>Rok:</b> </td><td width="200"><? echo $_POST["year_html"];?></td></tr>
<tr><td width="120"><b>Serial:</b> </td><td width="200"><? echo $_POST["serial_html"];?></td></tr>
<tr><td width="120"><b>Price:</b> </td><td width="200"><? echo $_POST["price_html"];?> </td></tr>
</table>

<br>

<?php
$link = mysqli_connect("127.0.0.1", "root", "", "hotwheels") or die ("Nie mozna polaczyc sie z baza");

if($link) echo "Polaczono z baza";
?>


<?php
//INSERT INTO `products` (`id`, `name`, `year`, `serial`, `price`) VALUES (NULL, 'Honda', '1991', '1186-hm', '12');
	$zapytanie = "INSERT INTO products(`name`, `year`, `serial`, `price`)
                     VALUES(
                     '".$_POST["name_html"]."',
                     '".$_POST["year_html"]."',
                     '".$_POST["serial_html"]."',
                     '".$_POST["price_html"]."'
                     )";                     

        echo "<pre>$zapytanie</pre>";


        $wynik = mysqli_query($link, $zapytanie);

        if($wynik)
        {
            echo "Dane zostaly zapisane.<br>";
        }
        else
        {    
              echo "Dane nie zostaly zapisane.<br>";
        }
mysqli_close($link);
?>
