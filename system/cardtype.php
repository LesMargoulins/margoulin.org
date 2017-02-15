<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  if (!isset($_SESSION['logged'])) {
    header('Location: margoulin.php');
    return;
  }
?>

<select class="cardselector" id="cardselector" data-live-search="true">
<?php
  $reponse = $bdd->prepare('SELECT id, name FROM type');
  $reponse->execute(array());
  while ($donnees = $reponse->fetch()) {
    echo "<option value='".$donnees["id"]."'>".$donnees["name"]."</option>";
  }
  $reponse->closeCursor();
?>
</select>
