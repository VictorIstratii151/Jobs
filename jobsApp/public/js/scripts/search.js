// $(document).ready(function () {
// 	$("#search_button").click(function(e) {
// 		e.preventDefault(e);

// 		var searchedVal = $("#input_area").val();

// 		var criterias = [];
		
// 		// var searchLang = $("#programming_language").val();
// 		// var searchName = $("#company_name").val();
// 		// var searchKeyword = $("#keyword").val();

// 		if ($('#company_name').is(":checked"))
// 		{
// 		  criterias['company_name'] = searchedVal;
// 		}
// 		if ($("#programming_language").is(":checked"))
// 		{
// 			criterias['programming_language'] = searchedVal;
// 		}

// 		$.ajax({

// 			type: "GET",
// 			method: "GET",
// 			url: "/",
// 			data: criterias,
// 			success: function(){
// 		        		alert("well done");
// 			        },
// 	        error: function()
//             {
//                 alert("SMTH WRONG");
//             }
// 		});

// 		// if ($("#keyword").is(":checked"))
// 		// {
// 		// 	criterias.push('keyword');
// 		// }
// 	});
// });



$(document).ready(function() {
	$("#search_button").click(function(e) {
		e.preventDefault(e);

		var searchedVal = $("#input_area").val();


		var criterias = {};
		
		// var searchLang = $("#programming_language").val();
		// var searchName = $("#company_name").val();
		// var searchKeyword = $("#keyword").val();

		if ($('#company_name').is(":checked"))
		{
		  criterias["company_name"] = searchedVal;
		}
		if ($("#programming_language").is(":checked"))
		{
			criterias["programming_language"] = searchedVal;
		}

		$.get("/search", criterias).done(
			function(data) {
				$("#index_div").replaceWith(data);
				console.log(data);
			});
		// $.get( "/", function( data ) {
		//   console.log(criterias);
		//   $("body").replaceWith(data);
		// });


	});
});