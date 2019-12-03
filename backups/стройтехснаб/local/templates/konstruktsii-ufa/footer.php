<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>





<div class="map" id="map">
    <? if ($type_client != 1) {?>
    <script charset="utf-8" async
        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8c49bff244c2bbab972d1c66a56451795f5984d776171e4f6961e3c59ca7cb51&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false">
    </script>

    <?}else{?>

    <a href="https://yandex.ru/maps/?um=constructor%3A8c49bff244c2bbab972d1c66a56451795f5984d776171e4f6961e3c59ca7cb51&amp;source=constructorStatic"
        target="_blank"><img
            src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3A8c49bff244c2bbab972d1c66a56451795f5984d776171e4f6961e3c59ca7cb51&amp;width=600&amp;height=294&amp;lang=ru_RU"
            alt="" style="border: 0;width: 100vw;" /></a>
    <?}?>




</div>

<div class="footer">

    <? if ($type_client != 1) {?>

    <div class="menu container">

        <div class="sts-blue menu__row flex-wrap">
            <div class="menu__element">
                <div class="logo-img"></div>
            </div>

            <div class="menu__element"> <a href="#constructions" class="link flex-text" onclick="Roller();">
                    Конструкции</a></div>
            <div class="menu__element"> <a href="#works" class="link flex-text" onclick="Roller();"> Работы</a></div>
            <div class="menu__element"> <a href="#preim" class="link flex-text" onclick="Roller();">
                    Преимущества</a></div>
            <div class="menu__element"> <a href="#sertificats" class="link flex-text" onclick="Roller();">
                    Качество</a></div>

        </div>

        <div class="menu__borderline"></div>

        <div class="menu__row sts-blue flex-wrap">
            <div class="menu__element  flex-text " onclick="Roller();">
                <p class="sts-blue"><span><svg class="menu__svg">
                            <use xlink:href="#map-pointer"></use>
                        </svg>
                    </span>
                    <span class="b sts-blue">Россия, Уфа</span></p>
                <a class="link sts-grey" href="#map">ул. Николая Дмитриева, 21/1</a>
            </div>
            <div class="menu__element  flex-text ">
                <p class="sts-blue"><span><svg class="menu__svg">
                            <use xlink:href="#clock-img"></use>
                        </svg></span><span class="b sts-blue">08:30 -
                        17:30</span></p>
                <p class=" sts-grey">сб.-вс. - выходной</p>
            </div>
            <div class="menu__element flex-text sts-blue "
                onclick="tema_cons('Заказать звонок','Заказать звонок','R1')">
                <p class=""><span><svg class="menu__svg">
                            <use xlink:href="#phone-img"></use>
                        </svg></span><span class="b sts-blue">+7 (347)
                        258-81-39</span></p>
                <p> <span class="link sts-grey">заказать звонок </span></p>
            </div>

            <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
            <script src="https://yastatic.net/share2/share.js" async="async"></script>

            <div class="menu__element  flex-text ">
                <p class="sts-blue"><span class="b sts-blue">Поделиться
                        в соцсетях</span></p>

                <div class="ya-share2 nt3" data-services="vkontakte,twitter,facebook,lj,odnoklassniki,whatsapp,
viber,moimir" data-counter></div>




            </div>



        </div>


    </div>





    <?}else{?>

    <div class="container">
        <div class="mobile-menu  ">

            <div class="menu-column ">

                <div class=" menu__element">
                    <div class="logo-img w-50 center"></div>
                </div>

                <div class="menu__element h1  w-100   h1-mobile">

                    <span class="h1-nm center">
                        <p class="sts-blue b tc pt2">+7 (347)
                            258-81-39</p>
                    </span>
                </div>

                <div class="menu__element h1 ph4  mv3  h1-mobile">
                    <div class="h5 dib center button white pb3"
                        onclick="tema_cons('Заказать звонок','Заказать звонок','R1')">
                        Заказать звонок
                    </div>
                </div>

            </div>

            <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
            <script src="https://yastatic.net/share2/share.js" async="async"></script>

            <div class="menu__element center w-60 mv3">

                <div class="ya-share2 center" data-services="vkontakte,facebook,odnoklassniki,twitter,whatsapp,
viber,moimir" data-limit="3"></div>
            </div>
        </div>

    </div>



    <?}?>
    <div class="footer-after ph3" style="background: #F3F3F3;">
        <div class="container pt2">
            <div class="info-block__inbox flex-wrap">

                <a class="maintained-by " href="https://site-rb.ru/" target="_blank"
                    style="text-decoration: none; color: currentcolor; ">
                    <div class="logo"></div>
                    <div class="text">
                        Интернет Решения<br>
                        Агентство performance маркетинга
                    </div>
                </a>

                <div class="maintained-by pb7-m">
                    <div class="text"> Отправляя любую форму на сайте, вы соглашаетесь <br> с <a
                            href="#popup_sogl" class="link">политикой конфиденциальности</a> данного
                        сайта</div>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="dn">

    <svg id="map-pointer" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">

        <g>
            <g transform="translate(0.000000,511.000000)
                        scale(0.100000,-0.100000)">
                <path
                    d="M4613,4998.8c-1695.4-213.9-3019.9-1597.3-3122-3263.3c-39.2-626,82.4-1248,349.3-1789.6c58.9-117.7,688.8-1098.9,1575.7-2452.8c1163.6-1775.9,1489.4-2260.6,1530.6-2274.3c33.4-11.8,72.6-11.8,106,0c41.2,13.7,368.9,500.4,1530.6,2274.3C7503.4-1103.9,8098-175.7,8158.8-52.1c400.3,816.3,467,1771.9,186.4,2631.4c-404.2,1234.3-1469.7,2152.6-2776.6,2392C5370.4,5006.6,4811.2,5022.4,4613,4998.8z
                            M5343,4684.8c404.2-47.1,710.3-133.4,1063.5-304.2C7315,3947,7946.9,3122.9,8152.9,2104.4c49-251.2,51-965.4,0-1206.8c-54.9-266.9-166.8-596.5-276.7-810.4c-86.3-170.7-2798.2-4338.6-2862.9-4401.4c-17.7-17.7-355.2,484.7-1397.1,2074.1C2860.7-1086.2,2193.5-46.2,2132.7,69.6c-115.8,225.7-229.6,551.4-286.5,828.1c-54.9,262.9-49.1,979.2,9.8,1250c157,718.2,527.9,1352,1049.8,1789.6c525.9,439.6,1075.3,669.1,1809.2,755.5C4846.5,4706.4,5176.2,4702.5,5343,4684.8z" />
                <path
                    d="M4754.3,3360.3c-712.3-129.5-1246-761.4-1246-1471.7c0-737.8,574.9-1383.4,1322.6-1481.5c608.3-82.4,1250,284.5,1522.7,869.3c410.1,875.2-145.2,1911.3-1118.5,2085.9C5054.5,3393.7,4934.8,3393.7,4754.3,3360.3z
                                M5401.8,3001.2c478.8-164.8,775.1-590.6,775.1-1112.6c0-543.6-329.7-985.1-853.6-1140.1c-160.9-47.1-486.6-47.1-647.5,0c-302.2,90.3-578.9,306.1-712.3,555.3c-184.5,349.3-186.4,820.2-2,1163.6C4226.4,2963.9,4842.6,3193.5,5401.8,3001.2z" />
            </g>
        </g>
    </svg>


    <svg id="phone-img" viewBox="0 0 19 18" xmlns="http://www.w3.org/2000/svg">
        <path d="M17.7153 12.7434C17.2378 11.9567 15.9778 11.6096
                            15.2691 11.4726C13.9758 11.2227 12.3091 11.2417
                            11.5012 11.8476C11.2353 12.0472 11.1028 12.4596
                            11.0719 13.1849C11.0678 13.2805 11.066 13.3738
                            11.0655 13.4622C9.69284 12.9321 8.42574 12.1412
                            7.34429 11.1394L6.86937 10.6672C5.86333 9.59331
                            5.0687 8.33512 4.53582 6.97245C4.62492 6.97201
                            4.71899 6.9702 4.81534 6.96616C5.54323 6.93542
                            5.95715 6.80394 6.15746 6.53991C6.7642 5.74017
                            6.78617 4.08886 6.5388 2.80715C6.40167 2.09636
                            6.05268 0.832716 5.25689 0.355123C4.46519 -0.120034
                            3.24154 -0.00540987 2.75216 0.066005C1.74256 0.21317
                            0.902627 0.569904 0.505266 1.02012C0.159007 1.41251
                            0.0373677 2.5323 0.00117311 2.99548C0.00019883
                            3.00765 -0.000142296 3.02017 5.25603e-05
                            3.0324C0.0596299 6.80516 1.51092 10.4078 4.08648
                            13.1754C4.08994 13.179 4.09345 13.1842 4.097
                            13.1877L4.81905 13.9087C4.8226 13.9123 4.82621
                            13.9219 4.82996 13.9253C7.61265 16.4858 11.2339
                            17.9026 15.0266 18C15.0286 18 15.0307 18 15.0327
                            18C15.0427 18 15.0528 17.9874 15.0628 17.9867C15.528
                            17.9507 16.6526 17.8177 17.0465 17.4741C17.4996
                            17.0787 17.8586 16.2427 18.0068 15.2378C18.0786
                            14.7505 18.194 13.532 17.7153 12.7434ZM17.2357
                            15.124C17.1192 15.9138 16.8372 16.6222 16.5344
                            16.8864C16.3986 16.9983 15.6942 17.142 15.0206
                            17.196C11.4285 17.1354 7.99973 15.7682 5.36328
                            13.3445L4.65205 12.6373C2.21528 10.0163 0.840712
                            6.60826 0.779819 3.03766C0.833648 2.36955 0.977744
                            1.6705 1.08984 1.53566C1.35625 1.23383 2.06952
                            0.953137 2.86478 0.837198C3.69891 0.715559 4.46197
                            0.786876 4.85597 1.02338C5.23614 1.25156 5.5878
                            1.99162 5.77369 2.95485C6.01765 4.21898 5.91896
                            5.54761 5.54489 6.05794C5.39382 6.16404 4.7089
                            6.22088 4.06646 6.18245C3.9967 6.16486 3.92134
                            6.16603 3.84803 6.19049C3.78402 6.21187 3.72926
                            6.24831 3.6863 6.29449C3.62438 6.35806 3.58366
                            6.44292 3.57674 6.5384C3.5708 6.62068 3.59101
                            6.69872 3.63013 6.76473C4.16891 8.33975 5.03081
                            9.79845 6.15186 11.0384C6.16511 11.0596 6.1806
                            11.0798 6.19834 11.0987C6.31384 11.2218 6.43187
                            11.3426 6.55215 11.4608C6.67125 11.5807 6.79284
                            11.6982 6.91702 11.8133C6.93606 11.8309 6.95638
                            11.8463 6.97762 11.8594C8.22421 12.9737 9.6907
                            13.8307 11.2739 14.3662C11.3398 14.4051 11.4178
                            14.4253 11.5 14.4191C11.5962 14.4121 11.6814 14.3707
                            11.7451 14.3079C11.7516 14.3018 11.7574 14.2951
                            11.7636 14.2885C11.7652 14.2866 11.7669 14.2847
                            11.7686 14.2827C11.803 14.2441 11.831 14.1989
                            11.8482 14.1468C11.8725 14.0735 11.8734 13.9984
                            11.8557 13.9289C11.8174 13.2917 11.8741 12.613
                            11.9802 12.463C12.4977 12.0879 13.8426 11.9908
                            15.1214 12.238C16.0825 12.4237 16.8213 12.7723
                            17.0492 13.1478C17.2863 13.5386 17.3578 14.2959
                            17.2357 15.124Z" />
    </svg>


    <svg id="clock-img" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M9 18C13.9706 18 18 13.9706 18 9C18 4.02944
                                13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706
                                4.02944 18 9 18ZM9 17.28C13.5729 17.28 17.28
                                13.5729 17.28 9C17.28 4.42708 13.5729 0.72 9
                                0.72C4.42708 0.72 0.72 4.42708 0.72 9C0.72
                                13.5729 4.42708 17.28 9 17.28ZM8.64
                                4.32H9.36V10.8H8.64V4.32ZM9.36
                                10.08H15.12V10.8H9.36V10.08Z" />
    </svg>
