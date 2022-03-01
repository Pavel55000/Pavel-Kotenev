<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dark.css">
    <title>Title</title>
</head>
<body class="body">
<?
include 'header.php';
?>
<div class="row inner-content">
    <?php
    echo "--------------------------задание 1----------------- <br />";
    function one($i)
    {
        for ($i = 5; $i <= 13; $i++)
            echo $i . "<br />";
    }
    one(5);
    echo "--------------------------2-while-------------------- <br />";
    $counter = 1000;
    $repeat = 0;
    while ($counter > 50) {
        echo $counter . "<br />";
        $counter /= 2;
        $repeat++;
    }
    echo " Итераций: $repeat" . "<br />";

    echo "--------------------------2-for------------------------ <br />";
    for ($counter = 1000, $repeat = 0; $counter > 50; $counter /= 2, $repeat++) {
        echo $counter . "<br />";
    }
    echo " Итераций: $repeat" . "<br />";

    echo "--------------------------3 задаие------------------- <br />";
    function three($i=0, $b=0){
        for (; $b<=10-$i, $i<=10; $i++)
            echo $i;
    }
    three(0, 0)
    ?>
</div>
<?
include 'footer.php';
?>
</body>
</html>

