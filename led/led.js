$(document).ready(function() {
$("#ledonS").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledons.php',
  })
});


$("#ledonDS").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDs.php',
  })
});

$("#ledonM").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonm.php',
  })
});

$("#ledonDM").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDm.php',
  })
});

$("#ledonL").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonl.php',
  })
});

$("#ledonDL").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDl.php',
  })
});

$("#ledonX").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonx.php',
  })
});

$("#ledonDX").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDx.php',
  })
});

$("#submitoff").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledoff.php',})
});
});