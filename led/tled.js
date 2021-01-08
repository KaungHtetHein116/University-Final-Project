$(document).ready(function() {
$("#ledonS").click(function() {

  $.ajax({
  type : 'POST',
  url : 'ledon.php',})
});
$("#ledoffS").click(function() {

  $.ajax({
  type : 'POST',
  url : 'ledoff.php',})
});
});