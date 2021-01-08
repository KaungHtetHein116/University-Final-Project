$(document).ready(function() {
$("#ledonS6").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledons.php',
  })
});


$("#ledonDS6").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDs.php',
  })
});

$("#ledonM6").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonm.php',
  })
});

$("#ledonDM6").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDm.php',
  })
});

$("#ledonL6").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonl.php',
  })
});

$("#ledonDL6").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDl.php',
  })
});

$("#ledonX6").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonx.php',
  })
});

$("#ledonDX6").click(function() {

  $.ajax({
  type : 'POST',
  url : 'led/ledonDx.php',
  })
});

});

