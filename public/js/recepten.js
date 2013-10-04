var Recepten = {
	token: null,
	tokenName:null,
	base_url: '/',
	init: function(){

	}
}
$(document).ready(function(){
	$("#login_form").submit(function(event){
		if(event.preventDefault){event.preventDefault() }else{event.returnValue = false; };
		var fields = $(this).serialize()+'&recept_token='+Recepten.token;
		$.ajax({
			url 	: Recepten.base_url+"ajax/authentication/login",
			type	: 'POST',
			data 	: fields,
			success: function(response){
				jQuery.parseJSON(response);
				if(response.status == 'success'){
					hideModal();
					window.location.reload();
				} else if(response.status == 'error'){
					setError($("#login_form"), response);
				} else {
					setError($("#login_form"), response, true);
				}
			},
			error 	: function(error, msg){
				console.info(error.responseText);
			}
		});
	})

	$("#register_form").submit(function(event){
		if(event.preventDefault){event.preventDefault() }else{event.returnValue = false; };
		var fields = $(this).serialize()+'&recept_token='+Recepten.token;
		$.ajax({
			url 	: Recepten.base_url+"ajax/authentication/register",
			type	: 'POST',
			data 	: fields,
			success: function(response){
				jQuery.parseJSON(response);
				if(response.status == 'success'){
					hideModal();
				} else if(response.status == 'error'){
					setError($("#register_form"), {1:'Error'});
				} else {
					
					setError($("#register_form"), response, true);
				}
			},
			error 	: function(error, msg){
				console.info(error.responseText);
			}
		});
	})
	$(".logout").click(function(event){
		if(event.preventDefault){event.preventDefault() }else{event.returnValue = false; };
		$.ajax({
			url 	: Recepten.base_url+"ajax/authentication/logout",
			type	: 'POST',
			data 	: {recept_token:Recepten.token},
			success: function(response){
				jQuery.parseJSON(response);
				if(response.status == 'success'){
					window.location.reload();
				} 
			},
			error 	: function(error, msg){
				console.info(error.responseText);
			}
		});
	})
})


