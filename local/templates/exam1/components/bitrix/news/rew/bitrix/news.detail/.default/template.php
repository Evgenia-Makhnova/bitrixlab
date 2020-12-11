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

<?if(isset($arResult["DETAIL_PICTURE"]["SRC"])) {
	$src = $arResult["DETAIL_PICTURE"]["SRC"];
} else {
	$src = SITE_TEMPLATE_PATH."/img/no_photo.jpg";
}
?>
<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
		<?echo $arResult["DETAIL_TEXT"];?>								
		</div>
				<div class="review-autor">
									<?=$arResult["NAME"]?>, <?=$arResult["DISPLAY_ACTIVE_FROM"]?> г., <?=$arResult["PROPERTIES"]['POSITION']['VALUE'];?>, <?=$arResult["PROPERTIES"]['COMPANY']['VALUE'];?>.
				</div>
	</div>
	<div style="clear: both;" class="review-img-wrap"><img src="<?=$src ?>" alt="img"></div>
</div>

<div class="exam-review-doc">
	<p>Документы:</p>
	<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="./img/icons/pdf_ico_40.png"><a href="">Файл 1</a></div>
	<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="./img/icons/pdf_ico_40.png"><a href="">Файл 2</a></div>
	<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="./img/icons/pdf_ico_40.png"><a href="">Файл 3</a></div>
	</div>
	<hr>
	<a href="<?=$arResult["LIST_PAGE_URL"]?>" class="review-block_back_link"> &larr; К списку отзывов</a>
              


