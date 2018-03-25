<?php
require "../../config/db.php";

#function to create user
function newuser($regname,$regpassword,$regemail){
    $newuser = R::dispense('users');
    $newuser->name=$regname;
    $newuser->password=password_hash($regpassword,PASSWORD_DEFAULT);
    $newuser->email=$regemail;
    R::store($newuser);
    header('Location:../pages/login.php');
    exit;
};
@$countuser = R::count('users','email=?',array($_REQUEST['regemail']));

if (isset($_REQUEST['do_signup']) && $countuser==0){
    newuser(
        $_REQUEST['regname'],
        $_REQUEST['regpassword'],
        $_REQUEST['regemail']
    );
};

#function to check user
function user($email,$password){
$user=R::findOne('users','email = ?',array($email));
if($user){
    if(password_verify($password,$user->password))
    {
        session_start();
        $_SESSION['logged user'] = $user;
        header('Location:../pages/dash.php?ticket=aapl');
    }else header('Location:ya.ru');
};
};

if (isset($_REQUEST['do_login'])){
    user(
        $_REQUEST['email'],
        $_REQUEST['password']
    );
};
?>