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
  $reponse = $bdd->prepare('SELECT id, login, team FROM users WHERE id >= ? ORDER BY id ASC LIMIT 10');
  $reponse->execute(array($from));
  while ($donnees = $reponse->fetch()) { ?>
    <tr>
      <th><?php echo $donnees["id"] ?></th>
      <th class="sover">
        <i class="fa fa-circle" style='<?php
          if ($donnees["team"] == 1 || $donnees["team"] == 2)//Super Admin, Admin
            echo "color: rgb(94, 213, 217);";
          else if ($donnees["team"] == 3)//Moderator
            echo "color: rgb(94, 217, 140);";
          else if ($donnees["team"] == 4)//visitor
            echo "color: rgb(228, 227, 140);";
          else if ($donnees["team"] == 6)//Banned
            echo "color: rgb(224, 50, 50);";
          else
            echo "color: rgb(50, 50, 50);";
        ?>'></i>
        <span class="thover"><?php echo $donnees["login"] ?></span>
        <?php if ($_SESSION["access"] > 8) { ?>
        <i class="fa fa-pencil tableparam editparam" aria-hidden="true"></i>
        <?php } ?>
        <i class="fa fa-comment tableparam msgparam" aria-hidden="true"></i></th>
    </tr>
<?php
  }
?>
