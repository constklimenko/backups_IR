<?php
$FORMS = Array();

/* Здесь выводится список новостей. Оформление каждой новости берётся из блока lastlist_item */
/* Подключаем список страниц при постраничном выводе по шаблону tpls/numpages/default.tpl */
$FORMS['lastlist_block'] = <<<END

				 %items%   
END;

/* Здесь выводится анонс новости. Оформление просмотра полной новости берётся из блока view */
$FORMS['lastlist_item'] = <<<END
 <div class="swiper-slide text-center">
	<a  href="%link%" class="new1 text-center"> 
		<div class="title-new1">%name%</div>
		<div class="opis-new1">%anons%</div>
		<div class="date-new1">%system convertDate(%publish_time%, 'd.m.Y')%</div>
	</a>
 </div>
END;

?>