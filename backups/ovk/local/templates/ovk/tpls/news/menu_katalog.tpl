<?php
$FORMS = Array();

/* Здесь выводится список новостей. Оформление каждой новости берётся из блока lastlist_item */
/* Подключаем список страниц при постраничном выводе по шаблону tpls/numpages/default.tpl */
$FORMS['listlents_block'] = <<<END

				 %items%   
END;

/* Здесь выводится анонс новости. Оформление просмотра полной новости берётся из блока view */
$FORMS['listlents_item'] = <<<END
<li><a href="%readme%">%name%</a></li>
END;

?>