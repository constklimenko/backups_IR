<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");

?><div class="fon-main">
	<div class="block-width">
		<div class="opis-main">
			<p>
				Поставка систем отопления, вентиляции,<br>
				кондиционирования и водоснабжения с гарантией
			</p>
			<p>
				<strong>Монтаж в кратчайшие сроки и по выгодным ценам</strong>
			</p>
			<h2 style="display: none;">Система вентиляции</h2>
			<h3 style="display: none;">Кондиционеры купить</h3>
			<h4 style="display: none;">Кондиционеры цена</h4>
			<h5 style="display: none;">Система вентиляции монтаж</h5>
			<h6 style="display: none;">Кондиционеры обслуживание</h6>
			<p>
				<img width="105" alt="Кондиционеры Уфа" src="/local/templates/ovk/images/obk.jpg" height="13" style="display: none;"> <img width="105" alt="Система вентиляции" src="/local/templates/ovk/images/people.jpg" height="13" style="display: none;"> <img width="105" alt="Кондиционеры купить" src="/local/images/ovk/z6ik0t85ofo.jpg" height="13" style="display: none;"> <img width="105" alt="Кондиционеры цена" src="/local/images/ovk/img-20170810-wa0002.jpg" height="13" style="display: none;"> <img width="105" alt="Система вентиляции монтаж" src="/local/images/ovk/2018-03-14-photo-00001992.jpg" height="13" style="display: none;"> <img width="105" alt="Кондиционеры обслуживание" src="/local/images/ovk/img-20170807-wa0003.jpg" height="13" style="display: none;">
			</p>
		</div>

		<? if ($type_client != 1): ?>
		<div class="people">
		</div>
		<?endif;?>

	</div>
</div>
<div class="bg-pink inline-block">
	<div class="block-width">
		<div class="img-rab">
		</div>
		<div class="text-pink">
			<span onclick="tema_cons('Заказать звонок','Заказать звонок','R1');">Вам нужно только позвонить</span> - выезд специалиста и расчет стоимости бесплатный. <br>
			Мы работаем без перерывов и выходных.
		</div>
	</div>
</div>
<div class="container bg-ser">
	<div class="block-width">
		<div class="zag-katalog">
			Каталог оборудования и услуг
		</div>
	</div>
</div>
<div class="polygon">
</div>
<div class="container top-shadow">

<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "tree1", Array(
	"COMPONENT_TEMPLATE" => "tree",
		"IBLOCK_TYPE" => "simple",	// Тип инфоблока
		"IBLOCK_ID" => "16",	// Инфоблок
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],	// Код раздела
		"COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
		"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
		"SECTION_FIELDS" => array(	// Поля разделов
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(	// Свойства разделов
			0 => "",
			1 => "",
		),
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"VIEW_MODE" => "LINE",
		"SHOW_PARENT_NAME" => "Y"
	),
	false
);?> 


 <button class="button-main" onclick="location.href = '/katalog/'">Весь каталог</button>
	</div>
