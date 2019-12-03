<?php

$FORMS = Array();


$FORMS['menu_block_level1'] = <<<END

	%lines%


END;

$FORMS['menu_line_level1'] = <<<END

<div class="item_magaz_cat">
	<a href="%link%">
	<div class="item_magaz_cat_foto" style="background: url(%data getProperty(%id%, 'header_pic', 'katalog_gl.view')%);">
					
	</div>
	<div class="item_magaz_cat_name">
		%name%
	</div>
	
	
	</a>
</div>


END;

$FORMS['menu_line_level1_a'] = <<<END

<div class="item_magaz_cat">
	<a href="%link%">
	<div class="item_magaz_cat_foto" style="background: url(%data getProperty(%id%, 'header_pic', 'katalog_gl.view')%);">
					
	</div>
	<div class="item_magaz_cat_name">
		%name%
	</div>
	
	
	</a>
</div>

END;



?>