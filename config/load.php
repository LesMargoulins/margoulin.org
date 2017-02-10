<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
require_once('config/sql.php');
require_once('config/utilities.php');

if (isset($_SESSION['logged']) && !empty($_POST['logout'])) {
  session_unset();
  header('Location: login.php');
  return;
}
else if (isset($_SESSION['access']) && $_SESSION['access'] < $access) {
  header('Location: accessdenied.php');
  return;
}

require_once('config/log.php');
require_once('config/lang.php');
$projectTitle = "Margoulin";
$author = "Tanguy Laloix";
$build = "1.0";

/* Sidebar index */
$page = array(
          //COMMON PAGE
          "Index"               => array("url" => "index.php",        "icon" => "fa-home",          "title" => "Index",         "navTitle" => "Index",          "access" => 0),
          "Members"             => array("url" => "members.php",      "icon" => "fa-users",         "title" => "Members",       "navTitle" => "Members",        "access" => 0),
          "Editor"              => array("url" => "editor.php",       "icon" => "fa-pencil",        "title" => "Editor",        "navTitle" => "Card Editor",    "access" => 0),

          //SPECIAL PAGES
          "accessDenied"        => array("url" => "accessdenied.php", "icon" => "fa-times",         "title" => "accessDenied",  "navTitle" => "Access Denied",  "access" => -1),

          //SYSTEM
          "Model"               => array("url" => "model.php",        "icon" => "fa-file-text",     "title" => "Model",         "navTitle" => "Model",          "access" => 0),
);

$sidebarPage = array(
          "Index"               => $page["Index"],
          "Members"             => $page["Members"],
          "Editor"              => $page["Editor"],
);

?>
