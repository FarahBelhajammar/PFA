<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
<link rel="stylesheet" href='CSS/stylesheet.css' /> 
<title> <?php echo $pagetitle; ?> </title>
</head>
<body>
<?php
require_once($ROOT.$DS."view".$DS."header.php");
$filepath = $ROOT.$DS."view".$DS.$controller.$DS; 
$filename = ucfirst($view).'.php';
require_once($filepath.$filename);
require_once($ROOT.$DS."view".$DS."footer.php");
?>
</body>
</html>