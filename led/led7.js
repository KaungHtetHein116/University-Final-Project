$(document).ready(function() {
$("#ledonS7").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledons.php',
  })
});


$("#ledonDS7").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDs.php',
  })
});

$("#ledonM7").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonm.php',
  })
});

$("#ledonDM7").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDm.php',
  })
});

$("#ledonL7").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonl.php',
  })
});

$("#ledonDL7").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDl.php',
  })
});

$("#ledonX7").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonx.php',
  })
});

$("#ledonDX7").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDx.php',
  })
});

});

