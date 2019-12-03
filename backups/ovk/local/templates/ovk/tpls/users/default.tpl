<?php

$FORMS = Array();

$FORMS['login'] = <<<END

<form action="%pre_lang%/users/login_do/" method="post">
	<label for="login"><b>Логин:</b></label><br />
	<input type="text" id="login" name="login" class="textinputs" value=""/><br />

	<label for="password"><b>Пароль:</b></label><br />
	<input type="password" id="password" name="password" class="textinputs" value=""/><br />

	<p>
		<input type="submit" value="%users_auth_enter%"/>
	</p>
	<input style="display:none;" type="hidden" name="from_page" value="%from_page%" />
</form>

<p>
	Если Вы еще не зарегистрированы на сайте, Вы можете <a href="%pre_lang%/users/registrate/" class="sub">зарегистрироваться</a>.
</p>

<p>
	Если Вы забыли пароль, Вы можете <a href="%pre_lang%/users/forget/" class="sub">воспользоваться сервисом восстановления пароля</a>.
</p>

END;


$FORMS['logged'] = <<<END

	<div class="lk_cont_auto">
		Вы вошли как:  %user_login%
	</div>
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	  <script src="/templates/rsrb/js/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker($.datepicker.regional['ru']);
	
  });
  
     jQuery(function ($) {
        $.datepicker.regional['ru'] = {
            closeText: 'Закрыть',
            prevText: '&#x3c;Пред',
            nextText: 'След&#x3e;',
            currentText: 'Сегодня',
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
            'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthNamesShort: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
            'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
            dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
            dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            weekHeader: 'Нед',
            dateFormat: 'dd.mm.yy',
            firstDay: 1,
			minDate:0,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['ru']);
    });
  
</script>

	<div class="lk_cont">
				<div class="lk_head">
					<div class="lk_head_item" id="lk_head1" >
						ВАШ ПРОФИЛЬ
					</div>
					<div class="lk_head_item" id="lk_head2" >
						ЗАЯВКА НА РАССЫЛКУ
					</div>
					<div class="lk_head_item" id="lk_head3" >
						МОИ РАССЫЛКИ
					</div>
					<div class="lk_head_item" id="lk_head4" >
					МОИ ОТЧЕТЫ
					</div>
					
			
				</div>
				<div class="lk_cont_cont">
					<div class="lk_cont_cont_treug">
						<div class="lk_cont_cont_treug_treug" id="lk_cont_cont_treug_treug1">
						
						</div>
						<div class="lk_cont_cont_treug_treug" id="lk_cont_cont_treug_treug2">

						</div>
						<div class="lk_cont_cont_treug_treug" id="lk_cont_cont_treug_treug3">
						
						</div>
						<div class="lk_cont_cont_treug_treug" id="lk_cont_cont_treug_treug4">
						
						</div>						
					</div>
					<div>
					<div class="lk_cont_cont_item" id="lk_cont_cont_item1" >
						
					</div>
					<div class="lk_cont_cont_item" id="lk_cont_cont_item2" >
							<div class="forma_zayavki_rass">
								<div class="forma_zayavki_rass_head">
									ФОРМА ЗАЯВКИ НА РАССЫЛКУ
								</div>
								<div class="forma_zayavki_rass_cont">
									<form id="commentForm" class="form" method="post" action="" enctype="multipart/form-data">	
	<div id="rez_form">							
									<div class="forma_zayavki_rass_cont_tr">
										<div class="forma_zayavki_rass_cont_tr_left">
											Планируемая дата
										</div>
										<div class="forma_zayavki_rass_cont_tr_right">
											<div class="forma_zayavki_rass_cont_tr_right_vopr">
											?
											</div>
											<input type="text" class="inp_vsp_lk" name="data"   id="datepicker">
										</div>										
									</div>
									
									<div class="forma_zayavki_rass_cont_tr">
										<div class="forma_zayavki_rass_cont_tr_left">
											Тема
										</div>
										<div class="forma_zayavki_rass_cont_tr_right">
											<div class="forma_zayavki_rass_cont_tr_right_vopr">
											?
											</div>
											<input type="text" class="inp_vsp_lk2"  name="tema"  id="lk_inp_tema">
										</div>										
									</div>

									<div class="forma_zayavki_rass_cont_tr">
										<div class="forma_zayavki_rass_cont_tr_left">
											Заголовок
										</div>
										<div class="forma_zayavki_rass_cont_tr_right">
											<div class="forma_zayavki_rass_cont_tr_right_vopr">
											?
											</div>
											<input type="text" class="inp_vsp_lk2" name="zagolovok"  id="lk_inp_zag">
										</div>										
									</div>

									<div class="forma_zayavki_rass_cont_tr" style="margin-bottom:10px;">
										<div class="forma_zayavki_rass_cont_tr_left">
											Пожелания к макету
										</div>
										<div class="forma_zayavki_rass_cont_tr_right">
											<div class="forma_zayavki_rass_cont_tr_right_vopr">
											?
											</div>
											<input type="text" class="inp_vsp_lk2" name="pozhel"   id="lk_inp_pozh">
										</div>										
									</div>

									<div class="forma_zayavki_rass_cont_tr">
										<div class="forma_zayavki_rass_cont_tr_left">
											<input name="fileFF[]" multiple="" id="file" type="file" value="" onchange="previewFile()">
										</div>
										<div class="forma_zayavki_rass_cont_tr_right2">
											<div class="forma_zayavki_zagr" id="zagr_file">
												Загрузить файлы
											</div>	
											<div class="forma_zayavki_zagr2" id="forma_zayavki_zagr_cont">
											
											</div>		
											<div class="forma_zayavki_zagr3" id="forma_zayavki_zagr_name">
											
											</div>	
											<div class="forma_zayavki_zagr3" id="forma_zayavki_zagr_error">
											
											</div>											
										</div>
									</div>
