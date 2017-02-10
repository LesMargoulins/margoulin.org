<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="index.php">
                <?php echo $projectTitle; ?>
            </a>
        </li>
        <?php
          foreach ($sidebarPage as $key => $value) {
            if ($_SESSION["access"] >= $value["access"]) {
        ?>
        <li>
            <a <?php if ($value["title"] == $label) { echo 'class="selected"'; } ?> href="<?php echo $value['url']; ?>">
                <?php echo $value["navTitle"]; ?>
                <i class="fa <?php echo $value['icon']; ?> navico" aria-hidden="true"></i>
            </a>
        </li>
        <?php }
          } ?>
    </ul>
</div>
<!-- /#sidebar-wrapper -->
