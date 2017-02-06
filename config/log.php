<?php

if (!isset($_SESSION['logged'])) {
  header('Location: login.php?redirect=true');
  return;
}

?>
