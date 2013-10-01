var Recepten = {
	token: null,
	tokenName:null,
	base_url: '/',
	init: function(){

	}
}
$(document).ready(function(){
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
					setError($(this), {1:'Error'});
				} else {
					
					setError($("#register_form"), response, true);
				}
			},
			error 	: function(error, msg){
				console.info(error.responseText);
			}
		});
	})
})


