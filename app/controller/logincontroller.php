<?php
require "../../config/db.php";

$data = $_POST;

// пхп конект на регистрацию
if ( isset($data['do_signup']))
{
    //регистрация
    //проверки
    $errors= array();

    if(trim ($data['emailreg']) == '')
    {
        $errors[]='Введите Email';
    
     }
     if( $data['passwordreg'] == '')
    {
        $errors[]='Введите Пароль';
    
     }

     if( R::count('users',"email = ?", array($data['emailreg'])) > 0)
    {
        $errors[]='Такой пользователь уже существует пожалуйста измените ваши регистрационные данные';
    }
     if(empty($errors))
     {
        //все хорошо
        // создаем бд
        $user = R::dispense('users');
        
        $user->password = password_hash($data['passwordreg'],PASSWORD_DEFAULT);
        $user->email = $data['emailreg'];
        $user->firstname = $data['regfirstname'];
        $user->lastname = $data['reglastname'];
        $user->datereg = date('Y-m-d');

        R::store($user);

        

        header('Location:../assets/landing/login.php');

     }else{
            header('Location:../assets/landing/register.php');
        }

 } 
 //пхп конект на логин
 if (isset($data['do_login']))
 {
    $errors=array();
    $user = R::findOne('users','email = ?',array($data['email']));
    if($user)
    {
        //если такой логин есть то тогда начинаем проверку пароля
        if(password_verify($data['password'],$user->password))
        {
            //действие при правильном вводе пароля
            $_SESSION['logged user'] = $user; 
            //переход на страницу

         header('Location:../pages/dash.php?ticket=aapl');
         exit;

        }else{$errors[] = 'Нет такого логина';}
 

    }else{$errors[] = 'Нет такого логина';}

    if(!empty($errors))
    {
        //echo "Где то вы ввели какую то чушь";
    
        header('Location:../assets/landing/login.php');
    }
     
    
 }

if (isset($_SESSION['logged user'])){header('Location:../pages/dash.php?ticket=aapl');};

?>