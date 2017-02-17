<!DOCTYPE html>

<?php
  /** Configuration settings **/
  $label = "Members";
  $title = "Members";
  $description = "The members list";
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
                  <h2></h2>
                  <p></p>
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="width: 70px;">ID</th>
                        <th>Username</th>
                      </tr>
                    </thead>
                    <tbody id="Users">
                    </tbody>
                  </table>
                    <i><span style="color: rgb(94, 213, 217);">Super Admin</span>, <span style="color: rgb(94, 213, 217);">Admin</span>,
                    <span style="color: rgb(46, 196, 102);">Moderator</span>, <span style="color: rgb(96, 96, 96);">Member</span>, <span style="color: rgb(228, 227, 140);">Visitor</span>,
                    <span style="color: rgb(224, 50, 50);">Banned</span></i>
                </div>
                <div class="col-lg-6">
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <?php require_once('parts/content.php'); /* SCRIPTS */ ?>

  </div>

  <?php require_once('parts/scripts.php'); /* SCRIPTS */ ?>
  <script src="js/users.js"></script>
  <script>
    selectUsers();
  </script>

</body>
</html>
