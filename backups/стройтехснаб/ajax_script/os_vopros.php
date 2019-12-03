<?

$to  = "narcomacer@gmail.com";
$to2 = "site_analiz@mail.ru";  
$subject = "Стройтехснаб ".$_POST['tema'];
if (($_POST['name']!='') and ($_POST['name']!=' '))
{
$message = '<b>От кого: </b>'.$_POST['name'].'<br>
<b>Телефон: </b>'.$_POST['tel'].'<br>		
';
$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: <narcomacer@gmail.com>\r\n";
$headers .= "Reply-To: narcomacer@gmail.com\r\n";
mail($to, $subject, $message, $headers, '-f narcomacer@gmail.com');
mail($to2, $subject, $message, $headers, '-f narcomacer@gmail.com');
echo '<div class="rezd">Спасибо за заявку! <br>Скоро мы с вами свяжемся.</div>

';
}
?>