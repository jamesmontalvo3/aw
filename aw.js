$(document).ready(function(){

	$("#add-dealer").button().click(function() {

		$('#dealer-dialog').dialog({
			resizable: false,
	  		height:500,
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

	});

	$("#dealer_start_date").datepicker({
		defaultDate: "+1w",
		changeMonth: true,
		numberOfMonths: 1,
		onClose: function( selectedDate ) {
			$( "#dealer_end_date" ).datepicker( "option", "minDate", selectedDate );
		}
	});

	$( "#dealer_end_date" ).datepicker({
		defaultDate: "+1w",
		changeMonth: true,
		numberOfMonths: 1,
		onClose: function( selectedDate ) {
			$( "#from" ).datepicker( "option", "maxDate", selectedDate );
		}
	});

});