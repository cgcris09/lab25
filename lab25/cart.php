<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Cristal Cardenas
201H -->


<html>
<head>
<title>Welcome Page</title>
<?php

require("lib/phpfunctions.php");


function shoppingCart()
{

   $items = array('Clothes', 'Shoes', 'Accessories', 'Decour');
   foreach($items as $item)
   {
   if (isset($_SESSION[$item]) && $_SESSION[$item] > 0)
   {
      echo $item . " ";
      echo $_SESSION[$item];
      echo "<br>";
   }
   }

}


session_start();
validate_or_bounce();
?>
</head>
<body>

<?php readfile("lib/header.html"); ?>

<?php shoppingCart() ?>
<?php readfile("lib/footer.html"); ?>

</body>







</html>
