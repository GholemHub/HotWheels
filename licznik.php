<?php
if(file_exists("counter.n")) /* sprawdza, czy plik istnieje */
{ $file=fopen("counter.n", "r"); /* otwiera plik */

$ile=fgets($file, 100); /* odczytuje warto?æ */

fclose($file); /* zamyka plik */

$ile++; /* zwiêksza warto?æ o 1 */
$file=fopen("counter.n", "w");
fwrite($file, $ile); 
fclose($file);
}
else
{
$ile=1; /* je?li plik nie istnieje, wy?wietli siê 1 */

$file=fopen("counter.n", "w"); /* otwiera plik do zapisu */

fwrite($file, $ile); /* zapisuje warto?æ */

fclose($file); /* zamyka plik */
}
echo "Strone wyswietlono ";
echo($ile);  /* wy?wietla warto?æ */
echo " razy"; 

?>
