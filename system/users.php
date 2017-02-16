<?php
  $from = 1;
  if (isset($_POST["from"]))
    $from = intval($_POST["from"]);
  require_once('../config/lang.php');
  require_once('../config/sql.php');
  $reponse = $bdd->prepare('SELECT id, login FROM users WHERE id >= ? ORDER BY id ASC LIMIT 10');
  $reponse->execute(array($from));
  while ($donnees = $reponse->fetch()) { ?>
    <tr>
      <th><?php echo $donnees["id"] ?></th>
      <th class="sover"><?php echo $donnees["login"] ?><i class="fa fa-cog tableparam" aria-hidden="true"></i><i class="fa fa-pencil tableparam" aria-hidden="true"></i></th>
    </tr>
<?php
  }
?>
