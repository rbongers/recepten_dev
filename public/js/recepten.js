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
		var fields = $(this).serializeObject()
		$.ajax({
			url 	: Recepten.base_url+"ajax/authentication/register",
			type	: 'POST',
			data 	: {recept_token:Recepten.token, name: 'test', email: 'asddas'},
			success: function(response){
				console.log(response);
			},
			error 	: function(error, msg){
				console.error(error);
			}
		});
	})
})

jQuery.fn.serializeObject = function() {
    var o = {};
    var a = this.serializeArray();

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