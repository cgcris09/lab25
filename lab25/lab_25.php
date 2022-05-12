<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Cristal Cardenas
201H -->


<html>
<head>
<title>PHP Session</title>
<h3>Login Page</h3>
Please enter username and password: <br>




<?php
// this code is from kurban/login.php
require("lib/phpfunctions.php");

session_start();

$message="";
$username = getPost('155username');
$password = getPost('155password');
if (isset($_POST['submit']))
{
    if ($_POST['submit'] == 'Login')
    {
    if (validate_login($username, $password))
    { 
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
    }
    $message = "Invalid username or password";
    }
    else if ($_POST['submit'] == 'Create User')
    {
        header('Location: newuser.php');
    }
}  




?>
</head>
<body>
<form method='POST'>
<b>Username:</b> <input type='text' name='155username' value='<?php showPost("155username");?>'> <br>
<b>Password:</b> <input type='password' name='155password' value='<?php showPost("155password");?>'> <br>
<input type='submit' name='submit' value='Login'> 
<input type='submit' name='submit' value='Create User'> <br>

<div style='position: absolute; bottom: 10px; '><p><?php echo $message;?></p></div>
username is hello, password is world
</form>
























</body>
</html>




