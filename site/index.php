<?php
$me = 'I am 24 years old, born and raised in Orenburg, graduated from school, went to study and work in St. Petersburg.
                            After the academy, in connection with the changed labor market, there was a practical interest in programming.
                            On the recommendations of my friends who went through school, I decided to study.';
$firsphrase = mb_substr($me, 0, 17);
$col=['#3394be','#763380', '#b5da12', '#06ab88', '#3a312b', '#4e4e54', '#80635a', '#412a83'];
$thiscolor=array_rand($col);
$firsphraseA = "<span style=\"color:$col[$thiscolor]\">$firsphrase</span>";
$feedback = 'I like the school. At first, I did not always keep up with what was happening in the lesson,
                            because Im not used to working with consoles and interfaces of development programs.
Homework allows you to fully understand what Regina is talking about.';
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
$feedback = implode(' ', $feedarr); //собираем
?>

<body class="body">
<wrapper class="wrapper">
    <? include 'header.php'; ?>
    <div>
        <div class="row inner-content">
            <div></div>
            <div class="hw_">

            </div>
            <div class="columns layout1">
                <card class="card-website columns">
                    <card class="card card-website">
                        <section CLASS="card-section">PHOTO</section>
                        <div class="imgcard2_"><img src="img/photo.jpg" class="img" alt="my photo"></div>

                    </card>
                </card>
                <card class="card-website columns">
                    <card class="card card-website">
                        <section CLASS="card-section">ABOUT ME</section>
                        <div class="imgcard2_ about"><?=$firsphraseA?>, born and raised in Orenburg, graduated from school, went to study and work in St. Petersburg.
                            After the academy, in connection with the changed labor market, there was a practical interest in programming.
                            On the recommendations of my friends who went through school, I decided to study.</div>

                    </card>
                </card>
                <card class="card-website columns">
                    <card class="card card-website">
                        <section CLASS="card-section">ABOUT SCOOL</section>
                        <div class="imgcard2_ about"><?=$feedback?></div>

                    </card>
                </card>
                <card class="card-website columns">
                    <card class="card card-website">
                        <div class="imgcard_"><img src="img/CHECH.jpeg" class="img"></div>
                        <section CLASS="card-section">CHECH</section>
                    </card>
                </card>
                <card class="card-website columns">
                    <card class="card card-website">
                        <div class="imgcard_"><img src="img/SWISS.jpg" class="img"></div>
                        <section CLASS="card-section">SWISS</section>
                    </card>
                </card>
                <card class="card-website columns">
                    <card class="card card-website">
                        <div class="imgcard_"><img src="img/ITALY.jpg" class="img"></div>
                        <section CLASS="card-section">ITALY</section>
                    </card>
                </card>
                <card class="card-website columns">
                    <card class="card card-website">
                        <div class="imgcard_"><img src="img/RUSSIA.jpg" class="img"></div>
                        <section CLASS="card-section">RUSSIA</section>
                    </card>
                </card>
                <card class="card-website columns">
                    <card class="card card-website">
                        <div class="imgcard_"><img src="img/GREECE.png" class="img"></div>
                        <section CLASS="card-section">GREECE</section>
                    </card>
                </card>
                <card class="card-website columns">
                    <card class="card card-website">
                        <div class="imgcard_"><img src="img/MAROCCO.jpg" class="img"></div>
                        <section CLASS="card-section">MAROCCO</section>
                    </card>
                </card>
                <card class="card-website columns">
                    <card class="card card-website">
                        <div class="imgcard_"><img src="img/INDIA.htm" class="img"></div>
                        <section CLASS="card-section">INDIA</section>
                    </card>
                </card>
                <card class="card-website columns">
                    <card class="card card-website">
                        <div class="imgcard_"><img src="img/JAPAN.jpg" class="img"></div>
                        <section CLASS="card-section">JAPAN</section>
                    </card>
                </card>
                <card class="card-website columns">
                    <card class="card card-website">
                        <div class="imgcard_"><img src="img/AUSTRALIA.png" class="img"></div>
                        <section CLASS="card-section">AUSTRALIA</section>
                    </card>
                </card>
                <card class="card-website columns">
                    <card class="card card-website">
                        <div class="imgcard_"><img src="img/CHILI.jpg" class="img"></div>
                        <section CLASS="card-section">CHILI</section>
                    </card>
                </card>
                <card class="card-website columns">
                    <card class="card card-website">
                        <div class="imgcard_"><img src="img/PORTUGAL.jpg" class="img"></div>
                        <section CLASS="card-section">PORTUGAL</section>
                    </card>
                </card>
                <card class="card-website columns">
                    <card class="card card-website">
                        <div class="imgcard_"><img src="img/SWEDEN.jpg" class="img"></div>
                        <section CLASS="card-section">SWEDEN</section>
                    </card>
                </card>
            </div>
            <div></div>
        </div>
    </div>
    <? include 'footer.php'; ?>
</wrapper>
</body>
</html>

