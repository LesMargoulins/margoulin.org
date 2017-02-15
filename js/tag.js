function timestampToDate(timestamp)
{
  // Create a new JavaScript Date object based on the timestamp
  // multiplied by 1000 so that the argument is in milliseconds, not seconds.
  var date = new Date(timestamp * 1000);
  // Hours part from the timestamp
  return date;
}

function binaryseparator(str)
{
  str = String(str).replace(/(?!^)(?=(?:\d{4})+(?:\.|$))/gm, ' ');
  return (str);
}

function redraw() {
  if ($("#startnb").val() == "") {
    strt = 0;
  }
  else {
    strt = parseInt($("#startnb").val());
  }
  if ($("#readnb").val() == "") {
    nbr = 8 - strt;
  }
  else {
    nbr = parseInt($("#readnb").val());
  }
  if (isNaN(strt) || strt < 0 || strt > 8)
    strt = 0;
  if (isNaN(nbr) || nbr == undefined || nbr == null || nbr <= 0 || nbr + strt > 8)
    nbr = 8 - strt;
  hx = $("#hextitle").text();
  console.log("Strt=" + strt + ", nbr=" + nbr + " hx=" + hx);
  $("#calc").html(getinfos(hx, strt, nbr));
}

function getinfos(hex, start = 0, nb = 8) {
  original = hex;
  hex = hex.substr(start, nb);
  bin = hexToBinary(hex);
  binadd = 0;
  for (var i = 0, len = bin.result.length; i < len; i++) {
    binadd += parseInt(bin.result[i]);
  }
  dec = parseInt(bin.result, 2);
  result = "<table style='width:100%'>";
  result += "<tr><td>Value: </td><td><b>" + hex.substr(0, 4) + " " + hex.substr(4, 4) + "</b></td></tr>";
  result += "<tr><td>Binary value: </td><td><b>" + binaryseparator(bin.result) + "</b></td></tr>";
  result += "<tr><td>Binary-added value: </td><td><b>" + binadd + "</b></td></tr>";
  result += "<tr><td>Decimal value: </td><td><b>" + dec + "</b></td></tr>";
  result += "<tr><td>Timestamp value:</td><td><b>" + timestampToDate(dec) + "</b></td></tr>";
  result += "</table>";
  result += "<br />";
  result += "<form class='form-inline' onsubmit='redraw(); return false;'>"
  result += "<div class='form-group'><label class='sr-only' for='startnb'>Start From </label><input id='startnb' type='text' class='form-control' placeholder='0' value='" + start + "'></input></div>"
  result += "<div class='form-group'><label class='sr-only' for='readnb'>Number to read </label><input id='readnb' type='text' class='form-control' placeholder='8' value='" + nb + "'></input></div>"
  result += "<button class='btn btn-default redraw'>Re-calculate</button>";
  result += "</form>";
  return (result);
}

