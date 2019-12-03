<?php
$FORMS = Array();

$FORMS['search_block'] = <<<END
%search insert_form()%

<p>
	%search_founded_total1% %total% %search_founded_total%.
</p>

<ul>
%lines%
</ul>

%system numpages(%total%, %per_page%)%

END;

$FORMS['search_block_line'] = <<<END
<li>
	<span class="s_num">%num%.</span> <a href='%link%' umi:element-id="%id%" umi:field-name="name">%name%</a>
	%context%
</li>

END;

$FORMS['search_empty_result'] = <<<END
%search insert_form()%
<p>
	Извините. По данному запросу ничего не найдено.
</p>

END;

$FORMS['search_form'] = <<<END
<form method="get" action="%pre_lang%/search/search_do/">
	<input type="text" name="search_string" class="search_inp" value=" " />
	<input type="submit" class="search_submit" value=" "/>

	
</form>

END;

?>