</div>

<div id="toTop"><img src="local/templates/konstruktsii-ufa/img/top.png" alt="Наверх"></div>


<div class="dm-overlay" id="popup_cons">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal">

                <div class="form-zayavka-modal">

                    <div id="form_ajax_consult"></div>
                    <span class="close"></span>
                    <div class=" b sts-blue tc w-100  h5" id="tema_obr_consult">Заявка</div>
                    <!-- заголовок окна -->
                    <div class="vvod-block">
                        <input type="text" class="tl w-100 input-modal h6  pb outline-none" placeholder="Ваше имя"
                            name="form_consult" id="fio_consult">

                        <input type="text" class="tl w-100 input-modal h6  pb2 outline-none" placeholder="Телефон"
                            name="form_consult" id="tel_consult">


                        <input class="tl w-100 input-modal h6  pb2 outline-none" type="text" placeholder="Электронная почта"
                            name="form_consult" id="mail_consult" style="">

                        <input class=" input h5 mh3 pb2 outline-none" type="hidden" id="metr_consult" value="">
                        <!-- поле для метрики -->
                        <input class=" input h5 mh3 pb2 outline-none" type="hidden" id="tema_consult" value="">
                        <!-- тема письма -->
                        <button onclick="SendPsylkoy_consult();" class="subm_but button mt4 h5 pt2 pb2 dib white"
                            id="tema_obr_consult_2" type="submit">Получить консультацию</button>
                        <div class=" mt3" style="font-size: 0.7em;    max-width: 390px;"> Нажимая кнопку, Вы
                            автоматически соглашаетесь с <a href="#popup_sogl" class="link"> политикой
                                конфиденциальности</a> и даете свое согласие на обработку персональных данных </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="dm-overlay" id="popup_sogl">
    <div class="dm-table">
        <div class="dm-cell">
            <div class="dm-modal relative " style="max-width:90%;">
            <a class="close" href="#"></a>

                <div class="h1-nm sts-blue w-100 tc">Политика конфиденциальности</div>
                <div class="flex-text"><p>Пользователь, находясь на сайте конструкции-уфа.рф, в т.ч. на его поддоменах и на всех страницах
                    сайта, принимает настоящее Согласие на обработку персональных данных.</p>
                <p>Принятием (акцептом) оферты Согласия является подтверждение факта согласия Пользователя со всеми
                    пунктами Согласия.</p>
                <p>Пользователь дает свое согласие владельцу/оператору конструкции-уфа.рф на обработку своих
                    персональных данных согласно условиями ниже.</p>
                <p>Условия обработки данных</p>

                <ol>
                    <li>Пользователь дает согласие на обработку своих персональных данных, как без использования средств
                        автоматизации, так и с их использованием.</li>
                    <li>Согласие дается на обработку следующих персональных данных:
                        <ul>
                            <li>фамилия, имя, отчество;</li>
                            <li>число, месяц и год рождения;</li>
                            <li>номер(а) телефона(ов);</li>
                            <li>адрес(а) электронной почты;</li>
                            <li>данные учетных записей в интернет-мессенджерах (программы для мгновенного обмена
                                сообщениями между пользователями);
                            </li>
                            <li>иные данные, предоставляемые пользователем.</li>


                        </ul>

                    </li>

                    <li> Пользователь дает согласие на передачу (в т.ч. в сторонние сервисы анализа посетителей Google,
                        Яндекс, Mail.ru, Facebook) и обработку своих данных (IP-адрес, предполагаемое географическое
                        положение, возраст, пол, версия браузера, разрешение дисплея, версия операционной системы и
                        вспомогательного программного обеспечения, модель устройства, ресурсы, поисковые системы, фразы,
                        баннеры, с которых был переход на сайт, список посещённых страниц и проведённое время на сайте).
                    </li>

                    <li>Целью обработки персональных данных является предоставление пользователю товаров и услуг,
                        проведение рекламных кампаний и маркетинговых исследований, в том числе смс- и email-рассылок.
                    </li>
                    <li>Основанием для обработки персональных данных являются:
                        <ul>
                            <li>— Конституция Российской Федерации.</li>
                            <li>— Федеральный закон от 27.07.06 № 152-ФЗ «О персональных данных».</li>
                            <li>— Федеральный закон от 13.03.06 № 38-ФЗ «О рекламе».</li>
                        </ul>
                    </li>


                    <li>В ходе обработки с персональными данными будут совершены следующие действия (операции): сбор,
                        запись, систематизация, накопление, хранение, уточнение (обновление, изменение), извлечение,
                        использование, передача (распространение, предоставление, доступ, публикация), обезличивание,
                        блокирование, удаление, уничтожение.
                    </li>
                    <li>Передача персональных данных, скрытых для общего просмотра, третьим лицам не производится, за
                        исключением случаев, предусмотренных законодательством Российской Федерации.
                    </li>
                    <li>Пользователь подтверждает, что указанные им персональные данные принадлежат лично ему.
                    </li>
                    <li>Персональные данные обрабатываются до ликвидации Портала. Хранение персональных данных
                        осуществляется согласно Федеральному закону №125-ФЗ «Об архивном деле в Российской Федерации» и
                        иным нормативно-правовым актам в области архивного дела и архивного хранения.
                    </li>
                    <li>Пользователь согласен на получение информационных сообщений от Портала по электронной почте.
                    </li>
                    <li>Сайт вправе продолжить обработку персональных данных без согласия Пользователя при наличии
                        оснований, указанных в пунктах 2 – 11 части 1 статьи 6, части 2 статьи 10 и части 2 статьи 11
                        Федерального закона №152-ФЗ «О персональных данных» от 27.07.2006 г.
                    </li>
                    <li>Настоящее согласие является бессрочным, и действует все время до момента прекращения обработки
                        персональных данных, указанных в данном Согласии.
                    </li>

                </ol>
