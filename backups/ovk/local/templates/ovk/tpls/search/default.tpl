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
<p>
<span class="s_num">%num%.</span> <a href='%link%'><b>%name%</b></a>
</p>


END;

$FORMS['search_empty_result'] = <<<END
<div style="color: #4c87d5;font-size: 20px;font-family: 'PFBeauSansProBold';">Извините. По данному запросу ничего не найдено.</div>
         
END;

$FORMS['search_form'] = <<<END
<form method="get" action="/rezultaty-poiska-po-sajtu/" class="poisk">
	<input type="text" name="search_string" value="%last_search_string%"  onfocus="javascript: if(this.value == '%last_search_string%') this.value = '';"
   onblur="javascript: if(this.value == '') { this.value = '%last_search_string%';}" />
	 <button type="submit"  ><img src="/templates/klapan/images/poisk.png" alt="">	</button>
</form>

END;

?>