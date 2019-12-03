<?php
$FORMS = Array();

/* Здесь выводится список новостей. Оформление каждой новости берётся из блока lastlist_item */
/* Подключаем список страниц при постраничном выводе по шаблону tpls/numpages/default.tpl */
$FORMS['lastlist_block'] = <<<END
%items%
%system numpages(%total%, %per_page%, 'numpages')%
END;

/* Здесь выводится анонс новости. Оформление просмотра полной новости берётся из блока view */
$FORMS['lastlist_item'] = <<<END
<a  href="%link%" class="new1 text-center"> 
		<div class="title-new1">%name%</div>
		<div class="opis-new1">%anons%</div>
		<div class="date-new1">%system convertDate(%publish_time%, 'd.m.Y')%</div>
	</a>
END;

/* Выводим всю новость целиком */
/* Подлючаем блок Ссылки по теме, оформление которых подключаются в блоке related_block */
$FORMS['view'] = <<<END
%data getProperty(%id%, 'publish_pic', 'news.view')%
%content%
            <div style="float:left;">%system getPrevious(%pid%, 'default', 'publish_time',1)%</div>
            <div style="float:right;">%system getNext(%pid%, 'default', 'publish_time',1)%</div>
            <br />
%news related_links(%id%)%
END;

/* Здесь выводятся список ссылок по теме. Оформление каждой берётся из блока related_line */
$FORMS['related_block'] = <<<END
<p>
  <p>Ссылки по теме:</p>
  <ul>
    %related_links% 
  </ul>
</p>
END;

/* Выводим ссылку по теме */
$FORMS['related_line'] = <<<END
<li><a href="%link%">%name% (%system convertDate(%publish_time%, 'Y-m-d')%)</a></li> 
END;

/* Здесь выводится список рубрик новостей. Оформление каждой рубрики берётся из блока listlents_item */
$FORMS['listlents_block'] = <<<END
<p>
  <p>Рубрики новостей:</p>
  <ul>
    %items% 
  </ul>
<p>
END;

/* Выводим каждую рубрику */
$FORMS['listlents_item'] = <<<END
<li><a href="%link%">%header%</a></li> 
END;

/* Выводим данный блок, если в новостном разделе нет ни одной новости или рубрики */
$FORMS['listlents_block_empty'] = <<<END
END;

?>