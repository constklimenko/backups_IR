<?php
$FORMS = Array();

/* Здесь выводится список новостей. Оформление каждой новости берётся из блока lastlist_item */
/* Подключаем список страниц при постраничном выводе по шаблону tpls/numpages/default.tpl */
$FORMS['lastlist_block'] = <<<END
%items%
END;

/* Здесь выводится анонс новости. Оформление просмотра полной новости берётся из блока view */
$FORMS['lastlist_item'] = <<<END



END;

/* Выводим всю новость целиком */
/* Подлючаем блок Ссылки по теме, оформление которых подключаются в блоке related_block */
$FORMS['view'] = <<<END

END;

/* Здесь выводится список рубрик новостей. Оформление каждой рубрики берётся из блока listlents_item */
$FORMS['listlents_block'] = <<<END
<div class="tabs inline-block">%items%</div>
END;

/* Выводим каждую рубрику */
$FORMS['listlents_item'] = <<<END
<div class="tab">%header%</div>
END;

/* Выводим данный блок, если в новостном разделе нет ни одной новости или рубрики */
$FORMS['listlents_block_empty'] = <<<END
END;

?>