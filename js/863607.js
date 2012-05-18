$(document).ready(function() {
	
	$('#home').click(
			function(){
				$.ajax({ url: 'get_text.php',
			         data: {"action":"home"},
			         type: 'post',
			         success: function(output) {
			        	 $("#menu_data").text(output);
			         }
			    });
			});
	
	$('#projects').click(
			function(){
				$.ajax({ url: 'get_text.php',
			         data: {"action":"projects"},
			         type: 'post',
			         success: function(output) {
			        	 $("#menu_data").text(output);
			         }
			    });
			});
	
	$('#resume').click(
			function(){
				$.ajax({ url: 'get_text.php',
			         data: {"action":"resume"},
			         type: 'post',
			         success: function(output) {
			        	 $("#menu_data").html(output);
			         }
			    });
			});
	
	$('#findme').click(
			function(){
				$.ajax({ url: 'get_text.php',
			         data: {"action":"findme"},
			         type: 'post',
			         success: function(output) {
			        	 $("#menu_data").text(output);
			         }
			    });
			});
	
});