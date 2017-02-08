<!doctype html>

<?php
  /** Configuration settings **/
  $label = "Editor";
  $title = "Card Editor";
  $description = "Margoulin's NFC card editor";
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
                    <h4 style="margin-left: 2px;"><?php echo $description; ?></br></h4>
                  <?php } ?>
                  <hr style="margin-top: 0px;"/>
                </div>
                <div class="col-lg-6">
                  <form onsubmit="return false;">
                    <div class="form-group">
                      <label for="taginfo">Card's dump</label>
                      <textarea class="lined" type="textarea" id="taginfo" rows="16"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="cardname">Card's name </label>
                      <input class="form-control" type="text" id="cardname"></input>
                    </div>
                    <div class="form-group">
                      <?php require_once('system/cardtype.php'); /* SCRIPTS */ ?> <a href="http://www.rtm.fr/guide-voyageur/acheter/deplacements-occasionnels" target="_blank">Infos</a>
                    </div>
                    <div class="form-group">
                      <button id="load" class="btn btn-primary" onclick="newtag();"><i class="fa fa-search"></i> Analyse</button>
                      <button class="btn btn-success" onclick="addcart();" id="save"><i class="fa fa-upload"></i> Save card</button>
                    </div>
                    <hr>
                    <div class="form-group">
                      Current card &nbsp;&nbsp;&nbsp;&nbsp;<?php require_once('system/projectsSelect.php'); /* SCRIPTS */ ?>
                      <button id="load" class="btn btn-primary" onclick="loadCard();"><i class="fa fa-refresh"></i> Reload</button>
                      <button id="delete" class="btn btn-danger" onclick="deleteCart();"><i class="fa fa-trash"></i> Delete</button>
                    </div>
                  </form>
                </br>
                </div>
                <div class="col-lg-6">
                  <div id="result">
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <?php require_once('parts/content.php'); /* SCRIPTS */ ?>

  </div>

  <?php require_once('parts/scripts.php'); /* SCRIPTS */ ?>
  <!-- Tag -->
  <script src="js/tag.js?v=<?php echo $build; ?>"></script>
  <script>
  $(function() {
    $(".lined").numberedtextarea();
  });
  </script>
</body>
</html>
