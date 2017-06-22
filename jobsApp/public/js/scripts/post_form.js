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
			            console.log(data);
			        },
		        error: function(jqXHR, status, err){
		        		console.log(status),
       					console.log(err)
       					console.log(jqXHR.responseText);
			        }
		    	});

		    });
		});