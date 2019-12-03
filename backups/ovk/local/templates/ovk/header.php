<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>




<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">

<head>

    <?
     $APPLICATION->ShowHead();
     use Bitrix\Main\Page\Asset;  ?>


<!-- 
    <meta http-equiv="content-type" content="text/html; charset=cp1251" /> -->
    <title>Кондиционеры Уфа, купить, цена. Система вентиляции, обслуживание, монтаж в Уфе</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="DESCRIPTION" content="Мы предлагаем кондиционеры в Уфе, настенные, промышленные и полупромышленные.  Монтаж и установка кондиционеров. Комплексные решения по системам кондиционирования, вентиляции и отопления. Монтаж вентиляции и кондиционеров под ключ." />
<meta name="KEYWORDS" content="Главная" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="canonical" href="https://ovksistema.ru/" />
<meta property = "og:title" content = 'Кондиционеры Уфа, купить, цена. Система вентиляции, обслуживание, монтаж в Уфе' />
<meta property = "og:type" content = "website" />
<meta property = "og:image" content = "https://new.ovksistema.ru/obk.png" />
<meta property = "og:description" content = "Мы предлагаем кондиционеры в Уфе, настенные, промышленные и полупромышленные.  Монтаж и установка кондиционеров. Комплексные решения по системам кондиционирования, вентиляции и отопления. Монтаж вентиляции и кондиционеров под ключ." />	
<meta name="mailru-verification" content="d0972e22c0a58ed7" />
<meta name='wmail-verification' content='2fd867c223de929bf7df598723bedd28' />
<meta property = "og:url" content = "https://new.ovksistema.ru/" />
    <script type="application/ld+json">
    {
        "@context": "https://schema.org/",
"@type": "Organization",
"name": "ОВК Система",
"telephone": "+7 (347) 266-19-40",
"email": "ovksistema@bk.ru",
"address": {
"@type": "PostalAddress",
"addressLocality": "Уфа",
"streetAddress": "ул. Заводская 11/1 "
        }
    }
    </script>
    <style>
    .kat_cena {
        margin: 10px 0;
        font-weight: 900;
    }

    .men-all {
        z-index: 99;
        width: 100%;
        display: flex;
        position: fixed;
        top: 0;
        justify-content: space-between;
        align-items: center;
        background: #FFF;
    }

    .no-hidden {
        opacity: 1;
        overflow: hidden;
        transition: 0.1s ease-in-out;
        -moz-transition: 0.1s ease-in-out;
        -webkit-transition: 0.1s ease-in-out;
    }

    @font-face {
        font-family: 'Roboto Medium';
        src: url('<?=SITE_TEMPLATE_PATH?>/css/fonts/roboto-medium.ttf');
    }

    @font-face {
        font-family: 'Roboto Light';
        src: url('<?=SITE_TEMPLATE_PATH?>/css/fonts/roboto-light.ttf');
    }

    @font-face {
        font-family: 'Roboto Regular';
        src: url('<?=SITE_TEMPLATE_PATH?>/css/fonts/roboto-regular.ttf');
    }

    @font-face {
        font-family: 'Roboto Bold';
        src: url('<?=SITE_TEMPLATE_PATH?>/css/fonts/roboto-bold.ttf');
    }

    body,
    div,
    p {
        padding: 0;
        margin: 0;
    }

    body {
        background: #fff;
        font-family: 'Roboto Regular'
    }

    button,
    a {
        transition: 0.3s ease all;
        cursor: pointer;
        font-family: 'Roboto Regular';
    }

    button:focus {
        outline: none;
    }

    strong,
    b {
        font-family: 'Roboto Bold';
    }

    .none-h1 {
        display: none;
    }

    .block-width {
        max-width: 1100px;
        margin: 0 auto;
        display: block;
        position: relative;
    }

    .clear {
        clear: both;
    }

    .otstup-block {
        padding-top: 176px;
    }

    .inline-block {
        display: inline-block;
        width: 100%;
    }

    .text-center {
        text-align: center;
    }

    .container {
         padding: 45px 0px;
        display: inline-block;
        width: 100%; 
    }

    .zag-container {
        margin-top: 45px;
        font-size: 24px;
        margin-bottom: 45px;
        text-align: center;
        font-size: 32px;
    }

    .bottom-ser {
        border-bottom: 1px solid #bdbdbd;
    }

    .content-site {
        line-height: 1.8em;
        font-family: 'Roboto Light';
    }

    .top {
        width: 1100px;
        display: inline-block;
        padding: 20px 0px;
        border-bottom: 2px solid #E0E0E0;
    }

    .logo {
        float: left;
        width: 204px;
        height: 46px;
        background: url(<?=SITE_TEMPLATE_PATH?>/images/obk.png) no-repeat;
        background-size: contain;
        cursor: pointer;
    }

    .right-top {}

    .line-top {
        float: right;
        margin-left: 30px;
        font-size: 14px;
        color: #4F4F4F;
        margin-top: 20px;
    }

    .ml {
        margin-left: 0px
    }

    .line-rezhim {}

    .icon {
        float: left;
        width: 30px;
        height: 30px;
        position: relative;
        top: -5px;
        margin-right: 10px;
    }

    .icon-1 {
        background: url(<?=SITE_TEMPLATE_PATH?>/images/adress.png) no-repeat;
        background-size: contain;
    }

    .icon-2 {
        background: url(<?=SITE_TEMPLATE_PATH?>/images/phone.png) no-repeat;
        background-size: contain;
    }

    .icon-3 {
        background: url(<?=SITE_TEMPLATE_PATH?>/images/mail.png) no-repeat;
        background-size: contain;
    }

    .icon-4 {
        background: url(<?=SITE_TEMPLATE_PATH?>/images/rezhim.png) no-repeat;
        background-size: contain;
    }

    .click-1 {
        cursor: pointer;
        transition: 0.3s ease all;
    }

    .click-1:hover {
        color: #eb5757;
    }

    .menu {
        position: fixed;
        width: 100%;
        top: 94px;
        background: #fff;
        z-index: 999;
        display: inline-block;
        left: 0;
        height: 87px;
        box-shadow: 0 16px 16px -16px rgba(0, 0, 0, 0.25);
    }

    .menu-scroll {
        top: 0;
    }

    .menu ul {
        margin: 0px;
        padding: 20px 0px;
        float: left;
        width: 76%;
        list-style: none;
        margin-top: 13px;
    }

    .menu li {
        float: left;
        margin-right: 7%;
        position: relative;
    }

    .menu li:nth-child(6) {
        margin-right: 0;
    }

    .menu a {
        color: #000;
        text-decoration: none;
        font-size: 16px;
    }

    .menu a:hover {
        color: #EB5757
    }

    .menu-sub::after {
        content: '';
        position: absolute;
        margin-left: 5px;
        margin-top: 7px;
        border: 5px solid transparent;
        border-top: 5px solid #000;
    }

    .submenu {
        position: absolute;
        left: 0;
        top: 20px;
        background: #eb5757;
        z-index: 5;
        opacity: 0;
        text-align: left;
        transform: scaleY(0);
        transform-origin: 0 0;
        transition: .5s ease-in-out;
        width: 220px !important;
        padding: 0px !important;
    }

    .submenu li {
        padding: 10px;
        border-bottom: 1px solid #e0e0e0;
        float: none;
        margin: 0px;
        transition: 0.3s ease all;
    }

    .submenu li:hover {
        background: #4f4f4f;
    }

    .submenu li a,
    .submenu li a:hover {
        color: #fff;
        font-size: 14px;
        position: relative;
        width: 100%;
        height: 100%;
        display: inline-block;
    }

    .hover-link:hover .submenu {
        opacity: 1;
        transform: scaleY(1);
    }

    .button-top {
        padding: 13px 25px;
        color: #fff;
        font-size: 16px;
        outline: none;
        border: none;
        background: #EB5757;
        float: right;
        margin-top: 20px
    }

    .button-top:hover {
        background: #DC7A19
    }

    .fon-main {
        background: url(<?=SITE_TEMPLATE_PATH?>/images/fon-main.jpg) no-repeat;
        background-size: cover;
        background-position: center;
        width: 100%;
        display: inline-block;
        height: 408px;
        overflow: hidden;
    }

    .opis-main {
        text-align: center;
        font-size: 28px;
        margin-top: 45px;
        margin-left: 140px;
        color: #4f4f4f;
        font-family: 'Roboto Medium';
    }

    .opis-main strong {
        color: #bf0202;
    }  

    .people {
        background: url(<?=SITE_TEMPLATE_PATH?>/images/people.png) no-repeat;
        background-size: contain;
        background-position: center;
        width: 100%;
        display: inline-block;
        height: 230px;
        position: relative;
        margin-top: 40px;
    }



    .bg-pink {
        background: #eb5757;
        color: #fff;
        text-align: center;
        margin: -6px;
        height: 105px;
        overflow: hidden;
        font-family: 'Roboto Medium';
        font-size: 18px;
        position: relative;
    }

    .img-rab {
        background: url(<?=SITE_TEMPLATE_PATH?>/images/rab.png) no-repeat;
        background-size: contain;
        background-position: center;
        width: 140px;
        display: inline-block;
        height: 105px;
        float: left;
        position: absolute;
        left: 0px;
    }

    .text-pink {
        position: relative;
        top: 20px;
        line-height: 1.5em;
    }

    .text-pink span {
        text-decoration: underline;
        transition: 0.3s ease all;
        cursor: pointer;
    }

    .text-pink span:hover {
        color: #000;
    }

    .zag-katalog {
        text-align: center;
        color: #4F4F4F;
        font-size: 32px;
    }

    .bg-ser {
        background: #EBEBEB
    }

    .katalog1, .product-item-big-card {
        display: inline-block;
        float: left;
        width: 22.5%;
        text-align: center;
        font-size: 22px;
        margin-right: 3%;
        transition: 0.3s ease all;
        vertical-align: top;
        margin-bottom: 45px;
        border: 1px solid #BDBDBD;
        height: 380px;
        overflow: hidden;
    }

    .inline-block .katalog1:nth-child(4n) {
        margin-right: 0px
    }

    .img-katalog1 {
        height: 200px;
        width: 100%;
        display: block;
    }

    .katalog1 span {
        background: #F2C94C;
        width: 60px;
        height: 2px;
        display: block;
        margin: 20px auto;
    }

    .opis-katalog1 {
        padding: 20px 5px;
        padding-top: 10px;
        transition: 0.3s ease all;
    }

    .polygon {
        height: 45px;
        background: url(<?=SITE_TEMPLATE_PATH?>/images/treyg.png) no-repeat;
        background-size: contain;
        cursor: pointer;
        margin-top: -22px;
        background-position: center;
    }

    .katalog1:hover, .product-item-big-card:hover {
        box-shadow: 0px 12px 50px -5px rgba(0, 0, 0, 0.44);
    }

    .button-main {
        padding: 13px 10px;
        color: #fff;
        font-size: 16px;
        outline: none;
        border: none;
        background: #EB5757;
        display: block;
        margin: 0 auto;
        width: 245px;
    }

    .button-main:hover {
        background: #DC7A19
    }

    .bg-company {
        background: url(<?=SITE_TEMPLATE_PATH?>/images/fon-company.jpg) no-repeat;
        background-size: cover;
        background-position: center;
        width: 100%;
        display: inline-block;
    }

    .left-company {
        float: left;
        width: 68%;
        line-height: 1.5em;
    }

    .title-company {
        color: #4F4F4F;
        font-size: 32px;
        font-family: 'Roboto Bold';
        margin-bottom: 45px;
    }

    .line-company {
        width: 100%;
        display: inline-block;
        margin-bottom: 20px;
    }

    .ed-company {
        float: left;
        font-size: 54px;
        color: #DC7A19;
        font-family: 'Roboto Bold';
        width: 10%;
        margin-top: 30px;
    }

    .text-company {
        float: left;
        width: 80%;
        font-size: 16px;
    }

    .text-company strong {
        color: #DC7A19;
    }

    .right-company {
        float: right;
        width: 350px;
        height: 485px;
        display: block;
        margin-bottom: 45px;
    }

    .raboty1 {
        float: left;
        height: 220px;
        width: 22.5%;
        text-align: center;
        text-decoration: none;
        color: #fff;
        font-family: 'Roboto Medium';
        position: relative;
        margin-right: 3%;
        margin-bottom: 35px;
        overflow: hidden;
    }

    .raboty .raboty1:nth-child(4n) {
        margin-right: 0px
    }

    .clients {
        margin-right: 0px
    }

    

    .hover-raboty1 {
        height: 100%;
        width: 100%;
        transition: 0.3s ease all;
        background: rgba(0, 0, 0, 0.55);
        position: absolute;
        padding-top: 70px;
        opacity: 0;
    }

    .raboty1:hover .hover-raboty1 {
        opacity: 1;
    }

    .hover-raboty1 span {
        width: 29px;
        height: 29px;
        background: url(<?=SITE_TEMPLATE_PATH?>/images/lupa.png) no-repeat;
        background-size: contain;
        display: block;
        margin: 0 auto;
        margin-bottom: 15px;
    }

    .img-clients {
        width: 13%;
        display: inline-block;
        margin-right: 4%;
        vertical-align: middle;
    }

    .new1 {
        vertical-align: top;
        background: #fff;
        width: 80%;
        padding: 40px 20px;
        border-radius: 8px;
        text-align: left;
        line-height: 1.5em;
        display: inline-block;
        text-decoration: none;
        margin: 40px auto;
    }

    .new1:hover {
        box-shadow: 0px 0px 45px -4px rgba(0, 0, 0, 0.2);
    }

    .title-new1 {
        font-size: 22px;
        color: #F2994A;
        margin-bottom: 20px;
        font-family: 'Roboto Medium';
    }

    .opis-new1 {
        font-size: 14px;
        color: #7A7A7A;
        margin-bottom: 20px;
    }

    .date-new1 {
        color: #C2C2C2;
        font-size: 14px;
    }

    .swiper-container-news {
        padding-bottom: 40px;
    }

    .swiper-container-news .swiper-button-next,
    .swiper-container-news .swiper-button-prev {
        top: auto;
        bottom: 20px;
        width: 51px;
        height: 16px;
        -moz-background-size: 51px 16px;
        -webkit-background-size: 51px 16px;
        background-size: 51px 16px;
        background-position: center;
        background-repeat: no-repeat;
    }

    .swiper-container-news .swiper-button-prev {
        background-image: url(<?=SITE_TEMPLATE_PATH?>/images/arrow-l.png) !important;
        left: 15px;
    }

    .swiper-container-news .swiper-button-next {
        background-image: url(<?=SITE_TEMPLATE_PATH?>/images/arrow-r.png) !important;
        right: 15px;
    }

    .news-main .new1 {
        width: 27.3%;
        margin-right: 3%;
    }

    .news-main .new1:nth-child(3n) {
        margin-right: 0px
    }

    .clients-main .img-clients {
        margin-bottom: 30px;
    }

    .map {
        height: 508px;
        overflow: hidden
    }

    .left-map {
        width: 42%;
        float: left;
    }

    .title-map {
        font-size: 32px;
        margin-bottom: 45px;
    }

    .forma-map {
        margin: 40px auto;
        float: right;
    }

    .forma-map textarea,
    .forma-map input {
        width: 80%;
        padding: 0px;
        padding-bottom: 10px;
        display: block;
        border: none;
        font-family: 'Roboto Regular';
        font-size: 16px;
        outline: none;
        border-bottom: 1px solid #BDBDBD;
        margin-bottom: 45px;
    }

    .forma-map input {}

    .forma-map textarea {}

    .forma-map input:focus,
    .forma-map textarea:focus {
        border-bottom: 1px solid #202843;
        outline: none;
    }

    .forma-map input::-webkit-input-placeholder {
        color: #BDBDBD;
    }

    .forma-map input::-moz-placeholder {
        color: #BDBDBD;
    }

    .forma-map input:-moz-placeholder {
        color: #BDBDBD;
    }

    .forma-map input:-ms-input-placeholder {
        color: #BDBDBD;
    }

    .forma-map textarea::-webkit-input-placeholder {
        color: #BDBDBD;
    }

    .forma-map textarea::-moz-placeholder {
        color: #BDBDBD;
    }

    .forma-map textarea:-moz-placeholder {
        color: #BDBDBD;
    }

    .forma-map textarea:-ms-input-placeholder {
        color: #BDBDBD;
    }

    .forma-map .button-main {
        float: left;
    }

    .right-map {
        float: right;
        width: 50%;
    }

    .footer-main {
        background: #4F4F4F;
        color: #fff;
        margin-top: -5px;
    }

    .left-footer {
        font-size: 16px;
        float: left;
        line-height: 1.5em;
        width: 35%;
    }

    .left-footer button {
        margin-left: 0px;
        margin-top: 20px;
        background: rgba(235, 87, 87, 0.5);
    }

    .menu-footer {
        padding: 0px;
        list-style: none;
        float: left;
        margin: 0px 5%;
    }

    .menu-footer li {
        margin-bottom: 17px;
    }

    .menu-footer a {
        color: #fff;
        text-decoration: none;
        font-family: 'Roboto Light';
    }

    .menu-footer a:hover {
        color: #f2994a;
    }

    .zag-menu {
        margin-bottom: 20px !important;
        font-family: 'Roboto bold' !important;
        text-transform: uppercase;
        display: block;
    }

    .right-footer {
        float: right;
        margin: 0px;
    }

    .right-footer li {}

    .icon-footer {
        float: left;
        width: 13px;
        height: 13px;
        position: relative;
        top: 3px;
        margin-right: 10px;
    }

    .icon-footer1 {
        background: url(<?=SITE_TEMPLATE_PATH?>/images/ic1.png) no-repeat;
        background-size: contain;
    }

    .icon-footer2 {
        background: url(<?=SITE_TEMPLATE_PATH?>/images/ic2.png) no-repeat;
        background-size: contain;
    }

    .icon-footer3 {
        background: url(<?=SITE_TEMPLATE_PATH?>/images/ic3.png) no-repeat;
        background-size: contain;
    }

    .icon-footer4 {
        background: url(<?=SITE_TEMPLATE_PATH?>/images/ic4.png) no-repeat;
        background-size: contain;
    }

    .footer-niz {
        background: #333;
        color: #fff;
        margin-top: -5px;
        padding: 20px 0px;
        font-family: 'Roboto Light';
    }

    .schet-block {
        float: left;
        width: 53%;
        font-size: 12px;
    }

    .schet {}

    .my-site {
        display: block;
        margin-top: 10px;
        font-size: 12px;
        color: #f2994a;
        font-family: 'Roboto Light';
    }

    .right-niz {
        float: right;
        margin-top: -10px;
    }

    .uptl_container {
        float: right;
    }

    .ss-niz {
        display: block;
        margin-top: 10px;
    }

    .ss-niz a {
        font-family: 'Roboto Light';
        color: #eb5757;
    }

    #toTop {
        position: fixed;
        bottom: 60px;
        right: 30px;
        cursor: pointer;
        z-index: 999;
        transition: 0.3s;
        opacity: 1;
        -webkit-transition: 0.5s ease-in-out;
        -moz-transition: 0.5s ease-in-out;
        -o-transition: 0.5s ease-in-out;
        transition: 0.5s ease-in-out;
    }

    #toTop img {
        width: 40px;
    }

    .dm-overlay {
        position: fixed;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.28);
        display: none;
        overflow: auto;
        width: 100%;
        height: 100%;
        z-index: 99999999;
    }

    .dm-overlay:target {
        display: block;
        -webkit-animation: fade .6s;
        -moz-animation: fade .6s;
        animation: fade .6s;
    }

    .dm-table {
        display: table;
        width: 100%;
        height: 100%;
    }

    .dm-cell {
        display: table-cell;
        padding: 0 1em;
        vertical-align: middle;
        text-align: center;
    }

    .dm-modal {
        display: inline-block;
        padding: 20px 40px;
        max-width: 450px;
        background: #ffffff;
        border-radius: 10px;
        color: #000000;
        text-align: left;
    }

    .close {
        z-index: 9999;
        float: right;
        width: 30px;
        height: 30px;
        color: #eb5757;
        text-align: center;
        text-decoration: none;
        line-height: 26px;
        cursor: pointer;
    }

    .close:after {
        display: block;
        border: 2px solid #eb5757;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        content: 'X';
        -webkit-transition: all 0.6s;
        -moz-transition: all 0.6s;
        transition: all 0.6s;
        -webkit-transform: scale(0.85);
        -moz-transform: scale(0.85);
        -ms-transform: scale(0.85);
        transform: scale(0.85);
    }

    .close:hover:after {
        border-color: #eb5757;
        color: #eb5757;
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }

    @-moz-keyframes fade {
        from {
            opacity: 0;
        }

        to {
            opacity: 1
        }
    }

    @-webkit-keyframes fade {
        from {
            opacity: 0;
        }

        to {
            opacity: 1
        }
    }

    @keyframes fade {
        from {
            opacity: 0;
        }

        to {
            opacity: 1
        }
    }

    .form-zayavka-modal {}

    .form-zayavka-modal span {
        text-align: center;
        font-size: 20px;
        margin-bottom: 20px;
        display: block;
    }

    .form-zayavka-modal input,
    .form-zayavka-modal textarea {
        width: 94%;
        height: 20px;
        color: #232323;
        padding: 7px 3%;
        margin-bottom: 20px;
        font-size: 14px;
        font-family: 'Roboto Regular';
        border: 1px solid #909090;
        outline: none;
        border-radius: 10px;
    }

    .form-zayavka-modal textarea {
        height: auto;
    }

    .form-zayavka-modal button {
        background: transparent;
        border: 2px solid #eb5757;
        line-height: 34px;
        width: 165px;
        border-radius: 10px;
        font-family: 'Roboto Regular';
        font-size: 14px;
        cursor: pointer;
        -webkit-transition: all 400ms;
        -moz-transition: all 400ms;
        -o-transition: all 400ms;
        transition: all 400ms;
        margin: 0 auto;
        display: block;
    }

    .form-zayavka-modal button:hover {
        background: #eb5757;
        color: #fff;
    }

    .rezd {
        font-size: 18px;
        text-align: center;
        line-height: 1.5em;
    }

    .karta-sayta {
        margin: 0px;
        padding: 0px;
    }

    .karta-sayta a {
        color: #eb5757;
        font-size: 20px;
        text-decoration: none;
    }

    #numpages {
        width: 100%;
        float: left;
        overflow: hidden;
        text-align: center;
        margin-bottom: 40px;
    }

    #numpages span {
        display: inline-block;
        padding: 5px 10px;
        font-size: 16px;
        background-color: #F2994A;
        text-decoration: none;
        color: black;
        font-family: 'Roboto Bold';
        transition: 0.3s ease all;
        font-weight: bold;
        color: #ffffff;
    }

    #numpages a {
        display: inline-block;
        padding: 10px;
        font-size: 16px;
        text-decoration: none;
        color: black !important;
        transition: 0.3s ease all;
        font-weight: bold;
        font-family: 'Roboto Bold';
    }

    #numpages {
        display: block !important;
    }

    .text-information {
        height: 89px;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .dalee-btn,
    .content-btn {
        cursor: pointer;
        color: #eb5757;
        font-family: 'Roboto bold';
        font-size: 18px;
        width: 100%;
        float: left;
    }

    .dalee-btn::after,
    .content-btn::after {
        content: '';
        position: absolute;
        margin-left: 5px;
        margin-top: 10px;
        border: 5px solid transparent;
        border-top: 5px solid #000;
    }

    .text-information-ves {
        height: auto;
    }

    #navibar {
        margin-bottom: 20px;
        font-size: 14px;
    }

    #navibar a {
        color: #4f4f4f;
        text-decoration: none
    }

    .katalog-main {}

    #wr-tabs {
        margin: 40px auto;
    }

    #wr-tabs .tabs,
    #wr-tabs-niz .tabs {
        text-align: center;
    }

    #wr-tabs .tabs:after,
    #wr-tabs-niz .tabs:after {
        content: "";
        display: block;
        clear: both;
        height: 0;
    }

    #wr-tabs .tabs .tab,
    #wr-tabs-niz .tabs .tab {
        cursor: pointer;
        font-size: 18px;
        vertical-align: top;
        padding: 10px;
        transition: 0.3s ease all;
        display: inline-block;
        width: 21.9%;
        border-bottom: 2px solid transparent;
        font-family: 'Roboto Bold';
        height: 40px;
        background: #f0f0f0;
        margin: 0px 0.5%;
        margin-bottom: 20px;
    }

    #wr-tabs .tabs .tab:last-child,
    #wr-tabs-niz .tabs .tab:last-child {
        border-right: none;
    }

    #wr-tabs .tabs .tab:hover,
    #wr-tabs .tabs .tab.active,
    #wr-tabs-niz .tabs .tab:hover,
    #wr-tabs-niz .tabs .tab.active {
        color: #60b3d7;
        border-bottom: 2px solid;
    }

    #wr-tabs .content,
    #wr-tabs-niz .content {
        line-height: 1.8em;
    }

    #wr-tabs .content .tab-cont,
    #wr-tabs-niz .content .tab-cont {
        display: none;
    }

    #wr-tabs .content .tab-cont.active,
    #wr-tabs-niz .content .tab-cont.active {
        display: block;
    }

    #wr-tabs-niz .tabs .tab {
        width: 16.8%;
    }

    #wr-tabs-niz .content {
        margin-top: 40px;
    }

    .opis-prod-left {
        height: auto;
        overflow: hidden;
        float: left;
        width: 60%;
        margin-top: 60px;
    }

    .opis-prod-left img {
        width: 100% !important;
    }

    .opis-prod-right {
        float: right;
        display: block;
        height: 200px;
        margin-top: 20px;
        width: 40%;
    }

    .spis-model {
        border-collapse: collapse;
        width: 100%;
        background-color: #f6f6f6;
        font-size: 16px;
        margin-top: 40px;
        box-shadow: 0px 0px 51px -6px rgba(0, 0, 0, 0.3);
        border-radius: 5px;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .spis-model td {
        padding: 15px;
    }

    .spis-model tr {
        border-bottom: 1px solid #ddd;
    }

    .spis-model td:nth-child(1) {
        width: 150px !important;
        padding-right: 60px;
    }

    .spis-model td:nth-child(2) {
        width: 450px !important;
    }

    .bg-model {
        width: 100%;
    }

    .name-model {}

    .opis-model {
        color: #828181;
        font-size: 14px;
    }

    .cena-model {
        text-align: center;
        font-family: 'Roboto Bold';
    }

    .rub {
        vertical-align: middle;
        border-bottom: 1px solid;
        line-height: 5px;
        display: inline-block;
        width: 0.4em;
        color: #828181;
    }

    .button-model {
        padding: 9px 10px;
        color: #fff;
        font-size: 18px;
        outline: none;
        border: none;
        background: #6db388;
        float: right;
        width: 150px;
    }

    .button-model:hover {
        background: #f2994a;
    }

    .katalog-kart {
        margin-top: 60px;
    }

    .rab1 {
        display: inline-block;
        margin-bottom: 20px;
        color: #4f4f4f;
        width: 16%;
        vertical-align: top;
    }

    .num-rab1 {
        background: #4f4f4f;
        color: #fff;
        border-radius: 50%;
        width: 44px;
        line-height: 44px;
        font-size: 20px;
        font-family: 'Roboto Bold';
        display: block;
        margin: 0 auto;
        margin-bottom: 20px;
    }

    .rab-block {
        padding: 40px 0px
    }

    .inline-block .preim:nth-child(5n) {
        margin-right: 0px
    }

    .preim {
        display: inline-block;
        vertical-align: top;
        width: 14%;
        margin-right: 4%;
        padding: 20px 10px;
        box-shadow: 0px 0px 51px -6px rgba(0, 0, 0, 0.3);
        margin-bottom: 20px;
        font-size: 14px;
        min-height: 14em;
    }

    .img-preim {
        display: block;
        height: 50px;
        margin-bottom: 20px;
    }

    .katalog-raskr .katalog1 {
        display: none;
    }

    .katalog-raskr .katalog1:nth-child(1),
    .katalog-raskr .katalog1:nth-child(2),
    .katalog-raskr .katalog1:nth-child(3),
    .katalog-raskr .katalog1:nth-child(4) {
        display: inline-block;
    }

    .vidno {
        display: inline-block !important;
    }

    .noLink {
        pointer-events: none;
        cursor: pointer;
    }

    .top-mobil {
        display: none;
    }

    .close-this-window {
        z-index: 9999;
        float: right;
        width: 30px;
        height: 30px;
        color: #ffffff;
        text-align: center;
        text-decoration: none;
        line-height: 26px;
        cursor: pointer;
        position: absolute;
        right: 10px;
    }

    .close-this-window:after {
        display: block;
        border: 2px solid #fff;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        content: 'X';
        -webkit-transition: all 0.6s;
        -moz-transition: all 0.6s;
        transition: all 0.6s;
        -webkit-transform: scale(0.85);
        -moz-transform: scale(0.85);
        -ms-transform: scale(0.85);
        transform: scale(0.85);
    }

    .window-open-block {
        position: fixed;
        width: 100%;
        height: 100%;
        left: 102%;
        color: #fff;
        top: 0;
        background-color: #f2c94c;
        transition: 0.4s ease all;
        z-index: 10000000;
        text-align: center;
        overflow-y: scroll;
    }

    .window-open-block.active {
        left: 0%;
    }

    .katalog-main .katalog1 {
        display: inline-block !important
    }

    .katalog1>a {
        text-decoration: none;
        color: #000;
        display: block;
        height: 100%;
    }

    .no-decor{
        text-decoration: none;
        color: Currentcolor;
        
    }

    @media only screen and (max-width:1100px) {
        .block-width {
            width: 95%;
        }

        .line-top {
            margin-left: 20px;
            font-size: 12px;
        }

        .logo {
            width: 190px;
        }

        .menu ul {
            width: 71%;
        }

        .menu a {
            font-size: 14px;
        }

        .menu li {
            margin-right: 5.9%;
        }

        .opis-main {
            margin-top: 61px;
        }

        .right-company {
            width: 290px;
        }

        .title-map {
            font-size: 26px;
        }

        .news-main .new1 {
            width: 27%;
        }

        .news-main .new1 {
            padding: 20px;
            width: 40%;
            margin: 20px auto;
        }

        .preim {
            margin-right: 3.6%;
        }

        #wr-tabs .tabs .tab {
            width: 21.8%;
            font-size: 16px;
        }

        #wr-tabs-niz .tabs .tab {
            width: 16.5%;
            font-size: 16px;
        }

        .spis-model td:nth-child(2) {
            width: 250px !important;
        }

        #WindowBOTTOM,
        #uptocall-mini,
        #a_btn,
        .a-btn {
            display: none !important
        }
    }

    @media only screen and (max-width:979px) {

        .line-rezhim,
        .img-rab {
            display: none;
        }

        .button-top {
            padding: 13px 13px;
            font-size: 12px;
        }

        .menu ul {
            width: 75%;
        }

        .menu a,
        .submenu li a,
        .submenu li a:hover {
            font-size: 12px;
        }

        .menu li {
            margin-right: 5.5%;
        }

        .submenu li {
            padding: 5px;
        }

        .people {
            margin-top: 0px;
        }

        .inline-block .katalog1:nth-child(3n) {
            margin-right: 0px;
        }

        .katalog-raskr .katalog1:nth-child(4) {
            display: none
        }

        .katalog1, .product-item-big-card {
            width: 31%;
        }

        .katalog1 {min-width: 300px;}

        .right-company {
            width: 230px;
        }

        .text-company {
            font-size: 14px;
        }

        .inline-block .katalog1:nth-child(4n) {
            margin-right: 3%;
        }

        .title-map {
            font-size: 20px;
        }

        .left-footer {
            font-size: 14px;
        }

        .menu-footer {
            margin: 0px 1.2%;
        }

        .preim {
            margin-right: 2.5%;
        }

        #wr-tabs .tabs .tab {
            width: 21.2%;
            font-size: 12px;
            font-family: 'Roboto Regular';
        }

        #wr-tabs-niz .tabs .tab {
            width: 15.8%;
            font-size: 12px;
            font-family: 'Roboto Regular';
        }

        .spis-model td:nth-child(1) {
            padding-right: 40px;
        }

        .spis-model td:nth-child(2) {
            width: 200px !important;
        }

    }

    @media only screen and (max-width:768px) {

        .people {
            background: #f8f8f8;
        }


        .bg-company {
            background: #f8f8f8;
        }
        .opis-prod-left {
            height: 165px;
        }

        .top,
        .menu,
        .people,
        .right-company,
        .right-map {
            display: none;
        }

        .news-main .new1 {
            padding: 20px 0px;
            width: 93%;
        }

        .top-mobil {
            position: fixed;
            width: 100%;
            top: 0px;
            background: #fff;
            z-index: 999;
            display: inline-block;
            left: 0;
            padding: 10px 0px;
            box-shadow: 0 16px 16px -16px rgba(0, 0, 0, 0.25);
        }

        .otstup-block {
            padding-top: 60px;
        }

        .burger-menu {
            float: right;
            width: 30px;
            margin-top: 10px;
        }

        .topmenu-mobil {
            list-style: none;
            margin: 0 auto;
            margin-top: 40px;
            padding: 0px;
            width: 80%;
            display: block;
        }

        .topmenu-mobil li {}

        .topmenu-mobil a {
            color: #000;
            text-decoration: none;
            margin-top: 20px;
            display: block;
        }

        .button-top {
            float: none;
            margin-bottom: 40px;
        }

        .fon-main {
            background: #f8f8f8;
            height: auto;
            padding-bottom: 40px;
        }

        .opis-main {
            margin-left: 0px;
            margin-top: 40px;
            font-size: 20px;
        }

        .bg-pink {
            margin: 0px;
            height: auto;
        }

        .text-pink {
            position: static;
            padding: 20px 0px;
            font-size: 14px;
        }

        .container {
            padding: 30px 0px;
        }

        .zag-katalog,
        .title-company,
        .zag-container {
            font-size: 24px;
        }

        .katalog-raskr .katalog1:nth-child(3) {
            display: none
        }

        .katalog1 {
            width: 48%;
            height: auto;
            font-size: 16px;
        }

        .img-katalog1 {
            height: 100px;
        }

        .inline-block .katalog1:nth-child(3) {
            margin-right: 3%;
        }

        .inline-block .katalog1:nth-child(2n) {
            margin-right: 0px;
        }

        .katalog1 span {
            margin: 10px auto;
        }

        .button-main {
            font-size: 14px;
        }

        .left-company,
        .left-map,
        .schet-block {
            width: 100%;
        }

        .ed-company {
            font-size: 36px;
        }

        .raboty1 {
            height: 100px;
        }

        .title-new1 {
            font-size: 16px;
        }

        .map {
            height: auto;
        }

        .forma-map {
            margin: 20px auto;
            float: left;
            width: 100%;
        }

        .forma-map textarea,
        .forma-map input {
            width: 100%;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .left-footer {
            width: 100%;
            margin-bottom: 20px;
        }

        .menu-footer {
            margin: 0px;
            width: 100%;
        }

        #toTop img {
            width: 30px;
        }

        .right-niz {
            display: none;
        }

        .hover-raboty1 {
            padding-top: 20px;
        }

        .content-site {
            font-size: 14px;
        }

        .preim {
            width: 26%;
        }

        .rab1 {
            width: 33%;
        }

        .rab1,
        .opis-prod-left,
        .spis-model {
            font-size: 14px;
        }

        #wr-tabs {
            margin: 20px auto;
        }

        #wr-tabs .tabs .tab,
        #wr-tabs-niz .tabs .tab {
            width: 44%;
        }

        .spis-model td {
            padding: 10px;
        }

        .spis-model td:nth-child(1) {
            padding-right: 10px;
            width: 90px !important;
        }

        .button-model {
            font-size: 14px;
            width: 100px;
        }

        #wr-tabs-niz .content {
            font-size: 14px;
        }

        .katalog-kart .katalog1 {
            width: 45.3%;
            margin-right: 20px !important;
        }

        .spis-model td:nth-child(2) {
            width: 150px !important;
        }

        .k-menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

    }

    @media only screen and (max-width:500px) {
        .opis-prod-left {
            height: 160px;
        }

        .katalog1, .product-item-big-card {
            width: 100%;
        }

        .img-katalog1 {
            height: 200px;
        }

        .logo {
            width: 150px;
            height: 40PX;
        }

        .burger-menu {
            margin-top: 0px;
        }

        .raboty1 {
            height: 100px;
            width: 48%;
        }

        .raboty .raboty1:nth-child(4n) {
            margin-right: 3%;
        }

        .raboty .raboty1:nth-child(2n) {
            margin-right: 0px;
        }

        .img-clients {
            width: 30%;
        }

        .form-zayavka-modal span {
            font-size: 16px;
        }

        .preim {
            width: 40%;
        }

        #wr-tabs .tabs .tab,
        #wr-tabs-niz .tabs .tab {
            width: 42%;
        }

        .opis-prod-left {
            width: 100%;
            margin-top: 0px;
        }

        .opis-prod-right {
            height: 100px;
            margin-top: 0px;
            width: 100%;
        }

        .spis-model td:nth-child(1) {
            display: none;
        }

        .spis-model td {
            padding: 5px;
            font-size: 12px;
            width: 27%;
        }

        .opis-model {
            font-size: 12px;
        }

        #wr-tabs .tabs .tab,
        #wr-tabs-niz .tabs .tab {
            width: 41%;
        }

        .katalog-kart .katalog1 {
            width: 100%;
        }

        .spis-model td:nth-child(2) {
            width: auto !important;
        }

        body,
        button,
        a {
            font-family: 'Arial Narrow' !important;
        }

        .k-menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    }

    .swiper-container {
        margin-left: auto;
        margin-right: auto;
        position: relative;
        overflow: hidden;
        z-index: 1
    }

    .swiper-container-no-flexbox .swiper-slide {
        float: left
    }

    .swiper-container-vertical>.swiper-wrapper {
        -webkit-box-orient: vertical;
        -moz-box-orient: vertical;
        -ms-flex-direction: column;
        -webkit-flex-direction: column;
        flex-direction: column
    }

    .swiper-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        z-index: 1;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-transition-property: -webkit-transform;
        -moz-transition-property: -moz-transform;
        -o-transition-property: -o-transform;
        -ms-transition-property: -ms-transform;
        transition-property: transform;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box
    }

    .swiper-container-android .swiper-slide,
    .swiper-wrapper {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -o-transform: translate(0, 0);
        -ms-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .swiper-container-multirow>.swiper-wrapper {
        -webkit-box-lines: multiple;
        -moz-box-lines: multiple;
        -ms-flex-wrap: wrap;
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .swiper-container-free-mode>.swiper-wrapper {
        -webkit-transition-timing-function: ease-out;
        -moz-transition-timing-function: ease-out;
        -ms-transition-timing-function: ease-out;
        -o-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
        margin: 0 auto
    }

    .swiper-slide {
        -webkit-flex-shrink: 0;
        -ms-flex: 0 0 auto;
        flex-shrink: 0;
        width: 100%;
        height: 100%;
        position: relative
    }

    .swiper-container-autoheight,
    .swiper-container-autoheight .swiper-slide {
        height: auto
    }

    .swiper-container-autoheight .swiper-wrapper {
        -webkit-box-align: start;
        -ms-flex-align: start;
        -webkit-align-items: flex-start;
        align-items: flex-start;
        -webkit-transition-property: -webkit-transform, height;
        -moz-transition-property: -moz-transform;
        -o-transition-property: -o-transform;
        -ms-transition-property: -ms-transform;
        transition-property: transform, height
    }

    .swiper-container .swiper-notification {
        position: absolute;
        left: 0;
        top: 0;
        pointer-events: none;
        opacity: 0;
        z-index: -1000
    }

    .swiper-wp8-horizontal {
        -ms-touch-action: pan-y;
        touch-action: pan-y
    }

    .swiper-wp8-vertical {
        -ms-touch-action: pan-x;
        touch-action: pan-x
    }

    .swiper-button-next,
    .swiper-button-prev {
        position: absolute;
        top: 50%;
        width: 27px;
        height: 44px;
        margin-top: -22px;
        z-index: 10;
        cursor: pointer;
        -moz-background-size: 27px 44px;
        -webkit-background-size: 27px 44px;
        background-size: 27px 44px;
        background-position: center;
        background-repeat: no-repeat
    }

    .swiper-button-next.swiper-button-disabled,
    .swiper-button-prev.swiper-button-disabled {
        opacity: .35;
        cursor: auto;
        pointer-events: none
    }

    .swiper-button-prev,
    .swiper-container-rtl .swiper-button-next {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
        left: -10px;
        right: auto
    }

    .swiper-button-prev.swiper-button-black,
    .swiper-container-rtl .swiper-button-next.swiper-button-black {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")
    }

    .swiper-button-prev.swiper-button-white,
    .swiper-container-rtl .swiper-button-next.swiper-button-white {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")
    }

    .swiper-button-next,
    .swiper-container-rtl .swiper-button-prev {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
        right: -10px;
        left: auto
    }

    .swiper-button-next.swiper-button-black,
    .swiper-container-rtl .swiper-button-prev.swiper-button-black {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")
    }

    .swiper-button-next.swiper-button-white,
    .swiper-container-rtl .swiper-button-prev.swiper-button-white {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")
    }

    .swiper-pagination {
        position: absolute;
        text-align: center;
        -webkit-transition: .3s;
        -moz-transition: .3s;
        -o-transition: .3s;
        transition: .3s;
        -webkit-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        z-index: 10
    }

    .swiper-pagination.swiper-pagination-hidden {
        opacity: 0
    }

    .swiper-container-horizontal>.swiper-pagination-bullets,
    .swiper-pagination-custom,
    .swiper-pagination-fraction {
        bottom: 10px;
        left: 0;
        width: 100%
    }

    .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        display: inline-block;
        border-radius: 100%;
        background: #000;
        opacity: .2
    }

    button.swiper-pagination-bullet {
        border: none;
        margin: 0;
        padding: 0;
        box-shadow: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -webkit-appearance: none;
        appearance: none
    }

    .swiper-pagination-clickable .swiper-pagination-bullet {
        cursor: pointer
    }

    .swiper-pagination-white .swiper-pagination-bullet {
        background: #fff
    }

    .swiper-pagination-bullet-active {
        opacity: 1;
        background: #007aff
    }

    .swiper-pagination-white .swiper-pagination-bullet-active {
        background: #fff
    }

    .swiper-pagination-black .swiper-pagination-bullet-active {
        background: #000
    }

    .swiper-container-vertical>.swiper-pagination-bullets {
        right: 10px;
        top: 50%;
        -webkit-transform: translate3d(0, -50%, 0);
        -moz-transform: translate3d(0, -50%, 0);
        -o-transform: translate(0, -50%);
        -ms-transform: translate3d(0, -50%, 0);
        transform: translate3d(0, -50%, 0)
    }

    .swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
        margin: 5px 0;
        display: block
    }

    .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
        margin: 0 5px
    }

    .swiper-pagination-progress {
        background: rgba(0, 0, 0, .25);
        position: absolute
    }

    .swiper-pagination-progress .swiper-pagination-progressbar {
        background: #007aff;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0);
        -webkit-transform-origin: left top;
        -moz-transform-origin: left top;
        -ms-transform-origin: left top;
        -o-transform-origin: left top;
        transform-origin: left top
    }

    .swiper-container-rtl .swiper-pagination-progress .swiper-pagination-progressbar {
        -webkit-transform-origin: right top;
        -moz-transform-origin: right top;
        -ms-transform-origin: right top;
        -o-transform-origin: right top;
        transform-origin: right top
    }

    .swiper-container-horizontal>.swiper-pagination-progress {
        width: 100%;
        height: 4px;
        left: 0;
        top: 0
    }

    .swiper-container-vertical>.swiper-pagination-progress {
        width: 4px;
        height: 100%;
        left: 0;
        top: 0
    }

    .swiper-pagination-progress.swiper-pagination-white {
        background: rgba(255, 255, 255, .5)
    }

    .swiper-pagination-progress.swiper-pagination-white .swiper-pagination-progressbar {
        background: #fff
    }

    .swiper-pagination-progress.swiper-pagination-black .swiper-pagination-progressbar {
        background: #000
    }

    .swiper-container-3d {
        -webkit-perspective: 1200px;
        -moz-perspective: 1200px;
        -o-perspective: 1200px;
        perspective: 1200px
    }

    .swiper-container-3d .swiper-cube-shadow,
    .swiper-container-3d .swiper-slide,
    .swiper-container-3d .swiper-slide-shadow-bottom,
    .swiper-container-3d .swiper-slide-shadow-left,
    .swiper-container-3d .swiper-slide-shadow-right,
    .swiper-container-3d .swiper-slide-shadow-top,
    .swiper-container-3d .swiper-wrapper {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transform-style: preserve-3d
    }

    .swiper-container-3d .swiper-slide-shadow-bottom,
    .swiper-container-3d .swiper-slide-shadow-left,
    .swiper-container-3d .swiper-slide-shadow-right,
    .swiper-container-3d .swiper-slide-shadow-top {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 10
    }

    .swiper-container-3d .swiper-slide-shadow-left {
        background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, 0)));
        background-image: -webkit-linear-gradient(right, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(right, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: -o-linear-gradient(right, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: linear-gradient(to left, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
    }

    .swiper-container-3d .swiper-slide-shadow-right {
        background-image: -webkit-gradient(linear, right top, left top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, 0)));
        background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(left, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: linear-gradient(to right, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
    }

    .swiper-container-3d .swiper-slide-shadow-top {
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, 0)));
        background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: linear-gradient(to top, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
    }

    .swiper-container-3d .swiper-slide-shadow-bottom {
        background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, 0)));
        background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(top, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: -o-linear-gradient(top, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
    }

    .swiper-container-coverflow .swiper-wrapper,
    .swiper-container-flip .swiper-wrapper {
        -ms-perspective: 1200px
    }

    .swiper-container-cube,
    .swiper-container-flip {
        overflow: visible
    }

    .swiper-container-cube .swiper-slide,
    .swiper-container-flip .swiper-slide {
        pointer-events: none;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        backface-visibility: hidden;
        z-index: 1
    }

    .swiper-container-cube .swiper-slide .swiper-slide,
    .swiper-container-flip .swiper-slide .swiper-slide {
        pointer-events: none
    }

    .swiper-container-cube .swiper-slide-active,
    .swiper-container-cube .swiper-slide-active .swiper-slide-active,
    .swiper-container-flip .swiper-slide-active,
    .swiper-container-flip .swiper-slide-active .swiper-slide-active {
        pointer-events: auto
    }

    .swiper-container-cube .swiper-slide-shadow-bottom,
    .swiper-container-cube .swiper-slide-shadow-left,
    .swiper-container-cube .swiper-slide-shadow-right,
    .swiper-container-cube .swiper-slide-shadow-top,
    .swiper-container-flip .swiper-slide-shadow-bottom,
    .swiper-container-flip .swiper-slide-shadow-left,
    .swiper-container-flip .swiper-slide-shadow-right,
    .swiper-container-flip .swiper-slide-shadow-top {
        z-index: 0;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        backface-visibility: hidden
    }

    .swiper-container-cube .swiper-slide {
        visibility: hidden;
        -webkit-transform-origin: 0 0;
        -moz-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        transform-origin: 0 0;
        width: 100%;
        height: 100%
    }

    .swiper-container-cube.swiper-container-rtl .swiper-slide {
        -webkit-transform-origin: 100% 0;
        -moz-transform-origin: 100% 0;
        -ms-transform-origin: 100% 0;
        transform-origin: 100% 0
    }

    .swiper-container-cube .swiper-slide-active,
    .swiper-container-cube .swiper-slide-next,
    .swiper-container-cube .swiper-slide-next+.swiper-slide,
    .swiper-container-cube .swiper-slide-prev {
        pointer-events: auto;
        visibility: visible
    }

    .swiper-container-cube .swiper-cube-shadow {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: #000;
        opacity: .6;
        -webkit-filter: blur(50px);
        filter: blur(50px);
        z-index: 0
    }

    .swiper-container-fade.swiper-container-free-mode .swiper-slide {
        -webkit-transition-timing-function: ease-out;
        -moz-transition-timing-function: ease-out;
        -ms-transition-timing-function: ease-out;
        -o-transition-timing-function: ease-out;
        transition-timing-function: ease-out
    }

    .swiper-container-fade .swiper-slide {
        pointer-events: none;
        -webkit-transition-property: opacity;
        -moz-transition-property: opacity;
        -o-transition-property: opacity;
        transition-property: opacity
    }

    .swiper-container-fade .swiper-slide .swiper-slide {
        pointer-events: none
    }

    .swiper-container-fade .swiper-slide-active,
    .swiper-container-fade .swiper-slide-active .swiper-slide-active {
        pointer-events: auto
    }

    .swiper-zoom-container {
        width: 100%;
        height: 100%;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -moz-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -moz-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        text-align: center
    }

    .swiper-zoom-container>canvas,
    .swiper-zoom-container>img,
    .swiper-zoom-container>svg {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain
    }

    .swiper-scrollbar {
        border-radius: 10px;
        position: relative;
        -ms-touch-action: none;
        background: rgba(0, 0, 0, .1)
    }

    .swiper-container-horizontal>.swiper-scrollbar {
        position: absolute;
        left: 1%;
        bottom: 3px;
        z-index: 50;
        height: 5px;
        width: 98%
    }

    .swiper-container-vertical>.swiper-scrollbar {
        position: absolute;
        right: 3px;
        top: 1%;
        z-index: 50;
        width: 5px;
        height: 98%
    }

    .swiper-scrollbar-drag {
        height: 100%;
        width: 100%;
        position: relative;
        background: rgba(0, 0, 0, .5);
        border-radius: 10px;
        left: 0;
        top: 0
    }

    .swiper-scrollbar-cursor-drag {
        cursor: move
    }

    .swiper-lazy-preloader {
        width: 42px;
        height: 42px;
        position: absolute;
        left: 50%;
        top: 50%;
        margin-left: -21px;
        margin-top: -21px;
        z-index: 10;
        -webkit-transform-origin: 50%;
        -moz-transform-origin: 50%;
        transform-origin: 50%;
        -webkit-animation: swiper-preloader-spin 1s steps(12, end) infinite;
        -moz-animation: swiper-preloader-spin 1s steps(12, end) infinite;
        animation: swiper-preloader-spin 1s steps(12, end) infinite
    }

    .swiper-lazy-preloader:after {
        display: block;
        content: "";
        width: 100%;
        height: 100%;
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
        background-position: 50%;
        -webkit-background-size: 100%;
        background-size: 100%;
        background-repeat: no-repeat
    }

    .swiper-lazy-preloader-white:after {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E")
    }

    @-webkit-keyframes swiper-preloader-spin {
        100% {
            -webkit-transform: rotate(360deg)
        }
    }

    @keyframes swiper-preloader-spin {
        100% {
            transform: rotate(360deg)
        }
    }

    .lb-loader,
    .lightbox {
        text-align: center;
        line-height: 0
    }

    body:after {
        content: url(<?=SITE_TEMPLATE_PATH?>/images/close_light.png) url(<?=SITE_TEMPLATE_PATH?>/images/loading.gif) url(<?=SITE_TEMPLATE_PATH?>/images/prev.png) url(<?=SITE_TEMPLATE_PATH?>/images/next.png);
        display: none
    }

    .lb-dataContainer:after,
    .lb-outerContainer:after {
        content: "";
        clear: both
    }

    body.lb-disable-scrolling {
        overflow: hidden
    }

    .lightboxOverlay {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 999999;
        background-color: #000;
        filter: alpha(Opacity=80);
        opacity: .8;
        display: none
    }

    .lightbox {
        position: absolute;
        left: 0;
        width: 100%;
        z-index: 9999999;
        font-weight: 400
    }

    .lightbox .lb-image {
        display: block;
        height: auto;
        max-width: inherit;
        max-height: none;
        border-radius: 3px;
        border: 4px solid #fff
    }

    .lightbox a img {
        border: none
    }

    .lb-outerContainer {
        position: relative;
        width: 250px;
        height: 250px;
        margin: 0 auto;
        border-radius: 4px;
        background-color: #fff
    }

    .lb-loader,
    .lb-nav {
        position: absolute;
        left: 0
    }

    .lb-outerContainer:after {
        display: table
    }

    .lb-loader {
        top: 43%;
        height: 25%;
        width: 100%
    }

    .lb-cancel {
        display: block;
        width: 32px;
        height: 32px;
        margin: 0 auto;
        background: url(<?=SITE_TEMPLATE_PATH?>/images/loading.gif) no-repeat
    }

    .lb-nav {
        top: 0;
        height: 100%;
        width: 100%;
        z-index: 10
    }

    .lb-container>.nav {
        left: 0
    }

    .lb-nav a {
        outline: 0;
        background-image: url(data:image/gif;base64,R0lGODlhAQABAPAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==)
    }

    .lb-next,
    .lb-prev {
        height: 100%;
        cursor: pointer;
        display: block
    }

    .lb-nav a.lb-prev {
        width: 34%;
        left: 0;
        float: left;
        background: url(<?=SITE_TEMPLATE_PATH?>/images/prev.png) left 48% no-repeat;
        filter: alpha(Opacity=0);
        opacity: 0;
        -webkit-transition: opacity .6s;
        -moz-transition: opacity .6s;
        -o-transition: opacity .6s;
        transition: opacity .6s
    }

    .lb-nav a.lb-prev:hover {
        filter: alpha(Opacity=100);
        opacity: 1
    }

    .lb-nav a.lb-next {
        width: 64%;
        right: 0;
        float: right;
        background: url(<?=SITE_TEMPLATE_PATH?>/images/next.png) right 48% no-repeat;
        filter: alpha(Opacity=0);
        opacity: 0;
        -webkit-transition: opacity .6s;
        -moz-transition: opacity .6s;
        -o-transition: opacity .6s;
        transition: opacity .6s
    }

    .lb-nav a.lb-next:hover {
        filter: alpha(Opacity=100);
        opacity: 1
    }

    .lb-dataContainer {
        margin: 0 auto;
        padding-top: 5px;
        width: 100%;
        -moz-border-radius-bottomleft: 4px;
        -webkit-border-bottom-left-radius: 4px;
        border-bottom-left-radius: 4px;
        -moz-border-radius-bottomright: 4px;
        -webkit-border-bottom-right-radius: 4px;
        border-bottom-right-radius: 4px
    }

    .lb-dataContainer:after {
        display: table
    }

    .lb-data {
        padding: 0 4px;
        color: #ccc
    }

    .lb-data .lb-details {
        width: 85%;
        float: left;
        text-align: left;
        line-height: 1.1em
    }

    .lb-data .lb-caption {
        font-size: 13px;
        font-weight: 700;
        line-height: 1em
    }

    .lb-data .lb-caption a {
        color: #4ae
    }

    .lb-data .lb-number {
        display: block;
        clear: left;
        padding-bottom: 1em;
        font-size: 12px;
        color: #999
    }

    .lb-data .lb-close {
        display: block;
        float: right;
        width: 30px;
        height: 30px;
        background: url(<?=SITE_TEMPLATE_PATH?>/images/close_light.png) top right no-repeat;
        text-align: right;
        outline: 0;
        filter: alpha(Opacity=70);
        opacity: .7;
        -webkit-transition: opacity .2s;
        -moz-transition: opacity .2s;
        -o-transition: opacity .2s;
        transition: opacity .2s
    }

    .lb-data .lb-close:hover {
        cursor: pointer;
        filter: alpha(Opacity=100);
        opacity: 1
    }

    .opis-ves {
        height: auto;
    }

    .svern::after {
        transform: rotate(.5turn);
    }

    .my-site {
        color: #fff;
        text-decoration: none;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        text-align: left;
        width: max-content;
    }

    .my-site i {
        width: 30px;
        height: 30px;
        background: url(local/templates/ovk/images/logo-site-rb.svg) no-repeat;
        background-size: contain;
        background-position: center;
        margin-right: 10px;
        display: inline-block;
        position: relative;
        top: 3px;
        float: left;
    }

    .my-site span {
        line-height: 18px;
    }

    .my-site:hover span {
        color: #DC7A19;
        transition: .7s
    }

    .i-content>.tab-cont.active>.opis-prod>.opis-prod-left>.opis-prod>.opis-prod-left {
        width: 100% !important;
    }

    .certificates {
        padding-top: 42px;
        padding-bottom: 130px;

        background-image: url("<?=SITE_TEMPLATE_PATH?>/images/certificates.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    .certificates__title {
        margin: 0;
        margin-bottom: 5px;

        font-family: "Roboto Regular";
        font-style: normal;
        font-size: 32px;
        line-height: 38px;
        text-align: center;

        color: #000000;
    }

    .certificates__slider {
        position: relative;
    }

    .certificates__link {
        display: block;
    }

    .certificates__block {
        position: relative;
        width: 175px;
        height: 250px;
        margin: 30px 8px;

        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;

        transition: all 0.3s linear;
    }

    .certificates__block:hover {
        transform: scale(1.2);
    }

    .certificates__block:hover::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        height: 100%;
        z-index: 1;

        background-color: rgba(0, 0, 0, 0.3);

        background-image: url('<?=SITE_TEMPLATE_PATH?>/images/search.svg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: 20px auto;
    }



    .videoblog {
        padding-bottom: 0;
    }

    .videoblog__title {
        margin: 0;
        margin-bottom: 30px;

        font-family: "Roboto Regular";
        font-style: normal;
        font-size: 32px;
        line-height: 38px;
        text-align: center;

        color: #000000;
    }

    .videoblog__subtitle {
        margin: 0;
        margin-bottom: 43px;

        font-family: "Roboto Regular";
        font-style: normal;
        font-size: 18px;
        line-height: 21px;
        text-align: center;

        color: #000000;
    }

    .videoblog__container {
        margin: 0 auto;
        text-align: center;
    }

    .slick-prev {

        display: block;
        position: absolute;
        top: 50%;
        left: -30px;
        width: 25px;
        height: 25px;
        font-size: 0;
        background-color: transparent;
        border: none;
        border-bottom: 2px solid #757575;
        border-left: 2px solid #757575;
        transform: rotate(45deg) translateY(-50%);

        cursor: pointer;
    }

    .slick-next {
        display: block;
        position: absolute;
        top: 50%;
        right: -30px;
        width: 25px;
        height: 25px;
        font-size: 0;
        background-color: transparent;
        border: none;
        border-bottom: 2px solid #757575;
        border-left: 2px solid #757575;
        transform: rotate(-135deg) translateY(-50%);

        cursor: pointer;
    }



    .slick-dots {
        display: flex !important;
        position: absolute;
        bottom: -70px;
        left: 50%;
        transform: translateX(-50%);
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .slick-dots li {
        display: block;
        margin: 0;
        margin-left: 7px;
        font-size: 0;
    }

    .slick-dots li button {
        display: block;
        width: 18px;
        height: 18px;
        font-size: 0px;
        border-radius: 50%;
        background-color: #FFF;
        border: 1px solid #B0B0B0;
        box-sizing: border-box;
        line-height: 0;
    }

    .slick-dots li.slick-active button {
        background-color: #EB5757;
        border-color: #EB5757;
    }



    @media screen and (max-width: 1200px) {

        .certificates {
            padding-bottom: 40px;
        }

        .slick-dots {
            bottom: -10px;
        }

        .slick-prev,
        .slick-next {
            display: none !important;
        }

        .vide {
            width: 300px !important;
            height: auto !important;

        }
    }

/*  */


.bx_catalog_tile_category_title1 {
    text-align: center;

}

.bx_catalog_tile_category_title1 a {
    text-decoration: none;
    color: black!important;
}

.bx_catalog_tile_category_title1 a:hover {
    text-decoration: none!important;
    color: black!important;
}



.product-item-image-original , .product-item-image-alternative {
   height: 50%; 
    background-size: cover;
    display: block!important;
    width: 100%!important;
    height: 70%!important;
    margin-top: -15px;
}

.product-item-image-wrapper {
    height: 65%;
}

.product-item-title {
    position: relative;
    top: -80px;
    text-align: center;
    
}

.product-item-title::before {
    content:'';
    display:block;
    width: 30%;
    
    border-top: 2px solid #F2C94C;
    margin:auto;
    margin-bottom: 20px;
}

.product-item-title a {
    font-size: 1em!important;
}





    @media screen and (min-width: 700px){
        .img-clients:nth-child(6n)  {
        margin-right: 0px
    }  

}

@media screen and (max-width: 1000px){
    .product-item-title{
        top: -130px;
    }

}

.product-item-detail-pay-block, .display-none, .product-item-detail-short-card-fixed {
    display: none;
}


/* Slider */
.slick-slider
{
    position: relative;

    display: block;
    box-sizing: border-box;

    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;

    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;

    display: block;
    overflow: hidden;

    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;

    display: block;
    margin-left: auto;
    margin-right: auto;
}
.slick-track:before,
.slick-track:after
{
    display: table;

    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;

    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;

    height: auto;

    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}


    </style>
</head>

<?
global $type_client;
$type_client = preg_match("/(iphone|android|operamobi|blackberry)/i",$_SERVER['HTTP_USER_AGENT']);
?>


<body>





    <div class="no-hidden">
        <h1 class="none-h1">Вентиляция Уфа</h1>


        <? if ($type_client != 1) {?>

        <div class="men-all">




            <div class="block-width">




                <div class="top" style="padding: 20px 0px;">
                    <a href="/" class="logo"><span style="display:none">Главная</span></a>
                        <div class="line-top line-rezhim"><div class="icon icon-4"></div>Ежедневно 9.00 - 22.00</div>
                        <div class="line-top click-1" onclick="tema_cons('Написать нам','Написать нам','R1');"><div class="icon icon-3"></div>ovksistema@bk.ru</div>
                        <div class="line-top click-1" onclick="tema_cons('Заказать звонок','Заказать звонок','R1');"><div class="icon icon-2"></div>+7 (347) 266-19-40</div>
                        <div class="line-top ml"><div class="icon icon-1 "></div>Уфа, ул. Заводская 11/1 </div>
                    </div>
            </div>



            <div class="menu">
                <div class="block-width">
                    <ul>
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "catalog_horizontal1", Array(
	"ALLOW_MULTI_SELECT" => "N",	
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",	
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => "",	
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",	
		"MENU_THEME" => "site",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "catalog_horizontal1"
	),
	false
);?>



                      
                    </ul>
                    <button class="button-top" onclick="tema_cons('Бесплатная консультация','Бесплатная консультация','R2');" style="padding: 13px 25px; margin-top: 20px;">Бесплатная консультация</button>
                </div>




            </div>




        </div>


        <?}else{?>

        <div class="top-mobil">
            <div class="block-width k-menu"><a href="/" class="logo"><span style="display:none">Главная</span></a><a
                    style="text-decoration: none;color: #000;" href="tel:+7(347)266-19-40">+7 (347) 266-19-40</a><img
                    src="<?=SITE_TEMPLATE_PATH?>/images/menu-button.png" id="key-request-button-1" class="burger-menu"
                    alt="Меню"></div>
        </div>
        <div id="key-request-open-1" class="window-open-block">
            <div class="block-width">
                <span class="close-this-window"></span>
                <ul class="topmenu-mobil">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "catalog_horizontal2", Array(
	"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => "",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_THEME" => "site",	
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "catalog_horizontal2"
	),
	false
);?>
                </ul>
                <button class="button-top" onclick="tema_cons('Бесплатная консультация','Бесплатная консультация','R2');">Бесплатная консультация</button>
            </div>
        </div>


        <?}?> 


        <div class="otstup-block"></div>


        <div style="width: 100%">

            <?$APPLICATION->ShowPanel()?>

            <?if($USER->IsAdmin()):?>

            <div style="border:red solid 1px">
                <form action="/bitrix/admin/site_edit.php" method="GET">
                    <input type="hidden" name="LID" value="<?=SITE_ID?>" />
                    <p>
                        <font style="color:red">
                            <?echo GetMessage("DEF_TEMPLATE_NF")?>
                        </font>
                    </p>
                    <input type="submit" name="set_template" value="<?echo GetMessage(" DEF_TEMPLATE_NF_SET")?>" />
                </form>
            </div>

            <?endif?>

        </div>






     
