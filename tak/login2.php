<?php

echo'
<form method="post"> 
Login<br>
<input type="text" name="log" /> 
<br> 
Haslo<br>
<input type="password" name="haslo" /> 
<br>
Nick<input type="text" name="Nick"/>
<br>
Nazwisko<input type="text" name="Nazwisko"/>
<br>
Kraj<input type="text" name="Kraj"/>
<br>
<input type="submit" name="result" value="zaloguj">
</form>
';

if (isset($_POST["result"]){
    $log = $_POST["log"];
    $haslo = $_POST["haslo"];
    $Nick = $_POST["Nick"];
    $Nazwisko = $_POST["Nazwisko"];
    $Kraj = $_POST["Kraj"];
    if($log == 'Barkkull21' && $haslo == 'loliparadise')    
{
    echo("Pomyślnie zalogowano!<br>");
    echo("Imię: ".$nick."<br>Nazwisko: ".$Nazwisko. "<br>Kraj: ".$Kraj);
}
}
else{
    echo "Błędne dane!";
}
?>