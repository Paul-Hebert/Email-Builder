<?php
                echo '<div class="text_styles" data_target="' . $include_data . '">
                	<div class="font_styles hidden_x_y">       
	                	<i class="fa fa-bold"></i> 
	                	<i class="fa fa-italic"></i> 
	                </div>

                	<div class="alignment hidden_x_y">
	                	<i class="fa fa-align-left selected"></i> 
	                	<i class="fa fa-align-center"></i> 
	                	<i class="fa fa-align-right"></i> 
	                	<i class="fa fa-align-justify"></i>
	                </div>

                    <i class="fa fa-cog"></i>
                </div>';
                echo '<label for="' . $include_name . '">' . $include_name . '</label>';
                if ($include_type === 'input'){
                 	echo'<input type="text" name="' . $include_name . '" class="text_input" data_target="' . $include_data . '">';
                } else{
                 	echo'<textarea name="' . $include_name . '" class="text_input" data_target="' . $include_data . '">' . $include_name . '</textarea>';                	
                }
?>