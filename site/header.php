<?php
//-------------------------------------время-------------------------------------------------
function countDaysBetweenDates($t1, $currenttime)
{
    $t1_ts = strtotime($t1);
    $currenttime = time();
    $seconds = abs($currenttime - $t1_ts);

    return floor($seconds / 86400);
}
?>
<?php
$indextext = file_get_contents('index.php');
function getsigns($indextext)
{
    $indextext = strip_tags($indextext);
    $indextext = preg_replace('/[^\w\s]/u', '',$indextext);
    $indextext = mb_strtolower($indextext);
    return $indextext;
}
$result = getsigns($indextext);
function getvowel($result){
    $vowels = ['A', 'E', 'I', 'O', 'U', 'Y', 'a', 'e', 'i', 'o', 'u', 'y'];
    $indexsigns = mb_strlen($result);
    $differentsigns = mb_strlen(str_replace($vowels, '', $result));
    $indexvowel = $indexsigns - $differentsigns;
    return $indexvowel;
}
function getwords($result){
    $indexwords = str_word_count($result, 0, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
    return $indexwords;
}
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?
    date_default_timezone_set('Asia/Yekaterinburg');
    $time = date('H');
    if($time>8 || $time<19){
    ?>
        <link rel="stylesheet" href="css/light.css">
    <? }else {?>
        <link rel="stylesheet" href="css/dark.css">
    <?}?>
    <title>Title</title>
</head>
<body>
    <header class = "header">
        <div class="top-bar">
            <div class="menu-container">
                <div class="top-bar-logo"><img src="img/INDEXLOGO.PNG" class="logo"></div>
                <div class="result">LASTED DAYS :  <? echo countDaysBetweenDates('1997-11-18 11:34:00', '$currenttime');?></div>
                <div class="result">VOWELS:  <?=getvowel($result)?></div>
                <div class="result">WORDS:  <?=getwords($result)?></div>
                <div><a href="m2.php" class="link">MENDELEEV</a></div>
                <div><a href="SQL.php" class="link">SQL</a></div>
                <div><a href="hw.php" class="link">EXERCISES</a></div>
                <div><a href="#popup" class="popup_link">SIGN IN</a></div>
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
                        <div class="col">
                            <h3>Registration</h3>
                            <form action="check.php" method="post">
                                <input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Имя"><br>
                                <input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
                                <button class="btn btn-success">Register</button><br>
                            </form>
                        </div>

                        <div class="col">
                            <h3>Authorization</h3>
                            <form action="auth.php" method="post">
                                <input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
                                <input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
                                <button class="btn btn-success">Go</button><br>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>