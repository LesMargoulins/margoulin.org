<?php

if (!isset($_SESSION['logged'])) {
  header('Location: margoulin.php');
  return;
}

?>
