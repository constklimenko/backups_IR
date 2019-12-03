%system getOuterContent('./%template_resources%/tpls/content/header.tpl')%
<div class="container bottom-ser">
	<div class="block-width">
		 %core navibar('navibar_main.tpl')%
		<div class="zag-container" style="margin-bottom:0px">%header%</div>
		<div class="inline-block content-site" %custom none(%kontent%)%>
			%kontent%
		</div>
		<div class="inline-block content-site" %custom none(%blok_svernutrazvernut%)%>
			<div class="text-information text-information-ves">%blok_svernutrazvernut%</div>
			<!-- <div class="dalee-btn">Развернуть</div> -->
		</div>
		<div class="inline-block news text-center news-main">
			%news lastlist('%id%','novosti_main', 9,'','',1)%
		</div>
	</div>
</div>
%system getOuterContent('./%template_resources%/tpls/content/footer.tpl')%