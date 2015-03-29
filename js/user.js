$(function() {
	$("[href='#analyze']").click(function() {
		$("#profile").removeClass("active in");
	});

	$("[href='#profile']").click(function() {
		$("#analyze").removeClass("active in");
	});


	$(".dropdown li a").click(function( event ) {
		var $target = $(event.currentTarget);
		$target.closest('.dropdown').find("[data-bind='label']").text($target.text()).end().children( '.dropdown-toggle' ).dropdown( 'toggle' );
		return false;
	});



	$("#play").submit(function(event) {
		
		event.preventDefault();
		$('#loading').html('<img src="http://preloaders.net/preloaders/287/Filling%20broken%20ring.gif"> loading...');
		$.ajax({
			url: "../db/classdboperations.php",
			data: {
				"action": "play"
			},
			type: "POST",
			success: function( data ) {
				$( "#weather-temp" ).html( "<strong>" + data + "</strong> degrees" );
			},
			error: function(xhr, ajaxOptions, thrownError) {
				console.log(xhr.status);
				console.log(thrownError);
			}
		});
	});

	$("#reset").submit(function(event) {
		event.preventDefault();
		$('#loading').html('<img src="http://preloaders.net/preloaders/287/Filling%20broken%20ring.gif"> loading...');
		$.ajax({
			url: "../db/classdboperations.php",
			type:POST,
			data: {
				"action": "reset"
			},
			success: function( data ) {
				$( "#weather-temp" ).html( "<strong>" + data + "</strong> degrees" );
			},
			error: function(xhr, ajaxOptions, thrownError) {
				console.log(xhr.status);
				console.log(thrownError);
			}
		});
	});

});