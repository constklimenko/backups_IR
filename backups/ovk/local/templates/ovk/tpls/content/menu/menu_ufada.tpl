<?php

$FORMS = Array();


$FORMS['menu_block_level1'] = <<<END

	%lines%


END;

$FORMS['menu_line_level1'] = <<<END


		<div class="menu_ufada">
				<a href="%link%">%text%</a>
		</div>
	


END;

$FORMS['menu_line_level1_a'] = <<<END

		<div class="menu_ufada makt">
				<a href="%link%">%text%</a>
		</div>

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