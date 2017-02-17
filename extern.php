<!DOCTYPE html>

<?php
  /** Configuration settings **/
  $label = "Extern";
  $title = "Extern Tools";
  $description = "Usefool tools extern from margoulin.org";
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
                <div class="col-lg-6">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="width: 70px;">Link</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody id="tbodycontent">
                    </tbody>
                  </table>
                </div>
                <div class="col-lg-6">
                  <?php if ($_SESSION['access'] >= 9) { ?>
                    <h2>Add a tool</h2>
                    <form onsubmit="return false;">
                      <div class="form-group">
                        <label for="name">Tool's name</label>
                        <input class="form-control" type="text" id="name"></input>
                      </div>
                      <div class="form-group">
                        <label for="link">Tool's link</label>
                        <input class="form-control" type="text" id="link"></input>
                      </div>
                      <div class="form-group">
                        <label for="taginfo">Tool's description</label>
                        <textarea type="textarea" id="taginfo" rows="3"></textarea>
                      </div>
                      <button id="add" class="btn btn-primary" onclick="addTool();" style="float:right;"><i class="fa fa-plus"></i> Add</button>
                    </form>
                  <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <?php require_once('parts/content.php'); /* SCRIPTS */ ?>

  </div>

  <?php require_once('parts/scripts.php'); /* SCRIPTS */ ?>
  <script>
    function addTool() {
      $.post( "system/saveExtern.php", {name: $("#name").val(), description: $("#taginfo").val(), link: $("#link").val()}, function( data ) {
        while (data[0] == '\n' || data[0] == ' ')
          data = data.substr(1);
        if (data == "OK") {
          title = "Enregistrement réussi";
          msg = "";
          type = BootstrapDialog.TYPE_SUCCESS;
          refreshTools();
        }
        else {
          title = "Enregistrement annulé";
          msg = "Erreur inconnue. Avez-vous les droits nécessaires?";
          type = BootstrapDialog.TYPE_DANGER;
          if (data == "ERROR1")
            msg = "Champs trop court.";
          else if (data == "ERROR2")
            msg = "Lien invalide.";
          else {
          }
        }
        BootstrapDialog.show({
            title: title,
            message: msg,
            type: type
        });
      });
    }
    function refreshTools() {
      $.post("system/externtools.php", function(data) {
        $("#tbodycontent").html(data);
      });
    }
    refreshTools();
  </script>

</body>
</html>
