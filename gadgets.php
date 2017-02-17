<!DOCTYPE html>

<?php
  /** Configuration settings **/
  $label = "Gadgets";
  $title = "Gadgets";
  $description = "All margoulin's gadgets";
  $author = "Anonymous";
  $access = 0;
  require_once('config/load.php');
  /******* END SETTINGS *******/
?>

<html lang="<?php echo $LANG; ?>">
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
                  <h1 id="title"><b><?php echo $title; ?></b></h1>
                  <?php if ($description != "") { ?>
                  <h4 style="margin-left: 2px;"><?php echo $description; ?><br /></h4>
                  <?php } ?>
                  <hr style="margin-top: 0px;"/>
                </div>
                <div class="col-lg-2 module">
                  <a href="editor.php" class="thumbnail modulethumb">
                    Card Editor
                    <i class="fa fa-pencil"></i>
                  </a>
                </div>
                <div class="col-lg-2 module">
                  <a href="extern.php" class="thumbnail modulethumb">
                    Extern Tools
                    <i class="fa fa-external-link-square"></i>
                  </a>
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
