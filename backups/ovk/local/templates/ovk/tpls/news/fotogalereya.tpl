<?php
$FORMS = Array();

/* Здесь выводится список новостей. Оформление каждой новости берётся из блока lastlist_item */
/* Подключаем список страниц при постраничном выводе по шаблону tpls/numpages/default.tpl */
$FORMS['lastlist_block'] = <<<END

				 %items%   
END;

/* Здесь выводится анонс новости. Оформление просмотра полной новости берётся из блока view */
$FORMS['lastlist_item'] = <<<END
<a href="%anons_pic%" rel="lightbox" data-lightbox="example-set" style="background: url(%anons_pic%) no-repeat;background-size: cover;background-position: center;"  class="raboty1 lightbox-gal-1"><div class="hover-raboty1"><span></span>Увеличить</div></a>
END;

?>