console.log("welcome");

$(document).ready(function(){
	$('#roomtype').change(function(){
		var currentrt = $('#roomtype').val();

		console.log('working');

		$.ajax({
			type: 'POST',
			url: 'example1.php',
			data: (currentrt:currentrt),
			success: function(result)
			{
				$('#roomname').html(result);
			}
		});
	});
});