<!DOCTYPE html>

<?php
  /** Configuration settings **/
  session_start();

  $label = "Margoulin";
  $title = "Margoulin";
  $description = "";
  $author = "Anonymous";
  $build = "1.1";
  require_once('config/lang.php');
  require_once('config/sql.php');
  require_once('config/utilities.php');
  require_once('config/lang.php');
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
  <link href="css/margoulin.css" rel="stylesheet">

</head>
<body>
  <div class="centerImg"></div>

  <div id="wrapper">

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 nomarging">
                  <div class="col-lg-4 citation">
                  <h1 id="citationTitle">Margoulin</h1>
                  <?php
                  if ($lang == "en") { ?>
                      <h3><i>"We are not a security team. We're just a doushbag team."</i></h3>
                      <span id="citationSign">- A margoulin, 2017</span>
                      <br />
                      <button id="enter">Enter</button>
                    <?php
                  }
                  else { ?>
                  <h3><i>"On est pas une team de sécu. On est juste une team de connards."</i></h3>
                  <span id="citationSign">- Un margoulin, 2017</span>
                  <br />
                  <button id="enter">Entrer</button>
                  <?php } ?>
                </div>
              </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <?php require_once('parts/content.php'); /* SCRIPTS */ ?>

  </div>
  <audio class="sound" id="margoulin1" src="audio/margoulin1.mp3" type="audio/mp3"></audio>
  <audio class="sound" id="margoulin2" src="audio/margoulin2.mp3" type="audio/mp3"></audio>
  <audio class="sound" id="margoulin3" src="audio/margoulin3.mp3" type="audio/mp3"></audio>
  <audio class="sound" id="margoulin4" src="audio/margoulin4.mp3" type="audio/mp3"></audio>
  <audio class="sound" id="margoulin5" src="audio/margoulin5.mp3" type="audio/mp3"></audio>
  <audio class="sound" id="margoulin6" src="audio/margoulin6.mp3" type="audio/mp3"></audio>
  <audio class="sound" id="margoulin7" src="audio/margoulin7.mp3" type="audio/mp3"></audio>
  <audio class="sound" id="margoulin8" src="audio/margoulin8.mp3" type="audio/mp3"></audio>
  <audio class="sound" id="margoulin9" src="audio/margoulin9.mp3" type="audio/mp3"></audio>
  <audio class="sound" id="margoulin10" src="audio/margoulin10.mp3" type="audio/mp3"></audio>
  <audio class="sound" id="margoulin11" src="audio/margoulin11.mp3" type="audio/mp3"></audio>
  <audio class="sound" id="margoulin12" src="audio/margoulin12.mp3" type="audio/mp3"></audio>

  <?php require_once('parts/scripts.php'); /* SCRIPTS */ ?>
  <script src="js/margoulin.js?v=<?php echo $build; ?>"></script>


</body>
</html>