function prepareClick() {
  $(".i1").click(function () {
    var hex = $(".i1").text();
    hex = hex.replace(/\s/g, '');
    infos = "This is corresponding to the card ID.";
    BootstrapDialog.show({
        title: "Information (<span id='hextitle'>" + hex + "</span>)",
        message: "<span id='infoPopup'><span id='calc'>" + getinfos(hex) + "</span><hr>" + infos + "</span>"
    });
  });

  $(".i2").click(function () {
    var hex = $(".i2").text();
    hex = hex.replace(/\s/g, '');
    infos = "";
    BootstrapDialog.show({
        title: "Information (<span id='hextitle'>" + hex + "</span>)",
        message: "<span id='infoPopup'><span id='calc'>" + getinfos(hex) + "</span><hr>" + infos + "</span>"
    });
  });

  $(".i3").click(function () {
    var hex = $(".i3").text();
    hex = hex.replace(/\s/g, '');
    infos = "";
    BootstrapDialog.show({
        title: "Information (<span id='hextitle'>" + hex + "</span>)",
        message: "<span id='infoPopup'><span id='calc'>" + getinfos(hex) + "</span><hr>" + infos + "</span>"
    });
  });

  $(".i4").click(function () {
    var hex = $(".i4").text();
    hex = hex.replace(/\s/g, '');
    infos = "";
    BootstrapDialog.show({
        title: "Information (<span id='hextitle'>" + hex + "</span>)",
        message: "<span id='infoPopup'><span id='calc'>" + getinfos(hex) + "</span><hr>" + infos + "</span>"
    });
  });

  $(".i5").click(function () {
    var hex = $(".i5").text();
    hex = hex.replace(/\s/g, '');
    infos = "";
    BootstrapDialog.show({
        title: "Information (<span id='hextitle'>" + hex + "</span>)",
        message: "<span id='infoPopup'><span id='calc'>" + getinfos(hex) + "</span><hr>" + infos + "</span>"
    });
  });

  $(".i6").click(function () {
    var hex = $(".i6").text();
    hex = hex.replace(/\s/g, '');
    infos = "";
    BootstrapDialog.show({
        title: "Information (<span id='hextitle'>" + hex + "</span>)",
        message: "<span id='infoPopup'><span id='calc'>" + getinfos(hex) + "</span><hr>" + infos + "</span>"
    });
  });

  $(".i7").click(function () {
    var hex = $(".i7").text();
    hex = hex.replace(/\s/g, '');
    infos = "";
    BootstrapDialog.show({
        title: "Information (<span id='hextitle'>" + hex + "</span>)",
        message: "<span id='infoPopup'><span id='calc'>" + getinfos(hex) + "</span><hr>" + infos + "</span>"
    });
  });

  $(".i8").click(function () {
    var hex = $(".i8").text();
    hex = hex.replace(/\s/g, '');
    infos = "";
    BootstrapDialog.show({
        title: "Information (<span id='hextitle'>" + hex + "</span>)",
        message: "<span id='infoPopup'><span id='calc'>" + getinfos(hex) + "</span><hr>" + infos + "</span>"
    });
  });

  $(".i9").click(function () {
    var hex = $(".i9").text();
    hex = hex.replace(/\s/g, '');
    infos = "";
    BootstrapDialog.show({
        title: "Information (<span id='hextitle'>" + hex + "</span>)",
        message: "<span id='infoPopup'><span id='calc'>" + getinfos(hex) + "</span><hr>" + infos + "</span>"
    });
  });

  $(".i10").click(function () {
    var hex = $(".i10").text();
    hex = hex.replace(/\s/g, '');
    infos = "";
    BootstrapDialog.show({
        title: "Information (<span id='hextitle'>" + hex + "</span>)",
        message: "<span id='infoPopup'><span id='calc'>" + getinfos(hex) + "</span><hr>" + infos + "</span>"
    });
  });

  $(".i11").click(function () {
    var hex = $(".i11").text();
    hex = hex.replace(/\s/g, '');
    infos = "";
    BootstrapDialog.show({
        title: "Information (<span id='hextitle'>" + hex + "</span>)",
        message: "<span id='infoPopup'><span id='calc'>" + getinfos(hex) + "</span><hr>" + infos + "</span>"
    });
  });

  $(".i12").click(function () {
    var hex = $(".i12").text();
    hex = hex.replace(/\s/g, '');
    infos = "";
    BootstrapDialog.show({
        title: "Information (<span id='hextitle'>" + hex + "</span>)",
        message: "<span id='infoPopup'><span id='calc'>" + getinfos(hex) + "</span><hr>" + infos + "</span>"
    });
  });

  $(".i13").click(function () {
    var hex = $(".i13").text();
    hex = hex.replace(/\s/g, '');
    infos = "";
    BootstrapDialog.show({
        title: "Information (<span id='hextitle'>" + hex + "</span>)",
        message: "<span id='infoPopup'><span id='calc'>" + getinfos(hex) + "</span><hr>" + infos + "</span>"
    });
  });

  $(".i14").click(function () {
    var hex = $(".i14").text();
    hex = hex.replace(/\s/g, '');
    infos = "Change only on first use. Certainly born ID (Same value on multiple cards)";
    BootstrapDialog.show({
        title: "Information (<span id='hextitle'>" + hex + "</span>)",
        message: "<span id='infoPopup'><span id='calc'>" + getinfos(hex) + "</span><hr>" + infos + "</span>"
    });
  });

  $(".i15").click(function () {
    var hex = $(".i15").text();
    hex = hex.replace(/\s/g, '');
    infos = "";
    BootstrapDialog.show({
        title: "Information (<span id='hextitle'>" + hex + "</span>)",
        message: "<span id='infoPopup'><span id='calc'>" + getinfos(hex) + "</span><hr>" + infos + "</span>"
    });
  });

  $(".i16").click(function () {
    var hex = $(".i16").text();
    hex = hex.replace(/\s/g, '');
    infos = "";
    BootstrapDialog.show({
        title: "Information (<span id='hextitle'>" + hex + "</span>)",
        message: "<span id='infoPopup'><span id='calc'>" + getinfos(hex) + "</span><hr>" + infos + "</span>"
    });
  });
}

