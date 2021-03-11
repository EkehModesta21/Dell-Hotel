// console.log('working');

// $(document).ready(function(){
// 	$('#roomtype').change(function(){
// 		var currentrt = $('#roomtype').val();

// 		console.log('working');

// 		$.ajax({
// 			type: 'POST',
// 			url: 'example1.php',
// 			data: (currentrt:currentrt),
// 			success: function(result)
// 			{
// 				$('#roomname').html(result);
// 			}
// 		});
// 	});
// });






$(".sliders > div:gt(0)").hide();

		setInterval(function() {
			$('.sliders > div:first')
			.fadeOut(1000)
			.next()
			.fadeIn()
			.end()
			.appendTo('.sliders');
		}, 5000);


let slide_index = 1;
displaySlides(slide_index);

function nextSlide(x) {
	//body....
	displaySlides(slide_index += x);
}

setInterval(() => nextSlide(1), 15000)


function currentSlide(x) {
	//body...
	displaySlides(slide_index = x);
}


function displaySlides(x) {
	//body....
	let slides = document.getElementsByClassName('apartmentslider');
	if (x > slides.length) {slide_index = 1}
	if (x < 1) {slide_index = slide_index.length}
	for (let i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
		slides[slide_index - 1].style.display = "block";
}




