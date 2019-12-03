<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html lang=ru>

<head>
    <?
    $APPLICATION->ShowHead();
    use Bitrix\Main\Page\Asset;
    // CSS
    // Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
    // Asset::getInstance()->addCss('/local/templates/konstruktsii-ufa/js/plugins/fancybox/source/jquery.fancybox.css');
    Asset::getInstance()->addCss('/local/templates/konstruktsii-ufa/slick/slick.css');
    Asset::getInstance()->addCss('/local/templates/konstruktsii-ufa/slick/slick-theme.css');
    Asset::getInstance()->addCss('/local/templates/konstruktsii-ufa/lightbox.min.css');
    Asset::getInstance()->addCss('/local/templates/konstruktsii-ufa/sts-style.css');
    Asset::getInstance()->addCss('/local/templates/konstruktsii-ufa/tachions-pos.css');
    // JS
    CJSCore::Init(array("jquery"));
    // Asset::getInstance()->addJs('/local/templates/konstruktsii-ufa/slick/slick.min.js');
    // Asset::getInstance()->addJs('/local/templates/konstruktsii-ufa/js/jquery.maskedinput.js');
    // Asset::getInstance()->addJs('/local/templates/konstruktsii-ufa/js/lightbox-plus-jquery.min.js');
    // Asset::getInstance()->addJs('/local/templates/konstruktsii-ufa/js/plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js');
    //  Asset::getInstance()->addJs('/local/templates/konstruktsii-ufa/js/plugins//fancybox/source/jquery.fancybox.pack.js');
    // Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.sudoSlider.min.js');
    // Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/myscripts.js');
    //STRING
    Asset::getInstance()->addString("<link rel='shortcut icon' href='/local/favicon.ico'/>");
    Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
    Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='IE=edge'>");
    //Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext' rel='stylesheet'>");
    ?>
    <title>
        <?$APPLICATION->ShowTitle()?>
    </title>
    <script type='application/ld+json'>
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "@id": "#website",
        "url": "http://SITE.ru/",
        "name": "СтройТехСнаб",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "http://SITE.ru/search/index.php",
            "query-input": "required name=search_term_string"
        }
    }
    </script>
    <script type='application/ld+json'>
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "url": "hhttps://конструкции-уфа.рф/",
        "sameAs": []
        "@context": "https://schema.org/",

        "name": "СтройТехСнаб",
        "telephone": "+ 7 (347) 253-98-70",
        "email": "2539870@mail.ru",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Уфа",
            "streetAddress": "ул. Николая Дмитриева, 21/1"
        },
        "@id": "#organization",
        "name": "Домен - Описание",
        "logo": "https://конструкции-уфа.рф/local/templates/konstruktsii-ufa/img/logo.jpg"
    }
    </script>
    <?
global $type_client;
$type_client = preg_match("/(iphone|android|operamobi|blackberry)/i",$_SERVER['HTTP_USER_AGENT']);
?>

</head>

