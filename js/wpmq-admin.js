"use strict";
jQuery(function($){

	var field_no = 1;

	/* 
    **========== Questions sortable =========== 
    */
	$(".wpmq-questions-wrapper ul").sortable();

	/* 
    **========== Remove Questions =========== 
    */
	$('.wpmq-questions-wrapper').on('click', '.wpmq-question-rm', function(e){
		e.preventDefault();
		 var $this = $(this);
		 var li = $('.wpmq-questions-section').length;
         if (li > 1 ) {
            swal({
                title: "Are you sure?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55 ",
                cancelButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                closeOnConfirm: true
                }, function (isConfirm) {
                    if (!isConfirm) return;
					var question_remove = $this.closest('li').remove();
            });
        }else{
            swal("sorry! you can not remove more question", "", "error");
        }
	});


	/* 
    **========== Show quiz type metaboxes =========== 
    */
	if ( $('.wpmq-quiz-type-js ul').length > 0 ) {

		var quiz_type = $('.wpmq-quiz-type-js ul').find('.wpmq-active-tab').attr('data-quiz-type');
		$('.post-type-wp_quizer div#wpmq_category_'+quiz_type+'').show();	
	}

	/* 
    **========== Show quiz type metaboxes by click =========== 
    */
	$('.wpmq-quiz-type-js ul li').click(function(){
		
		var $this = $(this);
		var quiz_type = $this.attr('data-quiz-type');

		$this.parents('.wpmq-quiz-type-js').find('li').removeClass('wpmq-active-tab');
		$this.addClass('wpmq-active-tab');
		$('div[id^="wpmq_category"]').hide();
		$('.post-type-wp_quizer div#wpmq_category_'+quiz_type+'').show();
	});

	/* 
    **========== Add new questions =========== 
    */
	$(document).on('click','.wpmq-add-question' , function(e){
		 e.preventDefault();

		var question = $('.wpmq-questions-section:last').clone();

		question.find('.wpmq-meta-field').each(function(i, meta_field){
            var field_name = 'wpmq['+field_no+']['+$(meta_field).attr('data-metatype')+']';
            $(meta_field).attr('name', field_name);
        });

        question.find('.wpmq-questions-wrapper ul').end().appendTo('.wpmq-questions-wrapper ul');

		field_no++;
	});


	/* 
    **========== Add new answers of questions =========== 
    */
	var answer_id = 0;
	$('.wpmq-questions-wrapper').on('click','.wpmq-add-answers' , function(e){
		 e.preventDefault();
		var $this_select = $(this).closest('.wpmq-answers-section');
		var answers = $('.wpmq-answers-clone:last').clone();

		answers.find('.wpmq-meta-field').each(function(i, meta_field){
            var field_name = 'wpmq['+field_no+']['+$(meta_field).attr('data-metatype')+']['+answer_id+']';
            $(meta_field).attr('name', field_name);
        });

        answers.find('.wpmq-answers-section').end().appendTo($this_select);

		field_no++;
		answer_id++;

       	$('.wpmq-answers-section').find('.wpmq-answers-clone:not(:last) .wpmq-add-answers')
	   .removeClass('wpmq-add-answers').addClass('wpmq-remove-answer')
	   .removeClass('btn-success').addClass('btn-danger')
	   .html('<i class="fa fa-minus" aria-hidden="true"></i>');
    }).on('click', '.wpmq-remove-answer', function(e){
    	console.log('remove');
        $(this).parents('.wpmq-answers-clone:first').remove();
        e.preventDefault();
        return false;
    });

});