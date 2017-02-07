<!doctype html>

<?php
  /** Configuration settings **/
  $label = "Index";
  $title = "Margoulin";
  $description = "Dashboard";
  require_once('config/load.php');
  /******* END SETTINGS *******/
?>

<html lang="<? echo $LANG; ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="author" content="<?php echo $author; ?>">

  <?php require_once('parts/css.php'); /* CSS */ ?>

</head>
<body>

  <div id="wrapper">

    <?php require_once("parts/sidebar.php"); /* SIDEBAR */ ?>
    <?php require_once("parts/navbar.php"); /* NAVBAR */ ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                  <span style="opacity: 1;"><h1 id="title"><b>Margoulin <span style='color: #EE7700'>Dashboard</span></b></h1></span>
                  <? if ($description != "") { ?>
                  <h4 style="margin-left: 2px;"><?php echo $description; ?></br></h4>
                  <? } ?>
                  <hr style="margin-top: 0px;"/>
                </div>
                <div class="col-lg-6">
                  <p>Bonjour <b><? echo $_SESSION['logged']; ?></b>.</p></br>
                  <p>
                    <b>margoulin</b> <i>\maʁ.ɡu.lɛ̃\</i> masculin</br></br>

                    <p><b>1.</b> Petit détaillant, petit patron.</br></p>
                    <p><b>2.</b> Marchand peu scrupuleux.</br>
                      <div id="tab"><i>Auteur de sujets sur Barbara Hendricks ou Alain Tanner, il s’était signalé en 1996 avec Un marchand, des artistes et des collectionneurs, autre docu dans lequel toute la corporation - à commencer par le galeriste parisien Pierre Nahon - passait pour une bande de margoulins vénaux, cyniques et fats. — (Guy Ribes, pipeau, l’artiste ! de Gilles Renault pour Libération le 1er mars 2016)</i></div></br></p>
                    <p><b>3.</b> Petit trafiquant indélicat et sans envergure, individu de mauvaise foi.</br></p>
                    <p><b>4.</b> Individu incompétent et peu scrupuleux en affaires.</br>
                      <div id="tab"><i>Il vivait dans la hantise permanente d'un coup du sort - faillite bancaire, écroulement du marché immobilier, filouterie d'un margoulin - qui réduirait à néant la pelote qu'il avait patiemment amassée. — (Antoine Bello, Mateo, 2013 ; collection Blanche, p. 138)</i></div></br></p>
                  </p>

                </div>
                <div class="col-lg-6">
                  <div class="panel-group">
                    <?php require_once('system/news.php'); /* SCRIPTS */ ?>
                  </div>
              </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <?php require_once('parts/content.php'); /* SCRIPTS */ ?>

  </div>

  <?php require_once('parts/scripts.php'); /* SCRIPTS */ ?>

</body>
</html>
