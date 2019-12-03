<?php
$FORMS = Array();

/* Здесь выводится список новостей. Оформление каждой новости берётся из блока lastlist_item */
/* Подключаем список страниц при постраничном выводе по шаблону tpls/numpages/default.tpl */
$FORMS['lastlist_block'] = <<<END

				 %items%   
END;

/* Здесь выводится анонс новости. Оформление просмотра полной новости берётся из блока view */
$FORMS['lastlist_item'] = <<<END
<div class="certificates__item">
	<a class="certificates__link" href="%anons_pic%" data-lightbox="roadtrip">
		<div class="certificates__block" style="background-image: url(%anons_pic%);">
		</div>
	</a>
</div>
END;

?>