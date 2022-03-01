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
                <form method="post">
                    <input type="text" name="login">
                    <input type="password" name="password">
                    <input type="submit"></button>
                </form>
<?php
//-------------------------------------авторизация------------------------------------------------------------------------------
$secret=password_hash($_POST['password'], PASSWORD_DEFAULT);
$name=$_POST['login'];
if ($secret='$2y$10$D7KT0UabzHKeeid/oG5jyentfGl.jJNHOywf4ZV2nuLC5zu5egjnW' && $name = "Regina")     //pass: lecturer
 {
    echo "LOGIN SUCCESSFUL";
} else {
    echo "INCORRECT USERNAME OR PASSWORD";
}
?>
            </div>
        </div>
    </div>
</body>
</html>