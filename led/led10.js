$(document).ready(function() {
$("#ledonS10").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledons.php',
  })
});


$("#ledonDS10").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDs.php',
  })
});

$("#ledonM10").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonm.php',
  })
});

$("#ledonDM10").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDm.php',
  })
});

$("#ledonL10").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonl.php',
  })
});

$("#ledonDL10").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDl.php',
  })
});

$("#ledonX10").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonx.php',
  })
});

$("#ledonDX10").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDx.php',
  })
});

});

