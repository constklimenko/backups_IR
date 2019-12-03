<?php

$FORMS = Array();


$FORMS['menu_block_level1'] = <<<END

<ul id="nav_new">
	%lines%
<ul>

END;

$FORMS['menu_line_level1'] = <<<END


		<li>
				<a href="%link%">%text%</a>
		</li>



END;

$FORMS['menu_line_level1_a'] = <<<END


			<li>
				<a href="%link%"  class="selected">%text%</a>
		</li>
	

END;

$FORMS['menu_block_level2'] = <<<END
 <ul>
  %lines%
 </ul>
END;

$FORMS['menu_line_level2'] = <<<END
 <li>
 <a href="%link%">%text%</a>
 
 
 </li>
END;

$FORMS['menu_line_level2_a'] = <<<END
 <li class="active">
 <a href="%link%">%text%</a>
 
 </li>

END;


?>