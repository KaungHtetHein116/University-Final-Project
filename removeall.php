<html>
<body bgcolor=black>
<?php

require_once('dbconnect.php');
$delete = $_REQUEST['Number'];

$query = ("DELETE FROM customer WHERE id='$delete'");

?>
</body>
</html>



