<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
require_once('config/sql.php');
require_once('config/utilities.php');

if (isset($_SESSION['logged']) && !empty($_POST['logout'])) {
  unset($_SESSION["logged"]);
  header('Location: login.php');
  return;
}

require_once('config/log.php');
require_once('config/lang.php');
$projectTitle = "Margoulin";
$author = "Tanguy Laloix";
$build = "1.0";

/* Sidebar index */
$page = array(
          "Index"               => array("url" => "index.php", "icon" => "fa-home",      "title" => "Index",  "navTitle" => "Index"),
          "Editor"              => array("url" => "editor.php", "icon" => "fa-pencil",   "title" => "Editor", "navTitle" => "Card Editor"),
          "Model"               => array("url" => "model.php", "icon" => "fa-file-text", "title" => "Model",  "navTitle" => "Model"),
);

$sidebarPage = array(
          "Index"               => $page["Index"],
          "Editor"              => $page["Editor"],
          "Model"               => $page["Model"],
);
?>
