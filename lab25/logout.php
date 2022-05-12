<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Cristal Cardenas
201H -->


<html>
<head>
<title>Welcome Page</title>
<?php

require("lib/phpfunctions.php");

session_start();
validate_or_bounce();

session_destroy();
header("refresh: 5; url=lab_13.php");

?>
</head>
<body>

<?php readfile("lib/header.html"); ?>

Goodbye!

<?php readfile("lib/footer.html"); ?>

</body>







</html>
