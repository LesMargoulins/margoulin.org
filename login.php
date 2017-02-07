<!doctype html>

<?php
  /** Configuration settings **/
  session_start();
  $label = "Login";
  $title = "Login";
  $description = "";
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

</head>
<body>

  <div id="wrapper">

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                </br>
                </br>
                <?php
                  $default = 0;
                  if (!empty($_POST['type']))
                  {
                    if ($_POST['type'] == "login")
                    {
                      if (empty($_POST['login']) || empty($_POST['password'])) {
                        ?> <p style="color: #DD0000">You must fill all fields.</p> <?php
                      }
                      else
                      {
                        $login = makeSafe($_POST['login']);
                        $pass = makeSafe($_POST['password']);
                        $pass = sha1($pass."Fe3ZeN_$>");
                        $reponse = $bdd->prepare('SELECT * FROM users WHERE login = ? AND password = ?');
                        $reponse->execute(array($login, $pass));
                        while ($donnees = $reponse->fetch()) {
                          $_SESSION['logged'] = $login;
                          header('Location: index.php');
                          $reponse->closeCursor();
                          return;
                        }
                        $reponse->closeCursor();
                        ?> <p style="color: #DD0000">Wrong username / password.</p> <?php
                      }
                    }
                    else if ($_POST['type'] == "register")
                    {
                      $default = 1;
                      if (empty($_POST['login']) || empty($_POST['password']) || empty($_POST['password2']) || empty($_POST['mail'])) {
                        ?> <p style="color: #DD0000">You must fill all fields.</p> <?php
                      }
                      else {
                        $login =  makeSafe($_POST['login']);
                        $pass =   makeSafe($_POST['password']);
                        $pass2 =  makeSafe($_POST['password2']);
                        $mail =   makeSafe($_POST['mail']);
                        $check = true;
                        if (!preg_match('/^[\w]+$/', $login)) {
                          $check = false;
                          ?> <p style="color: #DD0000">Your username contains forbidden characters.</p> <?php
                        }
                        if (strlen($login) < 3 || strlen($login) > 20) {
                          $check = false;
                          ?> <p style="color: #DD0000">Your username must be between 3 and 20 characters.</p> <?php
                        }
                        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                          $check = false;
                          ?> <p style="color: #DD0000">You must use a valid email adress.</p> <?php
                        }
                        if (strstr($mail, '@yopmail')) {
                          $check = false;
                          ?> <p style="color: #DD0000">This email domain is not allowed.</p> <?php
                        }
                        if (strlen($pass) < 8) {
                          $check = false;
                          ?> <p style="color: #DD0000">Your password must be at least 8 characters.</p> <?php
                        }
                        if (!preg_match('/[A-Z]+[a-z]+[0-9]+/', $pass)) {
                          $check = false;
                          ?> <p style="color: #DD0000">Your password need to have uppercases, lowercases and numbers.</p> <?php
                        }
                        if ($pass != $pass2) {
                          $check = false;
                          ?> <p style="color: #DD0000">Passwords differs!</p> <?php
                        }
                        if ($check) {
                          $reponse = $bdd->prepare('SELECT * FROM users WHERE login = ?');
                          $reponse->execute(array($login));
                          while ($donnees = $reponse->fetch()) {
                            ?> <p style="color: #DD0000">Username already used.</p> <?php
                            $check = false;
                          }
                          $reponse->closeCursor();
                          $reponse = $bdd->prepare('SELECT * FROM users WHERE mail = ?');
                          $reponse->execute(array($mail));
                          while ($donnees = $reponse->fetch()) {
                            ?> <p style="color: #DD0000">EMail already used.</p> <?php
                            $check = false;
                          }
                          $reponse->closeCursor();
                          if ($check) {
                            $pass = sha1($pass."Fe3ZeN_$>");
                            $req = $bdd->prepare('INSERT INTO users(login, mail, password, createddate) VALUES(:login, :mail, :password, CURRENT_TIMESTAMP)');
                            $req->execute(array(
                            	'login' => $login,
                            	'mail' => $mail,
                            	'password' => $pass
                            	));
                            ?> <p style="color: #DD0000">Registration succeed. You can now log in.</p> <?php
                          }
                        }
                      }
                    }
                  }
                  if (isset($_GET["redirect"])) { ?>
                    <p style="color: #DD0000">You need to log in to view this page.</p>
                <?php } ?>

                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#login"><b>Login</b></a></div>
                    <div id="login" class="panel-collapse collapse <? if ($default == 0) { echo "in";} ?>">
                      <div class="panel-body">
                        <form action="login.php" method="post">
                        <div class="form-group">
                          <label for="login">Login</label>
                          <input type="text" class="form-control" id="login" aria-describedby="loginHelp" placeholder="Enter login" name="login">
                        </div>
                        <div class="form-group">
                          <label for="pass">Password</label>
                          <input type="password" class="form-control" id="pass" placeholder="Password" name="password">
                        </div>
                        <input type="hidden" name="type" value="login"/>
                        <button style="float:right;" type="submit" class="btn btn-primary">Login</button>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#register"><b>Register</b></a></div>
                    <div id="register" class="panel-collapse collapse <? if ($default == 1) { echo "in";} ?>">
                    <div class="panel-body">
                      <form action="login.php" method="post">
                      <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" id="login" aria-describedby="loginHelp" placeholder="Enter login" name="login">
                      </div>
                      <div class="form-group">
                        <label for="mail">Mail</label>
                        <input type="mail" class="form-control" id="mail" aria-describedby="mailHelp" placeholder="Enter EMail" name="mail">
                      </div>
                      <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" placeholder="Password" name="password">
                      </div>
                      <div class="form-group">
                        <label for="pass2">Confirm password</label>
                        <input type="password" class="form-control" id="pass2" placeholder="Password" name="password2">
                      </div>
                      <input type="hidden" name="type" value="register"/>
                      <button style="float:right;" type="submit" class="btn btn-primary">Register</button>
                    </form>
                    </div>
                  </div>
                  </div>
              </div>

                </div>
                <div class="col-lg-4">
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