function newtag()
{
  $("#result").html("");
  var str = $("#taginfo").val();
  var line = str.split("\n");
  var passages = hexToBinary(line[3]);
  var cardid = line[0];
  var bornid = line[4];
  var loadLine = line[7];
  var loads = hexToBinary(loadLine[0] + loadLine[1]);
  if (!passages.valid || !loads.valid) {
    $("#result").html("Invalid data<br />");
    return;
  }
  var neverused = "[Already used]";
  if (line[13] == "00000000")
    neverused = "[Never used]";
  var loads = parseInt((loads.result).substr(0, 6), 2);
  var used = passages.result.split("1").length-1
  $("#result").append("<span id='infoline'>&nbsp;1 </span> <b class='lineinfo i1 ' id='sure'>   " + cardid   + "</b> <i class='fa fa-caret-right'></i> Card ID<br />");
  $("#result").append("<span id='infoline'>&nbsp;2 </span> <b class='lineinfo i2 ' id='notsure'>" + line[1]  + "</b> <i class='fa fa-caret-right'></i> Other ID<br />");
  $("#result").append("<span id='infoline'>&nbsp;3 </span> <b class='lineinfo i3 ' id='notsure'>" + line[2]  + "</b> <i class='fa fa-caret-right'></i> Other ID<br />");
  $("#result").append("<span id='infoline'>&nbsp;4 </span> <b class='lineinfo i4 ' id='sure'>   " + line[3]  + "</b> <i class='fa fa-caret-right'></i> Used <b>" + used + " time(s)</b> </span>.<br />");
  $("#result").append("<span id='infoline'>&nbsp;5 </span> <b class='lineinfo i5 ' id='notsure'>" + bornid   + "</b> <i class='fa fa-caret-right'></i> Validation born ID <br />");
  $("#result").append("<span id='infoline'>&nbsp;6 </span> <b class='lineinfo i6 ' id='infotag'>" + line[5]  + "</b> <i class='fa fa-caret-right'></i> Change on reload <br />");
  $("#result").append("<span id='infoline'>&nbsp;7 </span> <b class='lineinfo i7 ' id='infotag'>" + line[6]  + "</b> <i class='fa fa-caret-right'></i> Unknown <br />");
  $("#result").append("<span id='infoline'>&nbsp;8 </span> <b class='lineinfo i8 ' id='sure'>   " + line[7]  + "</b> <i class='fa fa-caret-right'></i> Loaded <b>" + (loads) + " time(s)</b> (Includes first buy)<br />");
  $("#result").append("<span id='infoline'>&nbsp;9 </span> <b class='lineinfo i9 ' id='infotag'>" + line[8]  + "</b> <i class='fa fa-caret-right'></i> Unknown - Changed on used after first used (date/timestamp?)<br />");
  $("#result").append("<span id='infoline'>10      </span> <b class='lineinfo i10' id='infotag'>" + line[9]  + "</b> <i class='fa fa-caret-right'></i> Unknown <br />");
  $("#result").append("<span id='infoline'>11      </span> <b class='lineinfo i11' id='infotag'>" + line[10] + "</b> <i class='fa fa-caret-right'></i> Unknown - Changed on used after first used (date/timestamp?)<br />");
  $("#result").append("<span id='infoline'>12      </span> <b class='lineinfo i12' id='infotag'>" + line[11] + "</b> <i class='fa fa-caret-right'></i> Unknown - Changed on used after first used (date/timestamp?)<br />");
  $("#result").append("<span id='infoline'>13      </span> <b class='lineinfo i13' id='notsure'>" + line[12] + "</b> <i class='fa fa-caret-right'></i> Unknwon - Changed on first used and sometimes <b></b><br />");
  $("#result").append("<span id='infoline'>14      </span> <b class='lineinfo i14' id='notsure'>" + line[13] + "</b> <i class='fa fa-caret-right'></i> OTP? - First Used (date or born ID?) <b>" + neverused + "</b><br />");
  $("#result").append("<span id='infoline'>15      </span> <b class='lineinfo i15' id='notsure'>" + line[14] + "</b> <i class='fa fa-caret-right'></i> Unknwon - Changed on first used and sometimes <b></b><br />");
  $("#result").append("<span id='infoline'>16      </span> <b class='lineinfo i16' id='notsure'>" + line[15] + "</b> <i class='fa fa-caret-right'></i> Unknwon - Changed on first used and sometimes <b></b><br />");
  $("#result").append("<div id='theoricUsage'>Theoric usages left: <b>" + (loads - used) + "</b></div><br />");
  prepareClick();
}



