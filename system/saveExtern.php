<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  if (!isset($_SESSION['logged'])) {
    header('Location: margoulin.php');
    return;
  }
  if ($_SESSION['access'] < 9) {//Need to be ADMINISTRATOR
    return;
  }
?>


<?php

require_once('../config/sql.php');

if (isset($_POST["name"]))
{
  $name = $_POST["name"];
  $link = $_POST["link"];
  $description = $_POST["description"];

  if (strlen($name) < 3)  {
    echo "ERROR1";//Field too short
    return;
  }
  if (strlen($link) < 5)  {
    echo "ERROR1";//Field too short
    return;
  }
  if (strlen($description) < 5)  {
    echo "ERROR1";//Field too short
    return;
  }

  if (filter_var($link, FILTER_VALIDATE_URL) === FALSE) {
    echo "ERROR2";//Not valid url
    return;
  }

  $reponse = $bdd->prepare('INSERT INTO externtools(link, name, description) VALUES(:link, :name, :description)');
  $reponse->execute(array(
    'link' => $link,
    'name' => $name,
    'description' => $description
    ));
  echo "OK";
  $reponse->closeCursor();
  return;
}

?>
