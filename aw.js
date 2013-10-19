$(document).ready(function(){

	setTimeout(
		function() {
			$('#dealer-dialog').dialog({
				resizable: false,
		  		height:300,
		 		modal: true,
					buttons: {
						Submit: function() {
			        	alert("it would submit now");
			        },
			        Cancel: function() {
			          $( this ).dialog( "close" );
			        }
			    }
			});
		}, 1000);
});