</div>

            </div>
        </div>
    </div>
</div>



<? if ($type_client != 1) {?>
<script src="local/templates/konstruktsii-ufa/js/lightbox-plus-jquery.min.js"></script>

<?};?>

<script src="local/templates/konstruktsii-ufa/slick/slick.min.js"></script>

<script src="local/templates/konstruktsii-ufa/js/jquery.maskedinput.js"></script>


<script>
$('#tel_vopros').mask('+7 (999) 999-99-99');
$('#tel_consult').mask('+7 (999) 999-99-99');
setTimeout(function() {
    $('.no-hidden').css('opacity', '1')
}, 5);
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() != 0) {
            $('.button-top').css({
                "padding": "10px 25px",
                "margin-top": "12px"
            });
            $('#toTop').fadeIn();
            $('.menu ul').css({
                'padding': '10px 0',
                'margin-top': '13px'
            });
            // $('.menu').css({'top':'65px','height':'64px'});
            $('.top').css('padding', '6px 0px');
        } else {
            $('#toTop').fadeOut();
            $('.button-top').css({
                "padding": "13px 25px",
                "margin-top": "20px"
            });
            $('.menu ul').css({
                'padding': '20px 0px',
                'margin-top': '13px'
            });
            // $('.menu').css({'top':'94px','height':'87px'})
            $('.top').css('padding', '20px 0px');
        }
    });
    $('#toTop').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
    });
});
// $('.menu').addClass("menu-scroll");$('.top').addClass("menu-scroll");
// $('.menu').removeClass("menu-scroll");$('.top').removeClass("menu-scroll");
function tema_cons(x, y, z) {
    // if (z == '5' || z == '9' || z == '2') {
    //     $("#mail_consult").css('display', 'block')
    // } else {
    //     {
    //         $("#mail_consult").css('display', 'none')
    //     }
    // };



    $("#popup_cons .dm-modal").addClass("pullDown"); /*  появление окна   */

    // if (y == 'Оставить заявку'){
    //     $("#time_consult").removeClass("display-none");
    // } else {
    //     $("#time_consult").addClass("display-none");
    // }

    ;
    $("#popup_cons").fadeIn(); /*  появление окна   */
    $("#metr_consult").val(z); /*  запоминание метрики   */
    $("#tema_obr_consult").text(y); /*  заголовок окна   */

    $("#tema_obr_consult_2").text(y.split(" ")[0]); /*  Надпись на кнопке  */
    $("#tema_consult").val('"' + x + '"'); /* тема письма  */
    $(".close").click(function() /*  закрытие окна   */ {
        $("#popup_cons .dm-modal").removeClass("pullDown");
        $("#popup_cons").fadeOut(300);
    });

};





