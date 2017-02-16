  var margoulin = [$('#margoulin1')[0], $('#margoulin2')[0], $('#margoulin3')[0], $('#margoulin4')[0], $('#margoulin5')[0], $('#margoulin6')[0], $('#margoulin7')[0], $('#margoulin8')[0]
                  , $('#margoulin9')[0], $('#margoulin10')[0], $('#margoulin11')[0], $('#margoulin12')[0]];

  $("#citationTitle").click(function() {
    margoulin[Math.floor(Math.random() * margoulin.length)].play();
  });

$("#enter").click(function() {
  window.location.replace("login.php");
});
