$(document).ready(function () {

			$('#submit_post').on('click',function(e){

		    e.preventDefault(e);
		    console.log($('#post_form').serializeArray());

		        $.ajax({

		        type:"POST",
		        method: "POST",
		        url:'/posts',
		        data:$('#post_form').serializeArray(),
		        dataType: 'json',
		        success: function(data){
		        		alert(data['message']);
			            location.reload();
			        },
		        error: function(data)
	            {
	                var errors = '';
	                for(datos in data.responseJSON){
	                    errors += data.responseJSON[datos] + '<br>';
	                }
	                $('#response').show().html(errors); //this is my div with messages
	            }
		    	});

		    });
		});