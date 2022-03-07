<?php
require_once 'OOP/autoreg/authreg.php';

function check_response($post, &$output){
    if(!$post){
        return;
    }
    $obj = new AuthReg();
    if($post['register'] == 'Y'){
        $obj->register($post, $output);
    } elseif ($post['auth'] == 'Y'){
        $obj->authorize($post, $output);
    }
}

function exit_auth($post){
    if( $_SESSION['register'] == 'Y' && $post['exit'] == 'Y'){
        unset( $_SESSION['register']);
    }
}


function nightStyles() {
    date_default_timezone_set('Asia/Yekaterinburg');
    $serverHour = date('H');
    if ($serverHour >= 20 || $serverHour < 8) {
        echo '<link rel = "stylesheet" href = "css/light.css">';
    }
}


function userBackgroundColorCookie() {
    if (isset($_POST['colorSelected'])) {
        switch ($_POST['userBGColor']) {
            case 'default':
                setcookie('bgColor', 'default');
                break;
            case 'blue':
                setcookie('bgColor', 'blue');
                break;
            case 'violet':
                setcookie('bgColor', 'violet');
                break;
            case 'red':
                setcookie('bgColor', 'red');
        }
        header("Refresh: 0");
    }
}



function setUserBackgroundColor() {
    if (isset($_COOKIE['bgColor'])) {
        switch ($_COOKIE['bgColor']) {
            case 'default':
                return '';
                break;
            case 'blue':
                return 'style="background-color: #aabcfa;"';
                break;
            case 'violet':
                return 'style="background-color: #742379;"';
                break;
            case 'red':
                return 'style="background-color: crimson;"';
        }
    } else return '';}



function me() {
    $me = 'I am 24 years old, born and raised in Orenburg, graduated from school, went to study and work in St. Petersburg.
                            After the academy, in connection with the changed labor market, there was a practical interest in programming.
                            On the recommendations of my friends who went through school, I decided to study.';
    $firsphrase = mb_substr($me, 0, 17);
    $col=['#3394be','#763380', '#b5da12', '#06ab88', '#3a312b', '#4e4e54', '#80635a', '#412a83'];
    $thiscolor=array_rand($col);
    $firsphraseA = "<span style=\"color:$col[$thiscolor]\">$firsphrase</span>";
    return $firsphraseA;
}



function feedback(){
    $feedback = 'I like the school. At first, I did not always keep up with what was happening in the lesson,
                 because Im not used to working with consoles and interfaces of development programs.
                 Homework allows you to fully understand what Regina is talking about.';
    $col=['#3394be','#763380', '#b5da12', '#06ab88', '#3a312b', '#4e4e54', '#80635a', '#412a83'];
    $thiscolor=array_rand($col);
    $feedarr = explode(' ', $feedback); //разбираем
    $elsethiscolor = array_rand($col);
    foreach ($feedarr as $key => &$element)
    {
        if (($key + 1) % 2 == 0)
        {
            $element = "<span style=\"color:$col[$thiscolor]\">$element</span>";
        }
        else $element = "<span style=\"color:$col[$elsethiscolor]\">$element</span>";
    }
    return implode(' ', $feedarr);
}




function countDaysBetweenDates($t1, $currenttime){
    $t1_ts = strtotime($t1);
    $currenttime = time();
    $seconds = abs($currenttime - $t1_ts);
    return floor($seconds / 86400);}





function getsigns(){
    $indextext = file_get_contents('index.php');
    $indextext = strip_tags($indextext);
    $indextext = preg_replace('/[^\w\s]/u', '',$indextext);
    $indextext = mb_strtolower($indextext);
    return $indextext;}



function getvowel(){
    $indextext = file_get_contents('index.php');
    $result = getsigns($indextext);
    $vowels = ['A', 'E', 'I', 'O', 'U', 'Y', 'a', 'e', 'i', 'o', 'u', 'y'];
    $indexsigns = mb_strlen($result);
    $differentsigns = mb_strlen(str_replace($vowels, '', $result));
    $indexvowel = $indexsigns - $differentsigns;
    return $indexvowel;}




function getwords(){
    $indextext = file_get_contents('index.php');
    $result = getsigns($indextext);
    $indexwords = str_word_count($result, 0, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
    return $indexwords;}
?>