function SendPsylkoy_consult() {
    err = 0;
    t1 = $("#fio_consult").val();
    t2 = $("#tel_consult").val();
    t3 = $("#mail_vopros").val();
    if (t1 == '') {
        $("#fio_consult").css({
            "border-bottom": "solid 1px #f00"
        })
        err = 1;
    }
    if (t2 == '') {
        $("#tel_consult").css({
            "border-bottom": "solid 1px #f00"
        })
        err = 1;
    }
    if (t3 == '') {
        $("#mail_consult").css({
            "border-bottom": "solid 1px #f00"
        })
        err = 1;
    }
    if (err == '0') {
        $.ajax({
            type: "POST",
            url: "/ajax_script/os_zvonok.php",
            data: 'name=' + $('#fio_consult').val() + '&tel=' + $('#tel_consult').val() +
                '&mail=' + $('#mail_consult').val(),
            success: function(response) {
                $("#form_ajax_consult").html(response);
                // yaCounter47536162.reachGoal('R2');
                // ga('send', 'event', 'submit', 'R2');
            }
        });
    }
};





function SendPsylkoy_vopros() {
    err = 0;
    t1 = $("#fio_vopros").val();
    t2 = $("#tel_vopros").val();
    // t3 = $("#mail_vopros").val();
    if (t1 == '') {
        $("#fio_vopros").css({
            "border-bottom": "solid 1px #f00"
        })
        err = 1;
    }
    if (t2 == '') {
        $("#tel_vopros").css({
            "border-bottom": "solid 1px #f00"
        })
        err = 1;
    }
    // if (t3 == '') {
    //     $("#mail_vopros").css({
    //         "border-bottom": "solid 1px #f00"
    //     })
    //     err = 1;
    // }
    if (err == '0') {
        $.ajax({
            type: "POST",
            url: "/ajax_script/os_vopros.php",
            data: 'name=' + $('#fio_vopros').val() + '&tel=' + $('#tel_vopros').val(),
            success: function(response) {
                $("#forma-vopros").html(response);
                // yaCounter47536162.reachGoal('R2');
                // ga('send', 'event', 'submit', 'R2');
            }
        });
    }
};
</script>


