<?php
include 'header.php';
?>
    <main>
        <div>Привет, <?= $_SESSION['login'] . "!" ?></div>
        <table class="additional-pages">
            <tr>
                <th><h2>Страницы</h2></th>
            </tr>
            <tr>
                <td>
                    <a href="fact.php" title="Fact">Факт</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="bitrix.php" title="Bitrix">Битрикс</a>
                </td>
            </tr>
        </table>
        <?php if (isset($_COOKIE['lastVisitedPage'])) { ?>
            <h2>Последний раз вы посещали страницу <?= $_COOKIE['lastVisitedPage'] ?></h2>
        <?php } ?>
    </main>
<?php
include 'footer.php';
?>