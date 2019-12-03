<?php
$FORMS = Array();

$FORMS['search_block'] = <<<END

<p style="color: #4c87d5;font-size: 20px;font-family: 'PFBeauSansProBold';margin-bottom: 20px;margin-bottom: 20px;">
	Найдено страниц: %total%
</p>

%lines%

<form method="get" action="/rezul-taty/" class="poisk">
	<input type="text" name="search_string"  style="background: #202843;" value="%last_search_string%"  onfocus="javascript: if(this.value == '%last_search_string%') this.value = '';"
   onblur="javascript: if(this.value == '') { this.value = '%last_search_string%';}" required="required"  />
	 <button type="submit" style="background: whitesmoke;" onclick="yaCounter44936248.reachGoal('METKA9');return true;"><img src="/templates/yalisi/images/poisk-ch.png" alt="">	</button>
</form> 

%system numpages(%total%, %per_page%)%




END;

$FORMS['search_block_line'] = <<<END
<div style="color: #4c87d5;    margin-bottom: 20px;font-size: 20px;font-family: 'PFBeauSansProBold';margin-bottom: 20px;" >%num%. <a href='%link%'>%name%</a></div>



END;

$FORMS['search_empty_result'] = <<<END
<div style="color: #4c87d5;font-size: 20px; margin-bottom: 20px;font-family: 'PFBeauSansProBold';">Извините. По данному запросу ничего не найдено :(</div>
<form method="get" action="/rezul-taty/" class="poisk">
	<input type="text" name="search_string"  style="background: #202843;" value="%last_search_string%"  onfocus="javascript: if(this.value == '%last_search_string%') this.value = '';"
   onblur="javascript: if(this.value == '') { this.value = '%last_search_string%';}" required="required"  />
	 <button type="submit" style="background: whitesmoke;"  onclick="yaCounter44936248.reachGoal('METKA9');return true;"><img src="/templates/yalisi/images/poisk-ch.png" alt="">	</button>
</form>       

END;

$FORMS['search_form'] = <<<END
<form method="get" action="/rezul-taty/" class="poisk">
	<input type="text" name="search_string"  value="%last_search_string%"  onfocus="javascript: if(this.value == '%last_search_string%') this.value = '';"
   onblur="javascript: if(this.value == '') { this.value = '%last_search_string%';}" required="required"  />
	 <button type="submit" onclick="yaCounter44936248.reachGoal('METKA9');return true;" ><img src="/templates/yalisi/images/poisk.png" alt="">	</button>
</form>

END;

?>