function deleteCart() {
  $.post( "system/deleteCard.php", {id: $("#projectselector").val()}, function( data ) {
    while (data[0] == '\n' || data[0] == ' ')
      data = data.substr(1);
    if (data == "OK") {
      title = "Suppression réussie";
      msg = "Carte supprimée. Actualisez la page.";
      type = BootstrapDialog.TYPE_SUCCESS;
    }
    else {
      title = "Suppression annulée";
      msg = "Erreur inconnue. Avez-vous les droits nécessaires?";
      type = BootstrapDialog.TYPE_DANGER;
    }
    BootstrapDialog.show({
        title: title,
        message: msg,
        type: type
    });
  });
}

function addcart() {
  $.post( "system/saveCard.php", {name: $("#cardname").val(), data: $("#taginfo").val(), type: $("#cardselector").val()}, function( data ) {
    while (data[0] == '\n' || data[0] == ' ')
      data = data.substr(1);
    if (data == "OK") {
      title = "Enregistrement réussi";
      msg = "Carte enregistrée. Actualisez la page.";
      type = BootstrapDialog.TYPE_SUCCESS;
    }
    else {
      title = "Enregistrement annulé";
      msg = "Erreur inconnue. Avez-vous les droits nécessaires?";
      type = BootstrapDialog.TYPE_DANGER;
      if (data == "ERROR1")
        msg = "Ce nom de carte est déjà utilisé.";
      else if (data == "ERROR2")
        msg = "Les datas semblent être incorrectes. Evitez les espaces, et assurez-vous de renseigner toutes les pages de votre carte.";
      else if (data == "ERROR3")
        msg = "Le nom comporte des caractères non autorisés.";
      else if (data == "ERROR4")
        msg = "Le nom doit faire entre 5 et 50 charactères.";
      else if (data == "ERROR5")
        msg = "Les datas doivent être en hexadécimal.";
      else if (data == "ERROR6")
        msg = "Aucun type de carte séléctionné.";
      else if (data.substr(0, 6) == "ERROR7")
        msg = "Cette carte existe déjà. Son nom est <b>" + data.substr(6) + "</b>.";
      else {
      }
    }
    BootstrapDialog.show({
        title: title,
        message: msg,
        type: type
    });
  });
}

function renderLineNumbers(element, settings) {
    element = $(element);

    var linesDiv = element.parent().find('.numberedtextarea-line-numbers');
    var count = element.val().split("\n").length;
    var paddingBottom = parseFloat(element.css('padding-bottom'));

    linesDiv.find('.numberedtextarea-number').remove();

    for(i = 1; i<=count; i++) {
        var line = $('<div class="numberedtextarea-number numberedtextarea-number-' + i + '">' + i + '</div>').appendTo(linesDiv);

        if(i === count) {
          line.css('margin-bottom', paddingBottom + 'px');
        }
    }
}

$(".projectselector").selectpicker();
$(".projectselector").selectpicker('val', '');

$(".cardselector").selectpicker();

function loadCard() {
  $("select.projectselector option").each(function() {
    if ($(this).val() == $("#projectselector").val()) {
      $("#cardname").val($(this).text());
      $.post( "system/getCardInfo.php", {id: $("#projectselector").val()}, function( data ) {
        while (data[0] == '\n' || data[0] == ' ')
          data = data.substr(1);
        $(".lined").val(data);
        renderLineNumbers($(".lined"));
        newtag();
      });
      $.post( "system/getCardType.php", {id: $("#projectselector").val()}, function( data ) {
        while (data[0] == '\n' || data[0] == ' ')
          data = data.substr(1);
        $("#cardselector").selectpicker("val", data);
      });
    }
  });
}

$(".projectselector").change(function() {
  loadCard();
});
