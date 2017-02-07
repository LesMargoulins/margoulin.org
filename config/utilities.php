<?php

function makeSafe($str)
{
  $str = htmlentities(htmlspecialchars($str), ENT_QUOTES, "UTF-8");
  return ($str);
}

?>
