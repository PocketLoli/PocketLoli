<?php



$nick = array("alix","lotta","joann","niki","dicey");
$code = array("abc123","murder","architect","soak","alarm");

echo'
<form method="post"> 
Username<br>
<input type="text" name="nick" /> 
<br> 
Password<br>
<input type="password" name="code" /> 
<br>
<button type="submit">login</button>
</form>
';

if (in_array($_POST['nick'], $nick) && in_array($_POST['code'], $code)){
    echo "zajebici dziala";
    echo '<img src="annie.png"/>';
}
else{
    echo "Cos poszlo nie tak";
    echo '<img src="rammus.png"/>';
}
?>