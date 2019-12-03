<?php
$FORMS = Array();

/* Здесь выводится список новостей. Оформление каждой новости берётся из блока lastlist_item */
/* Подключаем список страниц при постраничном выводе по шаблону tpls/numpages/default.tpl */
$FORMS['listlents_block'] = <<<END

				 %items%   
END;

/* Здесь выводится анонс новости. Оформление просмотра полной новости берётся из блока view */
$FORMS['listlents_item'] = <<<END
<div class="katalog1"><a href="%readme%" ><div class="img-katalog1" style="background: url(%header_pic%) no-repeat;background-size: cover;background-position: center;"></div><span style="display:none">%name%</span><div class="opis-katalog1"><span></span>%name%</div></a></div> 
END;

?>