<?
  $i = 0;
  while ($i < 3) {
    $content = file_get_contents('http://loripsum.net/api/1/');
?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <b><a data-toggle="collapse" href="#collapse<? echo $i; ?>" style="cursor: pointer; text-decoration: none;">New Title #<? echo $i + 1; ?> !</a></b>
    </h4>
  </div>
  <div id="collapse<? echo $i; ?>" class="panel-collapse collapse in">
    <div class="panel-body">
      <? echo $content; ?>
      <a style="float:right; cursor: pointer; text-decoration: none;">Read more...</a>
    </div>
    <div class="panel-footer">01-10-2017</div>
  </div>
</div>

<?
  $i += 1;
  }
?>
