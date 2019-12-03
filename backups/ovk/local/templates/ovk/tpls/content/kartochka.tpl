%system getOuterContent('./%template_resources%/tpls/content/header.tpl')%
<div class="container bottom-ser">
	<div class="block-width">
		 %core navibar('navibar_main.tpl')%
		<div class="zag-container" style="color: #4f4f4f;">%header%</div>
		<div class="inline-block content-site" %custom none(%kontent%)%>
			%kontent%
		</div>
		<div id="wr-tabs" class="inline-block">
			%news listlents('%id%','tab_kartochka', 30)%
			<div class="content i-content">%custom vivod_tovari('%id%')%</div>
		</div>
		<!-- <div id="wr-tabs-niz" class="inline-block">
			<div class="tabs">
				<div class="tab active" %custom none(%nazvanie_vkladki_1%)%>%nazvanie_vkladki_1%</div>
				<div class="tab" %custom none(%nazvanie_vkladki_2%)%>%nazvanie_vkladki_2%</div>
				<div class="tab" %custom none(%nazvanie_vkladki_3%)%>%nazvanie_vkladki_3%</div>
				<div class="tab" %custom none(%nazvanie_vkladki_4%)%>%nazvanie_vkladki_4%</div>
				<div class="tab" %custom none(%nazvanie_vkladki_5%)%>%nazvanie_vkladki_5%</div>
			</div>
			<div class="content">
				<div class="tab-cont active">
					%opisanie_vkladki_1%
				</div>
				<div class="tab-cont">
					%opisanie_vkladki_2%
				</div>
				<div class="tab-cont">
					%opisanie_vkladki_3%
				</div>
				<div class="tab-cont">
					%opisanie_vkladki_4%
				</div>
				<div class="tab-cont">
					%opisanie_vkladki_5%
				</div>
			</div>
		</div> -->
		<div class="inline-block katalog-kart" %custom none(%id_predlagaemoj_lenty_novostej%)%>
			<div class="zag-container">Смотрите так же</div>
			%news listlents('%id_predlagaemoj_lenty_novostej%','katalog_main',3,'','',1)%
		</div>
		<div class="inline-block content-site" %custom none(%blok_svernutrazvernut%)%>
			<div class="text-information text-information-ves">%blok_svernutrazvernut%</div>
			<!-- <div class="dalee-btn" style="margin-bottom:40px;">Развернуть</div> -->
		</div>
	</div>
	<div class="rab-block inline-block text-center bg-ser">
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