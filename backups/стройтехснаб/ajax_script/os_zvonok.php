<?

$to  = "narcomacer@gmail.com";

$to2 = "site_analiz@mail.ru"; 
$subject = "Стройтехснаб".$_POST['tema'];
if (($_POST['name']!='') and ($_POST['name']!=' '))
{	
	$message = '<b>От кого: </b>'.$_POST['name'].'<br>
	<b>Телефон: </b>'.$_POST['tel'].'
			
	';
$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From:ovksistema.ru <ilrita@ovksistema.ru>\r\n";
$headers .= "Reply-To: narcomacer@gmail.com\r\n";
mail($to, $subject, $message, $headers, '-f narcomacer@gmail.com');
mail($to2, $subject, $message, $headers, '-f narcomacer@gmail.com');
echo '<div class="form_ajax_consult rezd">Спасибо за заявку! <br>Скоро мы с вами свяжемся.</div>
';
}

// <br>		
// 	<b>Текст сообщения: </b>'.$_POST['komm'].'<br>		
// 	<b>Страница с которой написали: </b>'.$_POST['str'].'<br>
?>