<script type="text/javascript">
document.getElementById('zagr_file').onclick = function(){
    document.getElementById('file').click();
}

function previewFile() {

name='';
   files = $('#file')[0].files;
   
$('#forma_zayavki_zagr_cont').html('Выбрано файлов: ' + files.length);

	for(var a=0;a<files.length;a++)
		{
	
		if (files[a].size < 1024 * 1024)
			{
				name = name + '<p>- ' + files[a].name + '</p>';
			}
	
	
		}
$('#forma_zayavki_zagr_name').html(name);

}
</script>

									<div class="forma_zayavki_rass_cont_tr">
										<div class="forma_zayavki_rass_cont_tr_left">
											Ссылка для перехода <br/>
											с макета
										</div>
										<div class="forma_zayavki_rass_cont_tr_right">
											<div class="forma_zayavki_rass_cont_tr_right_vopr">
											?
											</div>
											<input type="text" class="inp_vsp_lk2" name="ss"   id="lk_inp_ss">
										</div>										
									</div>	

									<div class="forma_zayavki_rass_cont_tr">
										<div class="forma_zayavki_rass_cont_tr_left">
											Выберите базу
										</div>
										<div class="forma_zayavki_rass_cont_tr_right">
											<div class="forma_zayavki_rass_cont_tr_right_vopr">
											?
											</div>
											<select id="vybor_base" name="baza">
			
												<option value="Уфа, юридические лица">Уфа, юридические лица</option>	
												<option value="Уфа, юридические лица">Уфа, юридические лица</option>	
			
											</select>
										</div>										
									</div>										
									
									<div class="forma_zayavki_rass_cont_tr">
										<div class="forma_zayavki_rass_cont_tr_left">
											Отчет
										</div>
										<div class="forma_zayavki_rass_cont_tr_right">
<div class="input_lk_ob">			
	<input type="checkbox" name="on_mail" id="checkBox_1">
	<label for="checkBox_1">На e-mail</label>
</div>

<div class="input_lk_ob">			
	<input type="checkbox" name="on_lk" id="checkBox_2">
	<label for="checkBox_2">В л/к</label>
</div>

<div class="input_lk_ob">			
	<input type="checkbox" name="on_no" id="checkBox_3">
	<label for="checkBox_3">Не нужно</label>
</div>
										</div>										
									</div>			

									
									<input type="hidden" class="inp_vsp_lk2" name="login"  value="%user_login%" id="lk_inp_ss">
									<input type="hidden" class="inp_vsp_lk2" name="email"  value="%users viewAuthor(%user_id%,'mail')%" id="lk_inp_ss">									
									<div id="button_lk" class="submit_lk" type="submit" >Отправить</div>
</div>									
									</form>
								</div>
							</div>						
					</div>
					<div class="lk_cont_cont_item" id="lk_cont_cont_item3" >
						
					</div>
					<div class="lk_cont_cont_item" id="lk_cont_cont_item4">
							
					</div>
					</div>
				</div>
		
