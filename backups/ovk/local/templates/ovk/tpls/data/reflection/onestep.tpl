<?php
 
$FORMS = Array();
 
$FORMS['reflection_block'] = <<<END
%groups%
END;
 
$FORMS['reflection_group'] = <<<END

	%fields%
END;
 
 
$FORMS['reflection_field_string'] = <<<END
	<tr>
		<td>
			%title%%required_asteriks%:
		</td>
 
		<td>
			<input type="text" name="%input_name%" value="%value%" class="textinputs" />
		</td>
	</tr>
END;
 
 
$FORMS['reflection_field_text'] = <<<END
	<tr>
		<td>
			%title%%required_asteriks%:
		</td>
		<td>
			<textarea name="%input_name%" class="textinputs">%value%</textarea>
		</td>
	</tr>
END;
 
$FORMS['reflection_field_int'] = <<<END
	<tr>
		<td>
			%title%%required_asteriks%:
		</td>
 
		<td>
			<input type="text" name="%input_name%" value="%value%" class="textinputs" />
		</td>
	</tr>
END;
 
$FORMS['reflection_field_relation'] = <<<END
	<tr>
		<td>
			%title%%required_asteriks%:
		</td>
 
		<td>
			<select name="%input_name%" style="width: 205px" class="textinputs">
				<option />
				%options%
			</select>
		</td>
	</tr>
 
END;
 
$FORMS['reflection_field_relation_option'] = <<<END
	<option value="%id%">%name%</option>
END;
 
$FORMS['reflection_field_relation_option_a'] = <<<END
	<option value="%id%" selected="selected">%name%</option>
END;
 
?>