<?php
  session_start();
  if (!isset($_SESSION["logged"])) {
    return;
  }
  $from = 1;
  if (isset($_POST["from"]))
    $from = intval($_POST["from"]);
  require_once('../config/lang.php');
  require_once('../config/sql.php');
  $reponse = $bdd->prepare('SELECT name, link, description FROM externtools');
  $reponse->execute(array($from));
  while ($donnees = $reponse->fetch()) { ?>
    <tr>
      <th><a href='<?php echo $donnees["link"]; ?>'><?php echo $donnees["name"]; ?></a></th>
      <th>
        <?php echo $donnees["description"]; ?>
      </th>
    </tr>
<?php
  }
?>
