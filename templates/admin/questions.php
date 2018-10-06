<?php 
/*
** Questions Template
*/

/* 
**========== Direct access not allowed =========== 
*/
if( ! defined('ABSPATH' ) ){ exit; }

?>

<div class="wpmq-questions-wrapper">
	<ul id="wpmq-accordion-1" class="wpmq-accordion">
		<li class="wpmq-questions-section">
			<div class="wpmq-acc-head">Heading 1
			<span class="wpmq-question-rm" title="Remove">
				<i class="fa fa-times" aria-hidden="true" style="right: 40px;top: 7px;"></i> 
			</span>
			<span title="Slider" class="wpmq-quiz-slider">
				<i class="fa fa-chevron-down wpmq-plus"></i>
				<i class="fa fa-chevron-up wpmq-minus"></i>
			</span>
			</div>
			<div class="wpmq-acc-panel">
				<div class="card">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Enter Question</label>
									<input type="text" name="" class="form-control wpmq-meta-field" data-metatype="question">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Upload Image</label>
									<input type="file" name="" class="form-control wpmq-meta-field" data-metatype="image">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Enter Question Mark</label>
									<input type="text" name="" class="form-control wpmq-meta-field" data-metatype="mark">
								</div>
							</div>
						</div>
						<div class="wpmq-answers-section">
							<div class="row wpmq-answers-clone">
								
								<div class="col-md-2 wpmq-correct-answr" style="margin-top: 23px">
									<div class="form-group">
										<label>
											<input type="checkbox" name="" class="wpmq-meta-field" data-metatype="correct" >
											<span><?php _e('Correct', 'ppom-texter'); ?></span>
										</label>
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group">
										<label>Answer</label>
										<input type="text" name="" class="form-control wpmq-meta-field" data-metatype="answer">
									</div>
								</div>
								<div class="col-md-2" style="margin-top: 23px">
									<div class="form-group">
										<button class="btn btn-success wpmq-add-answers"><i class="fa fa-plus" aria-hidden="true"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</li>
	</ul>
</div>

<div class="wpmq-add-question-section" style="margin-top: 3px;">
	<button class="btn btn-primary  wpmq-add-question">Add Questions</button>
</div>