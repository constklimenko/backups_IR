<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<?php if (empty($arResult['ALL_ITEMS'])) die; ?>



		<?php foreach($arResult['ALL_ITEMS'] as $arItem ):  ?>



		<li><a href="<?=$arItem['LINK'];?> "> <?=$arItem['TEXT'];?>  </a></li>



<? endforeach; ?>
		