<body>
    <?$APPLICATION->ShowPanel();?>


    <div class="header mb3-ns ">
        <? if ($type_client != 1) {?>
        <div class="menu container  ">

            <div class="menu__row flex-wrap">
                <div class="menu__element">
                    <a href="/"><div class="logo-img"></div></a>
                </div>
                <div class="menu__element flex-text">
                    <p class="sts-blue"><span><svg class="menu__svg">
                                <use xlink:href="#map-pointer"></use>
                            </svg>
                        </span>
                        <span class="b sts-blue">Россия, Уфа</span></p>
                    <a class="sts-grey link" href="#map">ул. Николая Дмитриева, 21/1</a>
                </div>
                <div class="menu__element flex-text">
                    <p class="sts-blue"><span><svg class="menu__svg">
                                <use xlink:href="#clock-img"></use>
                            </svg></span><span class="b sts-blue">08:30 -
                            17:30</span></p>
                    <p class="sts-grey">сб.-вс. - выходной</p>
                </div>
                <div class="menu__element flex-text sts-blue "
                    >
                    <a href="tel:+73472588139" style="text-decoration:none;color:currentcolor;"><span><svg class="menu__svg">
                                <use xlink:href="#phone-img"></use>
                            </svg></span><span class="b sts-blue">+7 (347)
                            258-81-39</span></a>
                    <p class="sts-grey"> <span class="link" onclick="tema_cons('Заказать звонок','Заказать звонок','R1')"  >заказать звонок </span></p>
                </div>
            </div>

            <div class="menu__borderline"></div>

            <div class="menu__row sts-blue flex-wrap nav">
                <div class="menu__element"> <a href="#constructions" class="link flex-text topLink">
                        Конструкции</a></div>
                <div class="menu__element"> <a href="#works" class="link flex-text topLink"> Работы</a></div>
                <div class="menu__element"> <a href="#preim" class="link flex-text topLink">
                        Преимущества</a></div>
                <div class="menu__element"> <a href="#sertificats" class="link flex-text topLink">
                        Качество </a></div>
            </div>


        </div>

        </div>

        <div style="height:124px;width:100%" ></div>
        <?}else{?>

        <div class="mobile-menu container ">

            <div class="menu__row flex-wrap">

                <div class=" menu__element">
                    <div class="logo-img w-50"></div>
                </div>
                <a href="tel:+73472588139" class="red-phone dn" >
                    <span class="sts-red h4"><svg class="menu__svg mt2">
                            <use xlink:href="#phone-img"></use>
                        </svg></span></a >

                <div class="menu__element">


                    <div class="collapse-button strings"
                        onclick="this.className = (this.className == 'collapse-button strings' ? 'collapse-button cross' : 'collapse-button strings');document.querySelector('.menu-column').className =(document.querySelector('.menu-column').className == 'menu-column dn'? 'menu-column view':'menu-column dn');
                        document.querySelector('.red-phone').className =(document.querySelector('.red-phone').className == 'red-phone dn'? 'menu__element red-phone':'red-phone dn') ">
                        <div class="st-view">☰</div>
                        <div class="cr-view">✕</div>
                    </div>
                </div>

            </div>
        </div>

        <div class="menu-column dn">
            <div class="  pb3 menu__row sts-blue flex-column">
                <div class="menu__elemen h1 b w-100 pl3  h1-mobile ">
                    <a href="#constructions" class="link fl pa2 topLink">
                        Конструкции</a>
                </div>

                <div class="menu__borderline ma0"></div>

                <div class="menu__element h1 b w-100 pl3  h1-mobile ">
                    <a href="#works" class="link fl pa2 topLink"> Работы</a>
                </div>

                <div class="menu__borderline ma0">

                </div>
                <div class="menu__element h1 b w-100 pl3  h1-mobile ">
                    <a href="#preim" class="link fl pa2 topLink">
                        Преимущества</a>
                </div>
                <div class="menu__borderline ma0"></div>
                <div class="menu__element h1 b w-100 pl3  h1-mobile ">
                    <a href="#sertificats" class="link fl pa2 topLink">
                        Качество </a>
                </div>
                <div class="menu__borderline ma0 mb2" style="height: 10px;
background: #F2F2F2;"></div>


                <div class="menu__element h1  w-100 pl3  h1-mobile">
                    <span class="sts-red fl h2 mt2 ml2"><svg class="menu__svg">
                            <use xlink:href="#map-pointer"></use>
                        </svg>
                    </span> <span class="h1-nm">
                        <p class="sts-blue tl">
                            Россия, Уфа</p>
                        <a class="sts-blue tl link"href="#map">ул. Николая Дмитриева, 21/1</a>
                    </span>




                </div>
                <div class="menu__element h1  w-100 pl3  h1-mobile">
                    <span class="sts-red fl h2 mt2 ml2"><svg class="menu__svg">
                            <use xlink:href="#clock-img"></use>
                        </svg></span>
                    <span class="h1-nm">
                        <p class="sts-blue tl">08:30 -
                            17:30</p>
                        <p class="sts-blue tl">сб.-вс. - выходной</p>
                    </span>
                </div>

                <div class="menu__element h1  w-100 pl3  h1-mobile"
                    onclick="tema_cons('Заказать звонок','Заказать звонок','R1')">
                    <span class="sts-red fl h2 mt2 ml2"><svg class="menu__svg">
                            <use xlink:href="#phone-img"></use>
                        </svg></span>
                    <span class="h1-nm">
                        <p class="sts-blue tl pt2">+7 (347)
                            258-81-39</p>
                    </span>
                </div>



            </div>




        </div>

        </div>

        <div style="height:54px;width:100%" ></div>

        <?}?>

    