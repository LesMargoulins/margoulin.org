<?php

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "fr":
        break;
    default:
        $lang = "en";
        break;
}

?>
