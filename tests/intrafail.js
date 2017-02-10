(function() {
  var runMyCode = function($) {
    $(".articles").append('<article><a class="link_delete" href="javascript;" title="Ne plus afficher cette information" data-key=""><span class="icon"></span><span class="label">x</span></a><h3><a href="https://openclassrooms.com/courses/protegez-vous-efficacement-contre-les-failles-web/la-faille-xss-1">Choucroute</a></h3><div class="timeline"><span class="date">01/01/1900</span><span class="barre"><span><span style="width: 50.0000%;"></span></span></span><span class="date">01/01/2999</span></div><p class="row warning">Inscription jusqu\'au 99/99/9999, 99h99<span><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Inscription</a></span></p></article>');
  };

  var timer = function() {
    if (window.jQuery && window.jQuery.ui) {
      runMyCode(window.jQuery);
    } else {
      window.setTimeout(timer, 100);
    }
  };
  timer();
})();
