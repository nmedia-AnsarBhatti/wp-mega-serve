//	Responsive Accordion v1.0, Copyright 2014, Joe Mottershaw, https://github.com/joemottershaw/
//	============================================================================================

	$(document).ready(function(){
		$(".wpmq-accordion").each(function(){
			$(".wpmq-minus",this).hide(),
			$(".wpmq-acc-panel",this).hide(),
			$('.wpmq-questions-wrapper').on('click', '.wpmq-quiz-slider', function(){
				var i=$(this).parent().parent().parent(),
				s=$(this),
				a=s.find(".wpmq-plus"),
				e=s.find(".wpmq-minus"),
				c=s.closest(".wpmq-acc-head").siblings(".wpmq-acc-panel");

				console.log(c);
				i.find(".wpmq-plus").show(),
				i.find(".wpmq-minus").hide(),
				i.find(".wpmq-quiz-slider").not(this).removeClass("active"),
				i.find(".wpmq-acc-panel").not(this).removeClass("active").slideUp(),
				s.hasClass("active")?(s.removeClass("active"),
					a.show(),
					e.hide(),
					c.removeClass("active").slideUp()
					):(s.addClass("active"),
					a.hide(),
					e.show(),
					c.addClass("active").slideDown()
					)
				})
		})
	});