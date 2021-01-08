$(document).ready(function() {
$("#ledonS2").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledons.php',
  })
});


$("#ledonDS2").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDs.php',
  })
});

$("#ledonM2").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonm.php',
  })
});

$("#ledonDM2").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDm.php',
  })
});

$("#ledonL2").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonl.php',
  })
});

$("#ledonDL2").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDl.php',
  })
});

$("#ledonX2").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonx.php',
  })
});

$("#ledonDX2").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDx.php',
  })
});

});