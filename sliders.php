<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0;background-color:transparent}
</style>
<body>

<div class="w3-content w3-display-container" style="max-width:800px">
  <img class="mySlides" src="img_nature_wide.jpg" style="width:100%">
  <img class="mySlides" src="img_fjords_wide.jpg" style="width:100%">
  <img class="mySlides" src="img_mountains_wide.jpg" style="width:100%">
  <div class="w3-center w3-section w3-large w3-text-white w3-display-bottomleft" style="width:100%">
    <div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">❮</div>
    <div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">❯</div>
    <span class="w3-badge demo w3-border w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
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

</body>

<!-- Mirrored from www.w3schools.com/w3css/tryit.asp?filename=tryw3css_slideshow_dots2 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:51 GMT -->
</html> 
