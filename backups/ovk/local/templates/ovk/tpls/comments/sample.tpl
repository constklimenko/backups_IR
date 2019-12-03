<?php

$FORMS['comments_block'] = <<<COMMENT_BLOCK

 <div style="clear: both;"></div>
 <a name="comments"></a>
 <div class="spacer"></div>

 %lines%
 
 %system numpages(%total%, %per_page%, 'default')%

 <br />

 %add_form%

COMMENT_BLOCK;


$FORMS['comments_block_line'] = <<<COMMENT_LINE

 <div class="block-otziv">
 <div class="ocenka-add-tovara">Оценка:</div>
 <div style="clear: both;"></div>
 <div class="ocenka-add-tovara" style="font-weight:normal;"><strong style="font-weight: 600;">Отзыв:</strong> %message%</div>
 </div>
 
COMMENT_LINE;


$FORMS['comments_block_add_user'] = <<<ADD_FORM_USER

 <form method="post" action="%action%" class="block-add-comment">
	<div class="ocenka-add-tovara">Оставьте отзыв</div>
	<div class="clear"></div>
	<div class="ocenka-add-tovara">Оценка:</div>
	
	<div id="reviewStars-input">
							%custom like(%id%)%
						<input type="radio" name="like"  id="like-5" name="reviewStars"/>
						<label title="Отлично" class="like-5" for="like-5"></label>
					</div>
	<div class="clear"></div>
	<textarea class="textarea-otziv" name="comment" placeholder="Отзыв" rows="7" class="textinputs"></textarea>
	  <button type="submit" id="btn-comment" class="btn-comment">Добавить отзыв</button>
 </form>
<div id="like_counter">
						%lajk%
					</div>
ADD_FORM_USER;


$FORMS['comments_block_add_guest'] = <<<ADD_FORM_GUEST

				<form method="post" action="%action%" class="block-add-comment">
					<div class="ocenka-add-tovara">Оставьте отзыв</div>
					<div class="clear"></div>
					<div class="ocenka-add-tovara">Оценка:</div>
					<div id="reviewStars-input">
						<input id="star-4" type="radio" name="reviewStars"/>
						<label title="Отлично" for="star-4"></label>

						<input id="star-3" type="radio" name="reviewStars"/>
						<label title="Хорошо" for="star-3"></label>

						<input id="star-2" type="radio" name="reviewStars"/>
						<label title="Нормально" for="star-2"></label>

						<input id="star-1" type="radio" name="reviewStars"/>
						<label title="Удовлетворительно" for="star-1"></label>

						<input id="star-0" type="radio" name="reviewStars"/>
						<label title="Плохо" for="star-0"></label>
					</div>
					<div class="clear"></div>
					<textarea name="comment" placeholder="Отзыв" rows="7" class="textinputs"></textarea>
					  %system captcha('default')%
					  <button type="submit" class="btn-comment">Добавить отзыв</button>
				 </form>

ADD_FORM_GUEST;

?>