<?php
session_start();
require_once 'functions.php';
userBackgroundColorCookie();
$info_mess = '';
check_response($_POST, $info_mess);
exit_auth($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?=nightStyles()?>
    <title>Title</title>
</head>
<body>
    <header class = "header">
        <div class="top-bar">
            <div class="menu-container">
                <div class="top-bar-logo"><img src="img/INDEXLOGO.PNG" class="logo"></div>
                <div class="result">LASTED DAYS :  <? echo countDaysBetweenDates('1997-11-18 11:34:00', '$currenttime');?></div>
                <div class="result">VOWELS:  <?=getvowel()?></div>
                <div class="result">WORDS:  <?=getwords()?></div>
                <div><a href="m2.php" class="link">MENDELEEV</a></div>
                <div><a href="SQL.php" class="link">SQL</a></div>
                <div><a href="hw.php" class="link">EXERCISES</a></div>
                <?
                if($_SESSION['register'] == 'Y') { ?>
                    <div><a href="" class="link">AUTHORIZED</a></div>
                    <form method="post">
                        <input type="hidden" name="exit" value="Y">
                        <button class="popup_link">EXIT</button>
                    </form>
                <? } else {?>
                    <div><a href="#popup" class="popup_link">SIGN IN</a></div>
                <?}?>
            </div>
        </div>
    </header>
        <div id="popup" class="popup">
            <a href="##" class="popup_area"></a>
            <div class="popup_body">
                <div class="popup_content">
                    <a href="##" class="popup_close">X</a>
                    <div class="popup_title">SIGN IN</div>
                    <div class="container mt-4">
                        <div class="row">

                            <div><?= $info_mess ?></div>
                            <div class="col">
                                <h3>Registration</h3>
                                <form method="post">
                                    <input type="text" name="login" class="form-control" id="login" placeholder="Логин"
                                           value=""><br>
                                    <input type="password" name="pass" class="form-control" id="pass"
                                           placeholder="Пароль" value=""><br>
                                    <input type="hidden" name="register" value="Y">
                                    <button class="btn btn-success">Register</button>
                                    <br>
                                </form>
                            </div>

                            <div class="col">
                                <h3>Authorization</h3>
                                <form method="post">
                                    <input type="text" name="login" class="form-control" id="login" placeholder="Логин"
                                           value=""><br>
                                    <input type="password" name="pass" class="form-control" id="pass"
                                           placeholder="Пароль" value=""><br>
                                    <input type="hidden" name="auth" value="Y">
                                    <button class="btn btn-success">Go</button>
                                    <br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>