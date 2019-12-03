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


$counter = 4; // Счётчик числа карточек выводимых на страницу

$strTitle = "";
?>
<div class="catalog-section-list block-width">

<div class="inline-block katalog-raskr" style="">
    <?
	$TOP_DEPTH = $arResult["SECTION"]["DEPTH_LEVEL"];
	$CURRENT_DEPTH = $TOP_DEPTH;

	foreach($arResult["SECTIONS"] as $arSection):?>
	

		<? $link = '<a href="/katalog/'.$arSection["CODE"].'/" >';
		


		$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
		$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));?>

		<?if($counter > 0):?>
	
			<?$counter--;?>
		
				
		
					<div class="katalog1" style="width: 21.5%; ">
						<?=$link?>
						<div class="img-katalog1"
							style="background: url(<?=$arSection['PICTURE']['SRC'];?>) no-repeat;background-size: cover;background-position: center;">
						</div>
						<span style="display:none"><?=$arSection["NAME"];?></span>
						<div class="opis-katalog1"><span></span><?=$arSection["NAME"];?></div>
						</a>
					</div>
				
		
		
		
		<? endif;?>

	<? endforeach; ?>

	</div></div>


