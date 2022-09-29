<?php
//echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
$browser = get_browser(null, true);
echo "<br>";
//print_r($browser);
echo("El navegador es ==> ".$browser["browser"]);

