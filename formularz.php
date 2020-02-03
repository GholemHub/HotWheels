
<h1>Formularz</h1>
 <form action="index.php?id=10" method="POST">
  <table>
	<tr>
		<td width="100">Model:</td>
		<td><input type=text name="name_html"></td>
	</tr>
	<tr>
		<td width-=100"> Year:</td>
		<td> <input type=text name="year_html"/></td>
	</tr>
 </table>
 
<p> Prosze o fakture do zamowienia: 
	<input type="checkbox" name="faktura" />
</p>
<p>
  <b>Zamawiamy tylko jeden produkt.</b><br><br>	
  Wybierz kolor:<br>
  <input type=radio name=color value="red_color" checked="checked"/>Red<br>
  <input type=radio name=color value="blue_color"/>Blue<br>
  <input type=radio name=color value="gold_color"/>Gold<br>
  <input type=radio name=color value="green_color"/>Green<br>
  </p>
  <p>
  <input type=submit class="dodaj" value="Wysylamy">
  </p>
  </form>