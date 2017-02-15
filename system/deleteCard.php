<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  if (!isset($_SESSION['logged'])) {
    header('Location: margoulin.php');
    return;
  }
  if ($_SESSION['access'] < 8) {//Need to be MODERATOR
    return;
  }
?>


<?php

require_once('../config/sql.php');

if (isset($_POST["name"]))
{
  $name = $_POST["name"];
  $reponse = $bdd->prepare('DELETE FROM cards WHERE name = ?');
  $reponse->execute(array(
      $name
    ));
  echo "OK";
  $reponse->closeCursor();
  return;
}

if (isset($_POST["id"]))
{
  $id = $_POST["id"];
  $reponse = $bdd->prepare('DELETE FROM cards WHERE id = ?');
  $reponse->execute(array(
      $id
    ));
  echo "OK";
  $reponse->closeCursor();
  return;
}

?>
