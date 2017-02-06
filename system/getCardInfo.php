<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  if (!isset($_SESSION['logged'])) {
    header('Location: login.php');
    return;
  }
?>


<?php

require_once('../config/sql.php');

if (isset($_POST["id"]))
{
  $reponse = $bdd->prepare('SELECT data FROM cards WHERE id = ?');
  $reponse->execute(array($_POST["id"]));
  echo $reponse->fetch()['data'];
  $reponse->closeCursor();
  return;
}

?>
