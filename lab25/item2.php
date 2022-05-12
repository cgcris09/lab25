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


$ITEM = 'Shoes';

if (!isset($_SESSION[$ITEM]))
{
   $_SESSION[$ITEM] = 0;
}

if (isset($_POST['choice']))
{
   $choice = $_POST['choice'];
   if ($choice == 'Buy One')
   {
   $_SESSION[$ITEM] += 1;
   }
   else if ($choice == 'Remove One')
   {
   $_SESSION[$ITEM] -= 1;
   }
   else if ($choice == 'Remove All')
   {
   $_SESSION[$ITEM] = 0;
   }
}




?>
</head>
<body>

<?php readfile("lib/header.html"); ?>

<?php echo $_SESSION[$ITEM] . " $ITEM <br>"; ?>



</body>

<form method ='POST'>
<input type='submit' name='choice' value='Buy One'>
<input type='submit' name='choice' value='Remove One'>
<input type='submit' name='choice' value='Remove All'>
</form>

<?php readfile("lib/footer.html"); ?>




</html>
