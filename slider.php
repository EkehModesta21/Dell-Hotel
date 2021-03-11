<!DOCTYPE html>
<html>
<head>
	<title>Slider</title>
</head>
<style type="text/css">
body{
	width: 100%;
	margin: 0;
}
.section{
	width: 100%;
}
.image-slider{
	border-radius: 10px;
	position: relative;
	box-shadow: 0 0 5px grey;
	width: 80%;
}
.image{
	display: inline-block;
	width: 28%;
	vertical-align: top;
	padding: 2.5%;
	position: relative;
}
.image img{
	width: 100%;
	height: 35vh;
	animation: slideLeftBig 10s infinite;
	z-index: 1;
}
.prev, .next{
	cursor: pointer;
	position: absolute;
	top: 50%;
	width: auto;
	padding: 16px;
	color: #333;
	margin-top: -22px;
	font-weight: bold;
	font-size: 18px;
	transition: 0.6s ease;
	border-radius: 0 3px 3px 0;
}
.prev{
	left: 0;
}
.next{
	right: 0;
	border-radius: 3px 0 0 3px;
}
.prev:hover, .next:hover{
	background-color: rgba(0,0,0,0.5);
}
.dot{
	cursor: pointer;
	height: 15px;
	width: 15px;
	margin: 0 2px;
	background-color: #bbb;
	border-radius: 50%;
	display: inline-block;
	transition: background-color 0.6s ease;
}
.dot:hover{
	background-color: #717171;
}

/*animation for slider*/
.fade{
	-webkit-animation-name: fade;
	-webkit-animation-duration: 1.5s;
	animation-name: fade;
	animation-duration: 1.5s;

}
@-webkit-keyframes fade{
	from{opacity: .4}
	to{opacity: 1}
}
@keyframes fade{
	from{opacity: .4}
	to{opacity: 1}
}

.w3-white{
	background-color: white;
}
	/*.imgcontainer2{
		width: 96%;
		height: 80vh;
		margin: 0 auto;
		background-color: rgb(0,0,0,0.7);
		position: relative;
	}
	.imgcontainer2:hover{
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}

	.images2{
		width: 100%;
		margin: 0;
		height: 80vh;
		background: inset;
		animation-name: macdel;
		animation-duration: .8s;
		animation-timing-function: linear;
		filter: brightness(30%);
	}
	@keyframes macdel{
		from{
			transform: translateX(-100px); opacity: 0;
		}
		to{
			transform: translateY(0); opacity: 1;
		}
	}

	#spans span{
		display: inline-block;
		position: absolute;
		padding: 1%;
		background-color: red;
		border-radius: 50%;
	}*/

</style>



<body style="width: 100%; margin: 0;">
	<div id="section">
		<div class="image-slider">
			<div class="image fade mySlides">
				<img src="img/bgimg1.jpg">
			</div>
			<div class="image fade mySlides">
				<img src="img/bgimg4.jpg">
			</div>
			<div class="image fade mySlides">
				<img src="img/bgimg3.jpg">
			</div>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
			<div style="text-align: center;">
				<span class="dot" onclick = "currentSlide(1)"></span>
				<span class="dot" onclick = "currentSlide(2)"></span>
				<span class="dot" onclick = "currentSlide(3)"></span>
			</div>
		</div>
	</div>






	<!-- <div class="imgcontainer2" style="margin: 0;">
		<div class="slider">
			<img src="img/bgimg1.jpg" class="images2">
		</div>
		<div class="slider">
			<img src="img/bgimg4.jpg" class="images2">
		</div>
		<div class="slider">
			<img src="img/bgimg3.jpg" class="images2">
		</div>

		<div id="spans">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</body> -->
</html>
<script type="text/javascript">
	// var a = 0;
	// sliders();

	// function sliders(){
	// 	var x;
	// 	var m = document.getElementsByClassName('slider');
	// 	for(x = 0; x < m.length; x++){
	// 		m[x].style.display = "none";
	// 	}
	// 	a++;
	// 	if(a > m.length){a = 1}
	// 		m[a-1].style.display = "block";
	// 	setTimeout(sliders,10000);
	// }

var slideIndex = 1;
showDivs(slideIndex);

function plusSlides(n) {
  showDivs(slideIndex += n);
}

function currentSlide(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].classList.remove("w3-white");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].classList.add("w3-white");
}

</script>