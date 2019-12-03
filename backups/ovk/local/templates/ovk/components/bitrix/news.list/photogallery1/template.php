<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);



$countdown = 0; // счётчик числа выводимых новостей





?>



<?php foreach($arResult["ITEMS"] as $item): 
$this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>




		<? if($item["DETAIL_PICTURE"]): ?>


			
			


			<a id="<?=$this->GetEditAreaId($item['ID']);?>"  href="<?=$item["DETAIL_PICTURE"]["SRC"]?>" rel="lightbox"
					data-lightbox="example-set" style="background:
					url(<?=CFile::GetPath($photo)?>) no-repeat;background-size:
					cover;background-position: center;" class="raboty1 lightbox-gal-1"><div
						class="hover-raboty1"><span></span>Увеличить</div></a>





			<? endif;?>

			
			<?php foreach($item["PROPERTIES"]["PHOTO_CONTAINER"]['VALUE'] as $photo): ?>   

			<? if($countdown < $arParams["~NEWS_COUNT"]):?>

			<a  href="<?=CFile::GetPath($photo)?>" rel="lightbox"
					data-lightbox="example-set" style="background:
					url(<?=CFile::GetPath($photo)?>) no-repeat;background-size:
					cover;background-position: center;" class="raboty1 lightbox-gal-1"><div
						class="hover-raboty1"><span></span>Увеличить</div></a>

 

	<?	$countdown++;?>

        <? endif;?>
		
<?php  endforeach; ?>  
 
 
<?php  endforeach; ?>  



 