<?php
require_once("external.php");

class AuthReg
{


    private const ADDITIONAL_SIGNS = "ftyreyrwisrte";
    private $external = null;

    public function __construct()
    {
        $this->external = new External();
    }

    public function authorize($post, &$output)
    {
        $login = filter_var(trim($post['login']), FILTER_SANITIZE_STRING);
        $pass = filter_var(trim($post['pass']), FILTER_SANITIZE_STRING);

        if(!($login && $pass && $this->external)){
            $output = "Необходимо заполнить пароль и логин";
            return;
        }
        $pass = md5($pass . self::ADDITIONAL_SIGNS);

        $sql = "SELECT * FROM `users` WHERE `LOGIN` = '" . $login . "' AND `PASS` = '" . $pass . "'";
        $response = $this->external->query($sql);
        $user = $response->fetch_all(MYSQLI_ASSOC);
        if(!$user){
            $output = "Логин или праоль введены неверно";
        } else{
            $_SESSION['register'] = 'Y';
            $this->redirect();
        }
    }




    public function register($post, &$output)
    {

        $login = filter_var(trim($post['login']), FILTER_SANITIZE_STRING);
        $pass = filter_var(trim($post['pass']), FILTER_SANITIZE_STRING);

        if(!($login && $pass && $this->external)){
            $output = "Необходимо заполнить пароль и логин";
            return;
        }

        if(mb_strlen($login) < 5 || mb_strlen($login) > 50){
            $output = "Недопустимая длина логина";
            return;
        }
        else if(mb_strlen($pass) < 5 || mb_strlen($pass) > 50){
            $output = "Недопустимая длина имени.";
            return;
        }

        $sql = "SELECT * FROM `users` WHERE `LOGIN` = '" . $login . "'";
        $response = $this->external->query($sql);
        $user = $response->fetch_all(MYSQLI_ASSOC);

        if($user){
            $output = "Данный логин уже используется!";
            return;
        }

        $pass = md5($pass . self::ADDITIONAL_SIGNS);
        $sql = "INSERT users(PASS, LOGIN) VALUES ('" . $pass . "', '" . $login . "')";
        $this->external->query($sql);
        $this->external->closeConnection();
        $_SESSION['register'] = 'Y';
        $this->redirect();
    }

    public function redirect()
    {
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("Location: https://$host$uri/");
        exit;
    }
}