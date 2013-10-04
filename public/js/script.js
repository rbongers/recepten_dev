//==============================================
	//Front Slider Init Callback
//==============================================

function mycarousel_initCallback(carousel)
  {
	  // Disable autoscrolling if the user clicks the prev or next button.
	  carousel.buttonNext.bind('click', function() {
		  carousel.startAuto(0);
	  });
  
	  carousel.buttonPrev.bind('click', function() {
		  carousel.startAuto(0);
	  });
  
	  // Pause autoscrolling if the user moves with the cursor over the clip.
	  $('#mycarousel .description').mouseenter(function() {
		  carousel.stopAuto();
	  });
	  $('#mycarousel .description').mouseleave(function() {
		  carousel.startAuto();
	  });
  };

//==============================================
	// DOCUMENT READY
//==============================================
$(document).ready(function() {
	
//==============================================
	//Main Menu
//==============================================
	$('header .top-nav  ul  li').mouseenter(function(){
		if($(this).find('ul').length) { 
		   $(this).find('ul').first().stop(true, true).fadeIn();
		   $(this).siblings().find('ul').css('display','none');
		}
	});
	$('header .top-nav  ul  li').mouseleave(function(){
		if($(this).find('ul').length) {
		   $(this).find('ul').first().stop(true, true).delay(500).fadeOut('fast');
		}
	});
//==============================================
	//Lava Menu
//==============================================
		  var style = 'easeOutElastic';
		  // Main Menu hover and current functionality
		  if($('.main-menu li.current').length){
		currentCheck = 1; //check if there is current 1== yes 0 == no
			  default_left = Math.round($('.main-menu li.current').offset().left - $('.main-menu').offset().left - 5);
			  default_top = Math.round($('.main-menu li.current').offset().top - $('.main-menu').offset().top);
			  default_width = $('.main-menu li.current').width();
			  default_height = $('.main-menu li.current').height();
		  } else {
		currentCheck = 0; //check if there is current
			  default_left = 0;
			  default_top = 0;
			  default_width = 0;
			  default_height = 47;
		$('.main-menu li#lava-elm').css('opacity','0');
		  }
		  
		  $('.main-menu li#lava-elm').stop(false, true).animate({top: default_top, left: default_left, width: default_width, height: default_height},{duration:10});
		  
		  $('.main-menu > ul > li').mouseenter(function (){
			if (!$(this).is('#lava-elm')) {
			  elemTop = Math.round($(this).offset().top - $('.main-menu').offset().top);
			  elemLeft = Math.round($(this).offset().left - $('.main-menu').offset().left - 5);
			  width = $(this).width();
			  height = $(this).height();
			  
			  $('#lava-elm').stop(false, false).animate({top: elemTop, left: elemLeft, width:width, height:height},{duration:700,easing: style});
		if (currentCheck == 0) {
			$('.main-menu li#lava-elm').css('opacity','100');
		}
		//SUB MENU
		if($(this).find('ul').length) { 
		   $('ul',this).stop(true, true).slideDown(500);
		}
		$(this).siblings().find('ul').css('display','none');
	  }
		  });
		  
		   $('.main-menu').mouseleave(function () {
			  //Set the floating bar position, width and transition
			  if (currentCheck == 0) {
			$('.main-menu li#lava-elm').css('opacity','0');
		}
		
		$('.main-menu ul li ul').stop(true, true).delay(500).css('display','none');
		$('.main-menu li#lava-elm').stop(false, true).animate({top: default_top, left: default_left, width: default_width,height: default_height},{duration:100});       
		  });
	   
//==============================================
	//Input Default text Toggle
//==============================================

  var textSearch = 'search...';
	var textEnterYour = 'enter your e-mail address...';
	
	$('.top-nav input.search').val(textSearch).bind('focus', function() {
		
		if(this.value == textSearch)
			this.value = '';
	}).bind('blur', function() {
		if(this.value == '')
			this.value = textSearch;
	});

	$('footer .newsletter input[type=text]').val(textEnterYour).bind('focus', function() {
		
		if(this.value == textEnterYour)
			this.value = '';
	}).bind('blur', function() {
		if(this.value == '')
			this.value = textEnterYour;
	});

//==============================================
	//Meals Carousel Starter
//==============================================


	$('#meals-of-the-day ul').jcarousel({
		wrap : 'both'
		,itemFallbackDimension : 400
	});

	$('.featured-meals ul').jcarousel({
		wrap : 'both'
		,scroll : 1
		,itemFallbackDimension : 215
	});
		
//==============================================
	//Pop Up
//==============================================
	$("#login-btn").click(function () {
		$("#popup-overlay").css('display','block');
		$("#popup-login").fadeIn();
	});
	$(".register-btn").click(function () {
		$('.popup').css('display','none');
		$("#popup-overlay").css('display','block');
		$("#popup-register").fadeIn();
	});
	$("#popup-overlay, .popup a.close").click(function () {
		$('.popup, #popup-overlay').css('display','none');
	});
  
});

//==============================================
	//Meals Carousel Starter
//==============================================
$('#payment-methods ul li').click(function () {
	$('#payment-methods ul li .form-controls.checked').removeClass('checked');
	$('#payment-methods ul li input').attr('checked',false);
	$('.form-controls',this).addClass('checked');
	$('input', this).attr('checked',true);    
});

function setError(elem, errors, field)
{
	$(".message.error").remove();
	var div = $("<div/>", {
		class: 'message error',
	});

	console.log(errors);
	// TODO: if element is not object
	if(typeof errors.data == 'object')
	{
		console.log(errors);
		$.each(errors.data, function(index, value){
			if(field === true){
				elem.find('input[name='+index+']').addClass('error');
			}
			div.append('- '+value+'<br>');
		})
	} else {
		div.append('- '+errors.data+'<br>');
	}
	
	console.log('prepend');
	console.log(div);
	elem.prepend(div);
}

function hideModal(){
	$("#popup-overlay").css('display','none');
	$(".popup").fadeOut();
}

jQuery.fn.serializeObject = function() {
	var o = {};
	var a = this.serializeArray();
	a.push()
	$.each(a, function() {

		// check if object
		if (this.name.indexOf('.') !== -1) {
			var path = this.name.split('.');

			var current = o;
			for (var i = 0; i < path.length; i++) {
				if (i === (path.length - 1)) {
					current[path[i]] = this.value;
				} else {
					if (current[path[i]] === undefined) {
						current[path[i]] = {};
					}
				}
				current = current[path[i]];
			}

		// check if array
		} else if (this.name.indexOf('[') !== -1 && this.name.indexOf(']')) {
			console.log(this.name + ' is an array');

			// has to get implmented

		// normal value
		} else {
			o[this.name] = this.value;
		}

	});
	return o;
};

function nextfieldset(element)
{
	if(animating) return false;
	animating = true;
	
	current_fs = element.parent();
	next_fs = element.parent().next();
	
	index = current_fs.index() + 1;
	$("#progressbar li:nth-child("+index+")").addClass('active');

	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
}

function previousfieldset(element)
{
	if(animating) return false;
	animating = true;
	
	current_fs = element.parent();
	previous_fs = element.parent().prev();
	
	index = current_fs.index();
	//de-activate current step on progressbar
	$("#progressbar li:nth-child("+index+")").removeClass("active");
	index = current_fs.index() - 1;
	$("#progressbar li:nth-child("+index+")").addClass('active');
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
}
