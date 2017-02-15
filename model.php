<!doctype html>

<?php
  /** Configuration settings **/
  $label = "Model";
  $title = "Model";
  $description = "A model page";
  $author = "Tanguy Laloix";
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
                  <h2>Some sample text</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac ultrices odio. In orci ante, egestas eget nibh sit amet, mattis iaculis erat. Praesent vitae bibendum nulla. Proin enim tortor, faucibus ac volutpat vel, aliquam eu augue. Donec metus diam, congue ac imperdiet varius, vehicula id ante. Aliquam leo magna, tincidunt eu imperdiet quis, fermentum et lectus. Duis a leo pulvinar, congue sapien et, malesuada mauris. Morbi non lorem vitae purus scelerisque vulputate ut eget ligula. Phasellus gravida quam ut metus consequat vestibulum.</p>
                  <p> Morbi a nunc vitae velit malesuada consequat eget ac urna. In eget viverra leo, non pretium odio. Donec feugiat urna posuere nisl posuere aliquet. In sodales velit et tincidunt pellentesque. Nam ac ornare risus. Pellentesque varius nisi vel dapibus lobortis. Suspendisse urna orci, accumsan vel massa ut, malesuada eleifend turpis. Aliquam iaculis diam eget vulputate ultricies. Donec auctor lorem id metus porta, pellentesque ultrices nulla feugiat. Maecenas et nisi ac tellus ultricies facilisis quis ac eros. Nulla eget justo vitae neque dignissim tempor ac eget massa. In urna massa, blandit eu lectus non, eleifend finibus lorem. Quisque et massa nec neque ornare laoreet. Fusce eget nisi vitae massa imperdiet malesuada sed at ipsum.</p>
                </div>
                <div class="col-lg-6">
                  <h2><b>More</b> text here</h2>
                  <p> Mauris tincidunt sapien a commodo laoreet. Ut at consectetur ex. Pellentesque lorem augue, efficitur mattis sem nec, rutrum fermentum magna. In laoreet sodales iaculis. Fusce iaculis lorem diam, non pulvinar tellus commodo nec. Cras hendrerit, massa ac scelerisque facilisis, purus lectus iaculis risus, vel maximus nibh tellus at dui. Phasellus laoreet viverra hendrerit.</p>
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="width: 70px;">Priority</th>
                        <th>Sentence</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>1</th>
                        <th class="sover">Hi <b id="s_util">$1</b><i class="fa fa-cog tableparam" aria-hidden="true"></i><i class="fa fa-pencil tableparam" aria-hidden="true"></i></th>
                      </tr>
                      <tr>
                        <th>4</th>
                        <th class="sover">Thank you <b id="s_util">$1</b><i class="fa fa-cog tableparam" aria-hidden="true"></i><i class="fa fa-pencil tableparam" aria-hidden="true"></i></th>
                      </tr>
                      <tr>
                        <th>25</th>
                        <th class="sover"><b id="s_util">$</b> What are you <b id="s_util">$1</b><i class="fa fa-cog tableparam" aria-hidden="true"></i><i class="fa fa-pencil tableparam" aria-hidden="true"></i></th>
                      </tr>
                    </tbody>
                  </table>
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
