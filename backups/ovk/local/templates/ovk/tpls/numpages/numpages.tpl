<?php
	$FORMS = Array();




$FORMS['pages_block'] = <<<END

<div id="numpages">
%toprev% %pages% %tonext% 
</div>
END;

$FORMS['pages_item'] = <<<END
 <a href="%link%">%num%</a>%quant%
END;

$FORMS['pages_item_a'] = <<<END
<span>%num%</span> %quant%
END;

$FORMS['pages_quant'] = <<<END

END;

$FORMS['pages_block_empty'] = <<<END
END;

$FORMS['order_by'] = <<<END
 <a href="%link%">%title%</a>
END;

$FORMS['order_by_a'] = <<<END
 <span style="color: #000;"><b>%title%</b></span>
END;

$FORMS['pages_tobegin'] = <<<END
 <a href="%tobegin_link%" id="tobegin" style="color:#55a3c3">в начало</a>
END;

$FORMS['pages_tobegin_a'] = <<<END
END;

$FORMS['pages_toprev'] = <<<END
 <a href="%toprev_link%" id="toprev" style="color:#0066a1"><< предыдущая</a>
END;

$FORMS['pages_toprev_a'] = <<<END
END;

$FORMS['pages_toend'] = <<<END
 <a href="%toend_link%" id="toend" style="color:#55a3c3">в конец</a>
END;

$FORMS['pages_toend_a'] = <<<END
END;

$FORMS['pages_tonext'] = <<<END
 <a href="%tonext_link%" id="tonext" style="color:#0066a1">следующая >></a>
END;

$FORMS['pages_tonext_a'] = <<<END
END;
