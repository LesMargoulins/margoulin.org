<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  if (!isset($_SESSION['logged'])) {
    header('Location: margoulin.php');
    return;
  }
?>

<select class="projectselector" id="projectselector" data-live-search="true">
<?php
  $reponse = $bdd->prepare('SELECT id, name FROM cards');
  $reponse->execute(array());
  while ($donnees = $reponse->fetch()) {
    echo "<option value='".$donnees["id"]."'>".$donnees["name"]."</option>";
  }
  $reponse->closeCursor();
?>
</select>