<script type="text/javascript">


			$("#lk_head1").click(function()
			{
			 	$(".lk_cont_cont_item").css({"display":"none"})
			 	$("#lk_cont_cont_item1").css({"display":"block"})
	
			 	$(".lk_cont_cont_treug_treug").css({"display":"none"})
			 	$("#lk_cont_cont_treug_treug1").css({"display":"block"})
	
			 	$(".lk_head_item").css({"color":"#bac981","borderBottom":"dashed 1px #bac981"})			 
			 	$("#lk_head1").css({"color":"#768c24","borderBottom":"0"})					 
			});
			
			$("#lk_head2").click(function()
			{
			 	$(".lk_cont_cont_item").css({"display":"none"})
			 	$("#lk_cont_cont_item2").css({"display":"block"})
	
			 	$(".lk_cont_cont_treug_treug").css({"display":"none"})
			 	$("#lk_cont_cont_treug_treug2").css({"display":"block"})
	
			 	$(".lk_head_item").css({"color":"#bac981","borderBottom":"dashed 1px #bac981"})			 
			 	$("#lk_head2").css({"color":"#768c24","borderBottom":"0"})					 
			});

			$("#lk_head3").click(function()
			{
			 	$(".lk_cont_cont_item").css({"display":"none"})
			 	$("#lk_cont_cont_item3").css({"display":"block"})
	
			 	$(".lk_cont_cont_treug_treug").css({"display":"none"})
			 	$("#lk_cont_cont_treug_treug3").css({"display":"block"})
				
			 	$(".lk_head_item").css({"color":"#bac981","borderBottom":"dashed 1px #bac981"})			 
			 	$("#lk_head3").css({"color":"#768c24","borderBottom":"0"})					 
			});

			$("#lk_head4").click(function()
			{
			 	$(".lk_cont_cont_item").css({"display":"none"})
			 	$("#lk_cont_cont_item4").css({"display":"block"})
			 
			 	$(".lk_cont_cont_treug_treug").css({"display":"none"})
			 	$("#lk_cont_cont_treug_treug4").css({"display":"block"})			 
			 
			 	$(".lk_head_item").css({"color":"#bac981","borderBottom":"dashed 1px #bac981"})			 
			 	$("#lk_head4").css({"color":"#768c24","borderBottom":"0"})					 
			});

			
			
</script>		
<script type="text/javascript">

	
				
	$("#button_lk").on("click", function(){
err=0;	
t1=$("#datepicker").val();
t2=$("#lk_inp_tema").val();					
t3=$("#lk_inp_zag").val();
t4=$("#lk_inp_pozh").val();
t5=$("#lk_inp_ss").val();			
	
if (t1=='') 
{
	$("#datepicker").css({"border":"solid 1px #ff0000"})
	err=1;
	
}

if (t2=='') 
{
	$("#lk_inp_tema").css({"border":"solid 1px #ff0000"})
	err=1;
	
}					
	
if (t3=='') 
{
	$("#lk_inp_zag").css({"border":"solid 1px #ff0000"})
	err=1;
	
}					
	
if (t4=='') 
{
	$("#lk_inp_pozh").css({"border":"solid 1px #ff0000"})
	err=1;
	
}		
	
if (t5=='') 
{
	$("#lk_inp_ss").css({"border":"solid 1px #ff0000"})
	err=1;
	
}	
	
	
if (err=='0') 
{



 files = $('#file')[0].files;

if (files.length<10) 
{
flag_size=0;

	for(var a=0;a<files.length;a++)
		{
	
		if (files[a].size > 1024 * 1024)
			{
				flag_size=1;
			}
	
	
		}

	if (flag_size==0)
		{
		
			$(".submit").replaceWith("<div class='otvet_zayvka'><p class='sending'>Отправка...</p></div>");
				
var form = document.forms.commentForm;

			var formData = new FormData(form);  

			var xhr = new XMLHttpRequest();
			xhr.open("POST", "/ob_ufada_lk_zyavka.php");

			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4) {
					if(xhr.status == 200) {
						data = xhr.responseText;
						if(data == "true") {
							$("#rez_form").replaceWith("Ваша заявка принята");
						} else {
							$("#rez_form").replaceWith("<p >Ошибка! Обновите страницу...<p>");
						}
					}
				}
			};
			
			xhr.send(formData);		
		}
	else
		{
		$("#forma_zayavki_zagr_error").css({"border-bottom":"solid 1px #ff0000"})
		$("#forma_zayavki_zagr_error").html("один из файлов весит больше 1 мб");
		}	
		
		
		
}



	}		
		
		


				
				
				
	
			});


</script>

		
			</div>		



END;
?>