<?php

$FORMS = Array();


$FORMS['menu_block_level1'] = <<<END

	%lines%


END;

$FORMS['menu_line_level1'] = <<<END
<a href="%link%">
		<div class="menu_vert">
		
				%text%
				
		</div>
</a>

END;

$FORMS['menu_line_level1_a'] = <<<END


<a href="%link%">
		<div class="menu_vert_a">
		
				%text%
			
		</div>
</a>


				 %sub_menu%


END;

$FORMS['menu_block_level2'] = <<<END
<div class="menu_vert_ob">
  %lines%
</div>
END;

$FORMS['menu_line_level2'] = <<<END
<a href="%link%">
	<div class="menu_vert2">
		- %text%
	</div>
</a>
 
 

END;

$FORMS['menu_line_level2_a'] = <<<END
<a href="%link%">
	<div class="menu_vert2_a">
		- %text%
	</div>
</a>
 %sub_menu%
END;



$FORMS['menu_block_level3'] = <<<END
<div class="menu_vert_ob2">
  %lines%
</div>
END;

$FORMS['menu_line_level3'] = <<<END
<a href="%link%">
	<div class="menu_vert3">
		%text%
	</div>
</a>
 
 

END;

$FORMS['menu_line_level3_a'] = <<<END
<a href="%link%">
	<div class="menu_vert3_a">
		%text%
	</div>
</a>
 %sub_menu%
END;


$FORMS['menu_block_level4'] = <<<END
<div class="menu_vert_ob3">
  %lines%
</div>
END;

$FORMS['menu_line_level4'] = <<<END
<a href="%link%">
	<div class="menu_vert4">
		- %text%
	</div>
</a>
 
 

END;

$FORMS['menu_line_level4_a'] = <<<END
<a href="%link%">
	<div class="menu_vert4_a">
		- %text%
	</div>
</a>

END;



?>