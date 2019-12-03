<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("о компании");
?> <div class="container bottom-ser">
	<div class="block-width">
		<div id="navibar">
	<a href="/">Главная</a> - <a href="/o-kompanii/">О компании</a>
</div>
				
		<div class="zag-container">О компании</div>
		<div class="inline-block content-site">
			<p style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif; font-size: 12pt;">Компания ОВК-Система - торгово-монтажная организация с большим опытом работы в сфере отопления, вентиляции, кондиционирования и др.</span></p>
<p style="text-align: justify;"><strong><em><span style="font-family: arial, helvetica, sans-serif; font-size: 12pt;">Наш девиз - комплексное решение Ваших задач!</span></em></strong></p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="color: #ff0000;">ООО "ОВК-Система" является лауреатом конкурса "Лучшие товары Башкортостана 2017". Наша компания заняла первое место в номинации "Монтаж кондиционеров".</span></p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="color: #ff0000;">Наши преимущества:</span></p>
<p style="text-align: justify;">&nbsp;- Наличие собственной сервисной службы (все гарантийные вопросы решаются максимально быстро).</p>
<p style="text-align: justify;">&nbsp;- Штат сотрудников более 25 человек (обеспечивает максимальную оперативность при монтаже и пусконаладке оборудования)</p>
<p style="text-align: justify;">&nbsp;- Все сотрудники официально трудоустроены (при выполнении большого объема работ у налоговой не возникнет к Вам лишних вопросов)</p>
<p style="text-align: justify;">&nbsp;- Наличие собственного склада с ходовыми позициями как по оборудованию, так и по запчастям.</p>
<p style="text-align: justify;">&nbsp;- Наличие необходимых разрешительных документов (Свидетельство СРО, лицензия МЧС, сертификат ISO, сертификаты официального дилера)</p>
<p style="text-align: justify;">&nbsp;- Высокая оснащенность профессиональными инструментами (установки для алмазного бурения (позволяет сделать пробивку отверстия максимально чисто и быстро), машина для чистки воздуховодов (позволяет произвести очистку системы вентиляции без демонтажа и разборки воздуховодов), все монтажные бригады укомплектованы аккумуляторным инструментом Hilti (шуруповерт, болгарка, перфоратор, циркулярная пила, сабельная пила) это позволяет максимально увеличить качество и скорость выполнения монтажа</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="color: #ff0000;">Объекты, находящиеся на обслуживании</span> (обслуживание, поставка и монтаж систем кондиционирования, вентиляции и холодильного оборудования):</p>
<ul style="text-align: justify;">
<li>ООО "ЛАССЕЛСБЕРГЕР" по адресу Республика Башкортостан, Уфимский район, с. Зубово, ул. Электрозаводская, д. 8</li>
<li><span> </span>ГК "Пышка" (административные, производственные помещения, пункты общественного питания суммарная площадь более 25000 м2</li>
<li><span>Ресторан</span> "<span>Максимилианс" </span><span>г. Уфа</span>, <span>ул. Менделеева, 137</span>, ТРК "Иремель"</li>
</ul>
<p style="text-align: justify;">И др.</p>
<div class="container certificates">
	<div class="block-width">
		<p class="certificates__title">
			Наши сертификаты
		</p>
		<? if ($type_client != 1) {?>




		<div class="certificates__slider">


		<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"sertificats", 
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
		"IBLOCK_ID" => "17",
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
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "AUTHOR",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "sertificats"
	),
	false
);?>
			
			
		</div>
		<?}else{?>

		<div style="display:block;
		width:100%;
		height: 60vh;
		background: url(/local/images/sert.jpg) no-repeat center/contain;
			"
		
		 alt="Сертификаты">

<?}?>



	</div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
		</div>
	</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>