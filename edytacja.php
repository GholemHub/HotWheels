
<h3>Edycja samochoda</h3>
<?php
	
$link = mysqli_connect("127.0.0.1", "root", "", "hotwheels") or die ("Nie można połšczyć się z bazš");

if(isset($_GET["product_id"]))
{  
    $zapytanie = "SELECT *  
                  FROM products 
                  where id=".$_GET["product_id"]."";        
    echo $zapytanie;
    
    $wyniki = mysqli_query($link, $zapytanie);
    if (!mysqli_num_rows($wyniki))
    {
        echo '<b>Brak takiego producta</b>.';
        exit;
    }
    
    $wiersz = mysqli_fetch_assoc($wyniki); 
    
   echo '
    <form action="index.php?id=6" method="POST">
    <input type="hidden" name="id_html" value="'.$_GET['product_id'].'"/>
    <table border="0" class="">
    <tr><td width="120"><b>Name:</b> </td><td width="200"><input type="text" name="name_html" value="'.$wiersz['name'].'" /></td></tr>
    <tr><td width="120"><b>Year:</b> </td><td width="200"><input type="text" name="year_html" value="'.$wiersz['year'].'"  /></td></tr>
    <tr><td width="120"><b>Serial:</b> </td><td width="200"><input type="text" name="serial_html" value="'.$wiersz['serial'].'"  /></td></tr>
    <tr><td width="120"><b>Cena:</b> </td><td width="200"><input type="text" name="price_html" value="'.$wiersz['price'].'"  /></td></tr>
       <tr><td></td><td><input type="submit" class="dodaj" name="wyslij" value="Zmiana danych" /></td></tr>
    </table>
    </form>
   ';         
   die();
}
?>

<?PHP
    $zapytanie="select * FROM products";
    $wynik = mysqli_query($link, $zapytanie);
?>
<table border="0" class="data">
<tr class="head">
<td><b>ID</b> </td>
<td width="110"><b>Model:</b> </td>
<td width="110"><b>Rok:</b> </td>
<td width="130"><b>Serial:</b> </td>
<td><b>Cena:</b> </td>
<td><b>Edytuj:</b></td>
</tr>
<?PHP
         while ($line = mysqli_fetch_array($wynik))
          {
             echo "<tr>
               <td align=\"left\">".$line['id']."</td>
                   <td align=\"left\">".$line['name']."</td>
                   <td align=\"left\">".$line['year']."</td>
                   <td align=\"left\">".$line['serial']."</td>
                   <td align=\"left\">".$line['price']."</td>
                   <td align=\"left\"><a class='dodaj' href=\"index.php?id=5&product_id=".$line['id']."\">Edytuj</a></td>
                   </tr>";
          }
mysqli_close($link);
?>
</table>