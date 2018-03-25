<?php //if (!$_SESSION['logged user']){header('Location:login.php');};
require "../controller/logincontroller.php";
unset($_SESSION['logged user']);
session_destroy();
?>
<h1>Sign Up</h1>
<form action="../controller/logincontroller.php" method="post">
<input name="regname" placeholder="regname">
<input name="regpassword" placeholder="regpassword">
<input name="regemail" placeholder="regemail">
<button name="do_signup">Sign Up</button>
</form>
</br>
<h1>Sign In</h1>
</br>
<form action="../controller/logincontroller.php" method="post">
    <input name="email" placeholder="email">
    <input name="password" placeholder="password">
    <button name="do_login">Sign In</button>
</form>