</div>  
<div class="block-width">
	<div class="container bg-company">
		<div class="left-company">
			<div class="title-company">
				Выгоды от сотрудничества с компанией
			</div>
			<div class="line-company">
				<div class="ed-company">
					1.
				</div>
				<div class="text-company">
					<p>
						Во-первых, - <strong>гарантия качества продукции.</strong> Мы являемся официальными дилерами крупнейших торговых марок в сфере отопления, вентиляции, кондиционирования, водоснабжения, электрооборудования и др. Мы работаем как напрямую с заводами производителями, так и с крупнейшими дистрибьюторами. Благодаря этому мы можем предложить конкурентные цены и официальную гарантию подвержденную сертификатами производителей.
					</p>
				</div>
			</div>
			<div class="line-company">
				<div class="ed-company">
					2.
				</div>
				<div class="text-company">
					<p>
						Во-вторых, - <strong>гарантия низкой цены.</strong> Мы постоянно совершаем мониторинги и стараемся предлагать самую выгодную цену на оборудование и услуги. В случае если вы найдете цену на аналогичный товар ниже нашей - сообщите нам и мы постараемся сделать еще более выгодное предлжение.
					</p>
				</div>
			</div>
			<div class="line-company">
				<div class="ed-company">
					3.
				</div>
				<div class="text-company">
					<p>
						В-третьих, - <strong>гарантия качественного монтажа.</strong> В компании ОВК-Система большой штат квалифицированного персонала включая монтажников, сервисный персонал и инженерно-технических работников. Мы работаем как с крупными (заводы, школы, гостиницы, жилые здания), так и с небольшими частными объектами(комнаты, квартиры, коттеджи, небольшие офисы)
					</p>
				</div>
			</div>
			<div class="line-company">
				<div class="ed-company">
					4.
				</div>
				<div class="text-company">
					<p>
						В-четвертых, - <strong>техническая поддержка.</strong> Купив и установив оборудование у нас, вы получаете не только качественную технику, но и постоянно действующую службу технической поддержки, которая ответит на все Ваши вопросы, а также напомнит вовремя сделать техническое обслуживание.
					</p>
				</div>
			</div>
		</div>

		<? if ($type_client != 1): ?>	
 <a href="/local/images/ovk/sertifikat.png" rel="lightbox" style="background: url(/local/images/ovk/sertifikat.jpg) no-repeat;background-size: contain;" class="right-company"></a>
 <?endif;?>
	</div>
</div>
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
<div class="container videoblog">
	<div class="block-width">
		<p class="videoblog__title">
			Монтаж кондиционера
		</p>

		
		

		<p class="videoblog__subtitle">
			Расскажем с каким материалом и оборудованием выполняется монтаж кондиционера
		</p>
		<? if ($type_client != 1) {?>

		<div class="videoblog__container">
			 <iframe class="vide" width="560" height="315" src="https://www.youtube.com/embed/f4znpG1WSkw"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		 <?}else{?>
			

			<a  style="display:block;
		width:100%;
		height: 30vh;
		background: url(/local/images/youtube.png) no-repeat center/contain;
			" href="https://youtu.be/f4znpG1WSkw"> 
		</a>
		<p class="videoblog__subtitle">
			Смотреть видео
		</p>

			<?}?> 

	</div>
</div>
<div class="container">
	<div class="block-width">
		<div class="zag-container">
			Примеры работ
		</div>
		<div class="inline-block raboty">

		<? if ($type_client != 1) {?>

			 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"photogallery1",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"COMPONENT_TEMPLATE" => "photogallery1",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "14",
		"IBLOCK_TYPE" => "simple",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "8",
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
		"PROPERTY_CODE" => array(0=>"",1=>"AUTHOR",2=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>

<?}else{?>

	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"photogallery1",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"COMPONENT_TEMPLATE" => "photogallery1",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "14",
		"IBLOCK_TYPE" => "simple",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
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
		"PROPERTY_CODE" => array(0=>"",1=>"AUTHOR",2=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
	
	<?}?> 
		
 <button class="button-main" onclick="location.href = '/fotogallereya/'">Посмотреть все работы</button>
	</div>
</div>
<div class="container">
	<div class="block-width">
		<div class="zag-container">
			Довольные клиенты
		</div>
		<div class="inline-block clients text-center">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"clients_logo",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"COMPONENT_TEMPLATE" => "clients_logo",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "15",
		"IBLOCK_TYPE" => "simple",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "8",
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
		"PROPERTY_CODE" => array(0=>"",1=>"AUTHOR",2=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
		</div>
	</div>
</div>
<div class="container bg-ser">
	<div class="block-width">
		<div class="zag-container" style="margin-bottom:0px">
			Новости
		</div>
		<div class="inline-block news text-center">
			<div class="swiper-container swiper-container-news text-center">
				<div class="swiper-wrapper">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"official2", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"COMPONENT_TEMPLATE" => "official2",
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
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "simple",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "7",
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
			0 => "AUTHOR",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>
				</div>
			</div>
			<div class="swiper-button-next">
			</div>
			<div class="swiper-button-prev">
			</div>
		</div>
	</div>
 <button class="button-main" onclick="location.href = '/novosti/'">Просмотреть все новости</button>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>