<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  if (!isset($_SESSION['logged'])) {
    header('Location: login.php');
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
  $type = $_POST["type"];
  $data = $_POST["data"];
  $aValid = array('-', '_');
  $hex = array('\n', ' ', chr(10), '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
        'A', 'B', 'C', 'D', 'E', 'F', 'a', 'b', 'c', 'd', 'e', 'f');
  $num = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

  if (strlen(str_replace($num, '', $type)) > 0 || strlen($type) < 1) {
    echo "ERROR6";
    return;
  }

  if (strlen($name) < 5)  {
    echo "ERROR4";
    return;
  }
  else if (strlen($name) > 50) {
    echo "ERROR4";
    return;
  }

  if (!ctype_alnum(str_replace($aValid, '', $name)) > 0) {
    echo "ERROR3";
    return;
  }

  if (strlen(str_replace($hex, '', $data)) > 0) {
    echo "ERROR5";
    return;
  }

  if (strlen($data) < 143 || strlen($data) > 144) {
    echo "ERROR2";
    return;
  }

  $reponse = $bdd->prepare('SELECT id FROM cards WHERE name = ?');
  $reponse->execute(array($name));
  if ($reponse->fetch()) {
    echo "ERROR1";
    $reponse->closeCursor();
    return;
  }
  $reponse->closeCursor();
  $reponse = $bdd->prepare('SELECT name FROM cards WHERE data = ?');
  $reponse->execute(array($data));
  if ($result = $reponse->fetch()) {
    echo "ERROR7".$result["name"];
    $reponse->closeCursor();
    return;
  }
  $reponse->closeCursor();
  $reponse = $bdd->prepare('INSERT INTO cards(name, data, type) VALUES(:name, :data, :type)');
  $reponse->execute(array(
    'name' => $name,
    'data' => $data,
    'type' => $type
    ));
  echo "OK";
  $reponse->closeCursor();
  return;
}

?>
