<?php
$post = $_POST;
unset($post['name'], $post['email']);
$summ = 0;
$block1 =array(3, 9, 10, 13, 14, 19);
$block2 =array(1, 2, 4, 5, 6, 7, 8, 9, 11, 12, 15, 16, 17, 18);
foreach ($_POST as $key => $value){
    if (in_array($key, $block1) and $value = 1){
        $summ++;
    } elseif (in_array($key, $block2) and $value = 0){
        $summ++;
    };
}
switch($summ)
{
    case $summ > 15:
        $result = 'У вас покладистый характер';
        break;
    case $summ >= 8 and $summ < 15:
        $result = 'Вы не лишены не достатков, но с вами можно ладить';
        break;
    default:
        $result = 'Вашим друзьям можно посочувствовать';
}
echo $result
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
    <form method="post">

        <p>
            <label for="name ">Имя:</label>
            <input type="text" name="name" id="name " required>
        </p>
        <p>
            <label for="email">Почта:</label>
            <input type="text" name="email" id="email" required>
        </p>
        <h2>1).    Вы любите животных?</h2>
        <p><input name="1" type="radio" value="1" checked>Да</p>
        <p><input name="1" type="radio" value="0">Нет</p>
        <h2>2).    Охотно помогаете людям?</h2>

        <p><input name="2" type="radio" value="1" checked>Да</p>
        <p><input name="2" type="radio" value="0">Нет</p>
        <h2>3).    Любите прогулки на природе?</h2>

        <p><input name="3" type="radio" value="1" checked>Да</p>
        <p><input name="3" type="radio" value="0">Нет</p>
        <h2>4).    У вас много интересов?</h2>

        <p><input name="4" type="radio" value="1" checked>Да</p>
        <p><input name="4" type="radio" value="0">Нет</p>
        <h2>5).    Вы уважаемый человек?</h2>

        <p><input name="5" type="radio" value="1" checked>Да</p>
        <p><input name="5" type="radio" value="0">Нет</p>

        <h2>6).    Вы один ребенок в семье?</h2>
        <p><input name="6" type="radio" value="1" checked>Да</p>
        <p><input name="6" type="radio" value="0">Нет</p>

        <h2>7).    Были за границей?</h2>
        <p><input name="7" type="radio" value="1" checked>Да</p>
        <p><input name="7" type="radio" value="0">Нет</p>

        <h2>8).    Вам нравяться шумные компании?</h2>
        <p><input name="8" type="radio" value="1" checked>Да</p>
        <p><input name="8" type="radio" value="0">Нет</p>

        <h2>9).    Любите быть в центре внимания?</h2>
        <p><input name="9" type="radio" value="1" checked>Да</p>
        <p><input name="9" type="radio" value="0">Нет</p>

        <h2>10).    Вы трудоголик?</h2>
        <p><input name="10" type="radio" value="1" checked>Да</p>
        <p><input name="10" type="radio" value="0">Нет</p>

        <h2>11).    Вы конфликтный?</h2>
        <p><input name="11" type="radio" value="1" checked>Да</p>
        <p><input name="11" type="radio" value="0">Нет</p>

        <h2>12).    Дети цветы жизни?</h2>
        <p><input name="12" type="radio" value="1" checked>Да</p>
        <p><input name="12" type="radio" value="0">Нет</p>

        <h2>13).    Редко срываетесь на людей?</h2>
        <p><input name="13" type="radio" value="1" checked>Да</p>
        <p><input name="13" type="radio" value="0">Нет</p>

        <h2>14).    Вы любите театр?</h2>
        <p><input name="14" type="radio" value="1" checked>Да</p>
        <p><input name="14" type="radio" value="0">Нет</p>

        <h2>15).    Вам нравиться готовить самостоятельно?</h2>
        <p><input name="15" type="radio" value="1" checked>Да</p>
        <p><input name="15" type="radio" value="0">Нет</p>

        <h2>16).    Слушаете классическую музыку?</h2>
        <p><input name="16" type="radio" value="1" checked>Да</p>
        <p><input name="16" type="radio" value="0">Нет</p>

        <h2>17).    Переходите дорогу на красный свет если нет машин?</h2>
        <p><input name="17" type="radio" value="1" checked>Да</p>
        <p><input name="17" type="radio" value="0">Нет</p>

        <h2>18).    Всегда дарите подарки родным на праздники?</h2>
        <p><input name="18" type="radio" value="1" checked>Да</p>
        <p><input name="18" type="radio" value="0">Нет</p>

        <h2>19).    Добро всегда побеждает зло?</h2>
        <p><input name="19" type="radio" value="1" checked>Да</p>
        <p><input name="19" type="radio" value="0">Нет</p>
        <p>
            <button type="submit">Отправить</button>
        </p>
    </form>




