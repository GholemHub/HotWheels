<h2>usunienie samochoda</h2>
<?PHP
$link = mysqli_connect("127.0.0.1", "root", "", "hotwheels") or die ("Nie można połšczyć się z bazš");

if(isset($_POST['wyslij']))
{

   $zapytanie = "DELETE FROM `products` WHERE `id` = ".$_POST["id_html"];                      
        echo "<pre>$zapytanie</pre>";


        $wynik = mysqli_query($link, $zapytanie);

        if($wynik)
        {
            echo "<b>Dane usuniete.</b><br>";
        }
        else
        {    
              echo "<b>Dane nie zostaly usuniente.</b><br>";
        }    
		 echo '
    <form action="index.php?id=7" method="POST">
		<input type="submit" name="wyslij" class ="dodaj" value="Usuń">
		</form>
		';
}
mysqli_close($link);
?>