<!-- <link rel="stylesheet" property=stylesheet href="/local/templates/konstruktsii-ufa/css/lightbox.min.css"> -->

<!-- Global site tag (gtag.js) - Google Analytics -->



<? if ($type_client != 1) {?>


<script>
$(document).ready(function() {
    $('.slider1').slick({
        dots: false,
        centerMode: false,
        variableWidth: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        fade: false,
        prevArrow: $('.sts-arrow-next'),
        nextArrow: $('.sts-arrow-prev'),
        responsive: [{
                breakpoint: 1028,
                settings: {
                    slidesToShow: 3,
                }
            },

            {
                breakpoint: 788,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });



    var $status = $('.count-slde');
    var $slickElement = $('.slider1');
    $slickElement.on('init reInit afterChange', function(event,
        slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.text(i + '/' + slick.slideCount);
    });
});
</script>

<script>
$(document).ready(function() {
    $('.slider2').slick({
        dots: false,
        centerMode: false,
        variableWidth: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        fade: false,
        prevArrow: $('.san2'),
        nextArrow: $('.sap2'),
        responsive: [{
                breakpoint: 1028,
                settings: {
                    slidesToShow: 3,
                }
            },

            {
                breakpoint: 788,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });



    var $status = $('.count-slde2');
    var $slickElement = $('.slider2');
    $slickElement.on('init reInit afterChange', function(event,
        slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.text(i + '/' + slick.slideCount);
    });
});
</script>





<?}else{?>

<script>
$(document).ready(function() {
    $('.slider1').slick({
        centerMode: true,
        dots: false,
        variableWidth: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: false,
        prevArrow: $('.mobile-next'),
        nextArrow: $('.mobile-prev')
    });



    var $status = $('.count-slde');
    var $slickElement = $('.slider1');
    $slickElement.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.text(i + '/' + slick.slideCount);
    });
});
</script>

<script>
$(document).ready(function() {
    $('.slider2').slick({
        centerMode: true,
        dots: false,
        variableWidth: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: false,
        prevArrow: $('.san2-m'),
        nextArrow: $('.sap2-m')
    });



    var $status = $('.count-slde2');
    var $slickElement = $('.slider2');
    $slickElement.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.text(i + '/' + slick.slideCount);
    });
});
</script>

<!-- link-roller -->


<script>
$(function() {
    $('a[href*=#]').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body').animate({
                    scrollTop: targetOffset
                }, 500); //скорость прокрутки
                return false;
            }
        }
    });
});
</script>


<?}?>

</body>

</html>