<?php

$FORMS = Array();

$FORMS['captcha'] = <<<CAPTCHA
<p class="captcha">
	Введите текст на картинке<br />
	<img src="/captcha.php" /><br />
	<input type="text" name="captcha" />
</p>

CAPTCHA;
?>