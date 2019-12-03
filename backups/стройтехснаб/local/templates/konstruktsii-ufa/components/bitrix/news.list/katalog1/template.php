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


 
 <?php foreach($arResult["ITEMS"] as $arItem): 
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	
	?>  


 <div  id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="katalog1"><a href="<?=$arItem["PROPERTIES"]["KATALOG_LINK"]['VALUE']?>">
                    <div class="img-katalog1"
                        style="background: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>) no-repeat;background-size: cover;background-position: center;">
                    </div><span style="display:none"><?=$arItem["NAME"]?></span>
                    <div class="opis-katalog1"><span></span><?=$arItem["NAME"]?></div>
					<div class="opis-katalog1"><span></span><?=$arItem["PREVIEW_TEXT"]?></div>
                </a></div> 
				


 <?php  endforeach; ?>  






