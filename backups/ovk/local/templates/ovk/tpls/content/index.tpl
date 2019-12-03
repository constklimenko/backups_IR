%system getOuterContent('./%template_resources%/tpls/content/header.tpl')%
<div class="fon-main">
	<div class="block-width">
		<div class="opis-main">
			%data getProperty('/', 'pervyj_blok')%
		</div>
		<div class="people"></div>
	</div>
</div>
<div class="bg-pink inline-block">
	<div class="block-width">
		<div class="img-rab"></div>
		<div class="text-pink"><span onclick="tema_cons('Заказать звонок','Заказать звонок','R1');">Вам нужно только позвонить</span> - выезд специалиста и расчет стоимости бесплатный. <br>Мы работаем без перерывов и выходных.</div>
	</div>
</div>
<div class="container bg-ser">
	<div class="block-width">
		<div class="zag-katalog">Каталог оборудования и услуг</div>
	</div>
</div>
<div class="polygon"></div>
<div class="container top-shadow">
	<div class="block-width">
		<div class="inline-block katalog-raskr">
			<!-- %menu draw('679','katalog')% -->
				%news listlents('610','menu_katalog_main', 30,'','',1)%
		</div>
		<button class="button-main" onclick="location.href = '/katalog/'">Весь каталог</button>
	</div>
</div>
<div class="block-width">
	<div class="container bg-company">
		<div class="left-company">
			<div class="title-company">Выгоды от сотрудничества с компанией</div>
			%news lastlist('2','vigodi', 7,'','',1)%
		</div>
		<a href="%data getProperty('/', 'vygody_ot_sotrudnichestva')%" rel="lightbox" style="background: url(%data getProperty('/', 'vygody_ot_sotrudnichestva')%) no-repeat;background-size: contain;" class="right-company"></a>
		<!-- <button class="button-main" onclick="location.href = '/katalog/'">Смотреть все сертификаты</button> -->
	</div>
</div>
<div class="container certificates">
	<div class="block-width">
		<p class="certificates__title">Наши сертификаты</p>
		<div class="certificates__slider">
			%news lastlist('4005','certificates',20,'','',1)%
		</div>
	</div>
</div>

<div class="container videoblog">
    <div class="block-width">
        <p class="videoblog__title">Монтаж кондиционера</p>
        <p class="videoblog__subtitle">Расскажем с каким материалом и оборудованием выполняется монтаж кондиционера</p>
        <div  class="videoblog__container">
            <iframe class="vide" width="560" height="315" src="https://www.youtube.com/embed/f4znpG1WSkw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

<div class="container">
	<div class="block-width">
		<div class="zag-container">Примеры работ</div>
		<div class="inline-block raboty">
			%news lastlist('8','fotogalereya', 8,'','',1)%
		</div>
		<button class="button-main" onclick="location.href = '/fotogalereya/'">Посмотреть все работы</button>
	</div>
</div>
<div class="container">
	<div class="block-width">
		<div class="zag-container">Довольные клиенты</div>
		<div class="inline-block clients text-center">
			%news lastlist('17','clients', 6,'','',1)%
		</div>
	</div>
</div>
<div class="container bg-ser">
	<div class="block-width">
		<div class="zag-container" style="margin-bottom:0px">Новости</div>
		<div class="inline-block news text-center">
		<div class="swiper-container swiper-container-news text-center">
					<div class="swiper-wrapper">
						%news lastlist('24','novosti', 15,'','',1)%
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
		</div>
		<button class="button-main" onclick="location.href = '/novosti/'">Просмотреть все новости</button>
	</div>
</div>
%system getOuterContent('./%template_resources%/tpls/content/footer.tpl')%