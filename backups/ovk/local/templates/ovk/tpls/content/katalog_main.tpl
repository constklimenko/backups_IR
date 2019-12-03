%system getOuterContent('./%template_resources%/tpls/content/header.tpl')%
<div class="container bottom-ser">
	<div class="block-width">
		 %core navibar('navibar_main.tpl')%
		<div class="zag-container">%header%</div>
		<div class="inline-block content-site" %custom none(%kontent%)%>
			%kontent%
		</div>
		<div class="inline-block katalog-main">
			<!-- %menu draw('679','katalog')% -->
			%news listlents('610','menu_katalog_main', 60,'','',1)%
		</div>
		<div class="inline-block content-site" %custom none(%blok_svernutrazvernut%)%>
			<div class="text-information text-information-ves">%blok_svernutrazvernut%</div>
			<!-- <div class="dalee-btn">Развернуть</div> -->
		</div>
	</div>
	<div class="rab-block inline-block text-center bg-ser" style="margin-top:40px;">
		<div class="block-width">
			<div class="zag-container">Как мы работаем</div>
			<div class="inline-block">
				%news lastlist('60','rab', 12,'','',1)%
			</div>
		</div>
		</div>
		<div class="block-width">
		<div class="inline-block" style="margin-top:40px;">
			<div class="zag-container">Наши преимущества</div>
			<div class="inline-block  text-center">
				%news lastlist('67','preim', 10,'','',1)%
			</div>
		</div>
		</div>
</div>
%system getOuterContent('./%template_resources%/tpls/content/footer.tpl')%