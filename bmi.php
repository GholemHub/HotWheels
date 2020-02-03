<?php
$bmi = $_POST["waga"]/($_POST["wzrost"]*$_POST["wzrost"]);
echo "Twoje BMI wynosi: ";
echo "$bmi";
if($bmi<18.49) echo "<br/> Masz niedowage";
if($bmi>=18.5 && $bmi < 24.99) "<br/> Masz prowidlowo wage";
if($bmi>=25) echo "<br\> Masz nadwage";
?>