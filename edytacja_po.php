<h2>Edycja prodyctu </h2>
<?PHP
$link = mysqli_connect("127.0.0.1", "root", "", "hotwheels") or die ("Nie można połšczyć się z bazš");

if(isset($_POST['wyslij']))
{

   $zapytanie = "UPDATE products SET
                     name = '".$_POST["name_html"]."',
                     year = '".$_POST["year_html"]."',
                     serial = '".$_POST["serial_html"]."',
                     price = '".$_POST["price_html"]."'
                     WHERE id=".$_POST["id_html"];

        echo "<pre>$zapytanie</pre>";


        $wynik = mysqli_query($link, $zapytanie);

        if($wynik)
        {
            echo "<b>Dane zostaly zapisane.</b><br>";
        }
        else
        {    
              echo "<b>Dane nie zostaly zapisane.</b><br>";
        }    
}
mysqli_close($link);
?>