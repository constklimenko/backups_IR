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
?>






<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

<div class="card-little  <?=$arItem["PROPERTIES"]["CSS_MODIFIER"]["VALUE"]?> ">
						<div class=" info-block__outbox justify-start  pa2">
							<div class=" info-block__card-img ma0" style="height: 3em;background-image: url(<?=CFile::GetPath($arItem["PROPERTIES"]["ICON"]["VALUE"])?>);">
							</div>
							<div class="mt3 b tc">
							   <?echo $arItem["NAME"]?>
							</div>
							<div class="mt2 mb2 tc tablete-hide">
							     <?echo $arItem["PREVIEW_TEXT"];?>
							</div>
						</div>
					</div>



	 
	
<?endforeach;?>




