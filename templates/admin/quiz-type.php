<?php 
/*
** Quiz Types Templates
*/

/* 
**========== Direct access not allowed =========== 
*/
if( ! defined('ABSPATH' ) ){ exit; }

?>
<div class="wpqm-quiz-type-wrapper wpmq-quiz-type-js">
	<ul class="list-group"> 
	    <li class="list-group-item wpmq-active-tab" data-quiz-type='simple'><?php _e('Simple Quiz', 'wpmq'); ?></li>
	    <li class="list-group-item" data-quiz-type='paragraph'><?php _e('Paragraph Quiz', 'wpmq'); ?></li> 
	    <li class="list-group-item" data-quiz-type='audio_video'><?php _e('Audio & Video Quiz', 'wpmq'); ?></li> 
	</ul>
</div>