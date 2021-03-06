<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./css/lib.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>VOESSEN</title>
</head>
<body class="voessen">
<div class="voessen__main">
    <?php
    include_once __DIR__ . '/inc/header.php'
    ?>

    <div class="container">
        <ul class="nav voessen__breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><span>Оплата и доставка</span></li>
        </ul>
        <header class="voessen__title-box voessen__text">
            <h1>Оплата и доставка</h1>
        </header>
        <div class="voessen__text">
            <div class="row">
                <div class="col-lg-6 tpad15 ">
                    <div class="voessen__text__caption-ico">
                        <svg width="43" height="48">
                            <use xlink:href="#svg-oplata"></use>
                        </svg>
                        <span>Оплата</span>
                    </div>
                    <p>Товары и услуги ООО "Фёссен Эм Ай И" можно оплатить следующими способами:</p>
                    <p><b>1.</b> Безналично по выставленному счету через бухгалтерию вашей компании.</p>
                    <p>Валюты, в которых применяются безналичные расчеты с контрагентами: российский рубль (RUR), евро
                        (EUR).</p>
                    <p><b>2.</b> За наличные деньги, в том числе картами платежных систем VISA, MasterCard, Maestro, МИР (в том
                        числе с применением бесконтактных платежных технологий ApplePay и SamsungPay) в офисе компании
                        Фёссен по адресу г. Москва, ш. Энтузистов, 7А, БЦ Рогожская Застава.</p>
                    <p>Наличные расчеты с контрагентами производятся только в националной валюте — российский рубль.</p>
                    <p><b>3.</b> Наличными дистанционно с помощью Яндекс.Кассы, но с некоторыми ограничениями по суммам
                        единоразового платежа:</p>
                    <p><b>до 250 000 ₽</b> — банковскими картами (<a href="">скачать инструкцию</a> или <a href="">посмотреть видео</a>)</p>
                    <p><b>до 16 000 / 60 000 / 250 000 ₽</b> — с помощью Яндекс.Денег, сумма зависит от статуса вашего кошелька
                        (<a href="">скачать инструкцию</a> или <a href="">посмотреть видео</a>)</p>
                    <p><b>до 250 000 ₽</b> — QIWI Wallet (<a href="">скачать инструкцию</a> или <a href="">посмотреть видео</a>)</p>
                    <p><b>до 60 000 ₽</b> — WebMoney (<a href="">скачать инструкцию</a> или <a href="">посмотреть видео</a>)</p>
                    <p><b>до 15 000 ₽</b> — наличными в терминалах (<a href="">скачать инструкцию</a> или <a href="">посмотреть видео</a>)</p>
                    <p><b>до 200 000 ₽</b> — Альфа–Клик (<a href="">скачать инструкцию</a> или <a href="">посмотреть видео</a>)</p>
                    <p><b>до 500 000 ₽</b> — Сбербанк Онлайн (<a href="">скачать инструкцию</a> или <a href="">посмотреть видео</a>)</p>
                    <p>Для получения ссылки или письма для дистанционной наличной оплаты счета, и вообще по любым
                        вопросам обращайтесь к нам в компанию: перейти в <a href="">контакты</a>.</p>
                </div>
                <div class="col-lg-6 tpad15">
                    <div class="voessen__text__caption-ico">
                        <svg width="48" height="38">
                            <use xlink:href="#svg-dostavka"></use>
                        </svg>
                        <span>Доставка</span>
                    </div>
                    <div>
                        <p>Мы осуществляем безопасную доставку продукции по всему миру.</p>
                        <p>Это значит что мы оперативно доставляем продукцию по всей (даже на Сахалин и в Калининград, даже морем и, в некоторых случаях, самолетом) России, по всему СНГ, Таможенному союзу, а так же в любые другие страны мира.</p>
                        <p>Размер вашей покупки совершенно не важен для нашей службы логистики.</p>
                        <p>Мы привезем вам хоть 1 маленький баллон, хоть одну прокладку от регулятора давления.</p>
                        <p>У нас есть собственный автопарк, а так же среди наших логистических партнеров самые надежные компании — транспортные компании и курьерские службы с выгодными тарифами.</p>
                        <p>Пожалуйста, обращайтесь к нам для расчета стоимости доставки планиуемой вами покупки по нашим
                            <a href="">контактам</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php

    include_once __DIR__ . '/inc/footer.php';
    include_once __DIR__ . '/inc/sprite.php';
    ?>

</div>
<?php
include_once __DIR__ . '/inc/script.php';
?>
</body>
</html>