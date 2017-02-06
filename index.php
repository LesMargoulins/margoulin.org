<!doctype html>

<?php
  /** Configuration settings **/
  $label = "Index";
  $title = "Margoulin";
  $description = "Dashboard page";
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
                  <p>Hello <b><? echo $_SESSION['logged']; ?></b>.</p></br>
                  Current card &nbsp;&nbsp;&nbsp;&nbsp;<?php require_once('system/projectsSelect.php'); /* SCRIPTS */ ?>
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
