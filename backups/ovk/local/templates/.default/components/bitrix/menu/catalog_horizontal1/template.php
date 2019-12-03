<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<?php if (empty($arResult['ALL_ITEMS'])) die; ?>



		<?php foreach($arResult['ALL_ITEMS'] as $arItem ):  ?>

		<? if($arItem['LINK'] == "/katalog/"): ?>
		<li class="hover-link">
				<a href="/katalog/" class="menu-sub">Каталог</a>
				<ul class="submenu">
				<?$APPLICATION->IncludeComponent("bitrix:menu", "catalog_horizontal3", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_THEME" => "site",	// Тема меню
		"ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => "catalog_horizontal3"
	),
	false
);?>
					 
				 <!-- <li><a href="/ventilyaciya/">Вентиляция</a></li><li><a href="/kondition/">Кондиционеры</a></li><li><a href="/otoplenie/">Отопление</a></li><li><a href="/santehnika/">Холодильное оборудование</a></li>
				 <li><a href="/tumanoobrazovanie/">Туманообразование</a></li><li><a href="/uvlazhniteli-mojki-vozduha/">Увлажнители, мойки воздуха </a></li><li><a href="/umnyj-dom/">Умный дом</a></li>    -->
				</ul>
			</li>

<? else: ?>

		<li><a href="<?=$arItem['LINK'];?> "> <?=$arItem['TEXT'];?>  </a></li>

<? endif; ?>

<? endforeach; ?>
		
