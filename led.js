$(document).ready(function() {
$("#ledonS").click(function() {

  $.ajax({
  type : 'POST',
  url : 'ledon.php',})
});
$("#submitoff").click(function() {

  $.ajax({
  type : 'POST',
  url : 'ledoff.php',})
});
});