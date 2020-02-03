<h3>Lista producji - wykaz</h3>

<?php
$baza = mysqli_connect("127.0.0.1", "root", "", "hotwheels") or die ("Nie mozna polaczyc sie z baza");
        
if($baza) echo "Polaczono z baza<br>";
    
$lista='select * from products';
$wynik = mysqli_query($baza,$lista);
?>

<p><b>W bazie sa nastepujacy samochody:</b></p>

<table border="0" class="data">
<tr class="head">
<td width="40"><b>ID</b></td>
<td width="90"><b>Name</b> </td>
<td width="90"><b>Rok:</b> </td>
<td width="120"><b>Serial:</b> </td>
<td width="80"><b>Cena:</b> </td>
</tr>
<?php
         while ($line = mysqli_fetch_array($wynik))
          {
             echo "<tr>
                   <td align=\"left\">".$line['id']."</td> 
                   <td align=\"left\">".$line['name']."</td>
                   <td align=\"left\">".$line['year']."</td>
                   <td align=\"left\">".$line['serial']."</td>
                   <td align=\"left\">".$line['price']."</td>
                   </tr>";
          }
mysqli_close($baza);
?>
</table>
