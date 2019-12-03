<?php
$FORMS = Array();

/* Здесь выводится список страниц. Оформление каждой страницы берётся из блока search_block_line */
/* Подключаем форму поиска из блока search_form */
/* Подключаем список страниц при постраничном выводе по шаблону tpls/numpages/default.tpl */
$FORMS['search_block'] = <<<END
<div id="search_pages">
<p>%search_founded_total1% %total% %search_founded_total%.</p>
%lines%
</div>
<p>%system numpages(%total%, %per_page%)%</p>
END;

/* Выводим номер, название и описание страницы в результатах поиска */
$FORMS['search_block_line'] = <<<END
<p> 
	<span>%num%.</span> <a href='%link%'>%name%</a> 
	%context%
</p>
END;

/* Выводим данный блок, если при поиске ничего не было найдено */
/* Подключаем форму поиска из блока search_form */
$FORMS['search_empty_result'] = <<<END
<div id="search_pages"> 
	<p>
		Извините. По данному запросу ничего не найдено.
	</p>
</div>
END;

$FORMS['search_form'] = <<<END









    <form action="%pre_lang%/poisk/" method="get" class="search2">

	
 		<input type="text" class="search_input"   name="search_string"  />
	
   <input type="submit" class="search_button" value=" " ></form>
END;

?>
