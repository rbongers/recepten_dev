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
		var fields = $(this).serialize().'&recept_token='+Recepten.token;
		$.post( Recepten.base_url+"ajax/auth/register", fields, function(data){

		});
	})
})