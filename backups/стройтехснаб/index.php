<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Стройтехснаб");
?>
<div class="info-block top-bg nt2">
    <div class="ml0 container">
        <div class="info-block__outbox w-75 white">
            <div class="info-block__inbox">
                <div class="h1-nm b tj ">
                    С 2004 года проектируем, производим и собираем металлоконструкции в Уфе
                </div>
            </div>
            <div class="info-block__inbox">
                <div class="ft-20">
                    Самостоятельно проектируем на основании схемы заказчика, либо используем свои чертежи
                </div>
            </div>
            <div class="info-block__inbox tablete-column items-start">
                <div class="ft-25 dib pb2">
                    Рассчитаем проект в течение 1 дня!
                </div>
                <div class="h5 pt3 pb2-m dib button" onclick="tema_cons('Получить смету','Получить смету','R1')">
                    Получить смету
                </div>
            </div>
        </div>
    </div>
</div>
<div class="constructions" id="constructions">
    <div class="container">
        <div class="info-block__outbox">
            <div class="info-block__inbox">
                <div class="sts-blue b center h1-nm">
                    Конструкции
                </div>
            </div>
            <div class="info-block__inbox flex-wrap content-between">
                <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"const-sts", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "cards",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "CSS_MODIFIER",
			1 => "ICON",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "TIMESTAMP_X",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "const-sts",
		"SORT_BY2" => "SORT"
	),
	false
);?>
            </div>
            <div class="info-block__inbox ">
                <div class="h5 dib center button pb3 white">
                    Посмотреть все <span class="tablete-hide">конструкции</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="works container pb5" id="works">
    <div class=" info-block__outbox relative ">
        <div class="info-block__inbox">
            <div class="sts-blue b center h1-nm">
                Готовые работы<br>
                <br>
            </div>
        </div>
        <div class="mobile-next">
            <div class="sts-arrow-next ">
            </div>
        </div>
        <div class="regular slider slider1">

            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"slaidy-sts",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_DETAIL_PICTURE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("DETAIL_PICTURE",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "simple",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
        </div>
        <div class="mobile-prev">
            <div class="sts-arrow-prev ">
            </div>
        </div>
        <div class="info-block__inbox slider-arrows sts-blue">
            <div class="sts-arrow-next mobile-hide">
            </div>
            <span class="count-slde b h4 center">
                1/8</span>
            <div class="sts-arrow-prev mobile-hide">
            </div>
        </div>
    </div>
</div>
<div class="container-mob" id="preim" >
    <div class="preim relative ">
        <div class=" preim-bg bg-cover ">
        </div>
        <div class="container">
            <div class=" info-block__outbox white">
                <div class="info-block__inbox">
                    <div class=" b center h1-nm">
                        Преимущества заказа у нас
                    </div>
                </div>
                <div class="info-block__inbox flex-wrap">


                    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"karty-sts", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "cards",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "CSS_MODIFIER",
			1 => "ICON",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "TIMESTAMP_X",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "karty-sts"
	),
	false
);?>


                </div>
                <div class="info-block__inbox ">
                    <div class="h5 dib center button pb3"
                        onclick="tema_cons('Получить коммерческое предложение','Получить коммерческое предложение','R1')">
                        Получить коммерческое предложение
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sertificats container" id="sertificats">
	<div class=" info-block__outbox relative">
		<div class="info-block__inbox">
			<div class="sts-blue b center h1-nm">
				 Подтверждение качества
			</div>
		</div>
		<div class="mobile-next">
			<div class="sts-arrow-next san2-m ">
			</div>
		</div>
		<div class="regular slider2 slider">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"slaidy-sts",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_DETAIL_PICTURE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("DETAIL_PICTURE",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "simple",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
                    <div>
                        <a data-lightbox="roadtrip" href="local/templates/konstruktsii-ufa/img/sert/1big.jpg">
                            <div class="slider__block slider__block--sert"
                                style="background:url(local/templates/konstruktsii-ufa/img/sert/1.jpg)">
                            </div>
                        </a>
                    </div>
                    <div>
                        <a data-lightbox="roadtrip" href="local/templates/konstruktsii-ufa/img/sert/1big.jpg">
                            <div class="slider__block slider__block--sert"
                                style="background:url(local/templates/konstruktsii-ufa/img/sert/1.jpg)">
                            </div>
                        </a>
                    </div>
                    <div>
                        <a data-lightbox="roadtrip" href="local/templates/konstruktsii-ufa/img/sert/1big.jpg">
                            <div class="slider__block slider__block--sert"
                                style="background:url(local/templates/konstruktsii-ufa/img/sert/1.jpg)">
                            </div>
                        </a>
                    </div>
                    <div>
                        <a data-lightbox="roadtrip" href="local/templates/konstruktsii-ufa/img/sert/1big.jpg">
                            <div class="slider__block slider__block--sert"
                                style="background:url(local/templates/konstruktsii-ufa/img/sert/1.jpg)">
                            </div>
                        </a>
                    </div>
                    <div>
                        <a data-lightbox="roadtrip" href="local/templates/konstruktsii-ufa/img/sert/1big.jpg">
                            <div class="slider__block slider__block--sert"
                                style="background:url(local/templates/konstruktsii-ufa/img/sert/1.jpg)">
                            </div>
                        </a>
                    </div>
                    <div>
                        <a data-lightbox="roadtrip" href="local/templates/konstruktsii-ufa/img/sert/1big.jpg">
                            <div class="slider__block slider__block--sert"
                                style="background:url(local/templates/konstruktsii-ufa/img/sert/1.jpg)">
                            </div>
                        </a>
                    </div>
                    <div>
                        <a data-lightbox="roadtrip" href="local/templates/konstruktsii-ufa/img/sert/1big.jpg">
                            <div class="slider__block slider__block--sert"
                                style="background:url(local/templates/konstruktsii-ufa/img/sert/1.jpg)">
                            </div>
                        </a>
                    </div>
                    <div>
                        <a data-lightbox="roadtrip" href="local/templates/konstruktsii-ufa/img/sert/1big.jpg">
                            <div class="slider__block slider__block--sert"
                                style="background:url(local/templates/konstruktsii-ufa/img/sert/1.jpg)">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="mobile-prev">
                    <div class="sts-arrow-prev sap2-m ">
                    </div>
                </div>
                <div class="info-block__inbox slider-arrows sts-blue">
                    <div class="sts-arrow-next san2 mobile-hide">
                    </div>
                    <span class="count-slde2 b h4 center">1/8</span>
                    <div class="sts-arrow-prev sap2 mobile-hide">
                    </div>
                </div>
            </div>
        </div>
        <div class="info-block question-bg ">
            <div class=" relative " style="height: 100%;">
                <span class="lady-aside"> </span>
                <div class=" container ">
                    <div class="info-block__outbox w-75 white">
                        <div class="info-block__inbox">
                            <div class=" b tj h1-nm">
                                Остались вопросы?
                            </div>
                        </div>
                        <div class="info-block__inbox ">
                            <div class="h5">
                                Оставьте заявку и мы перезвоним Вам в ближайшее время
                            </div>
                        </div>
                        <div class="info-block__inbox form-zayavka-modal tablete-column items-start" id="forma-vopros">
                            <input class="input mb2 ft-22 pl2 tl mh3-m mr3-ns mr3-l pb3" type="text"
                                placeholder="Ваше имя" name="form_vopros" id="fio_vopros"> <input
                                class="input mb2 ft-22 pl2 tl mh3-m mr3-ns mr3-l pb3" type="text"
                                placeholder="Телефон или почта" name="form_vopros" id="tel_vopros">
                            <div class="button mb2 pt3"
                                onclick="document.querySelector('.form-zayavka-modal').className =(document.querySelector('.form-zayavka-modal').className == 'info-block__inbox form-zayavka-modal tablete-column'? 'info-block__inbox forma-vopros form-zayavka-modal tablete-column':'info-block__inbox form-zayavka-modal tablete-column'); SendPsylkoy_vopros();">
                                <div class="ft-22 ma0 pt2 dib pb2-m ">
                                    Отправить заявку
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>