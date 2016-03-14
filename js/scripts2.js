$(function(){
    $(".element").typed({
      strings: ["The Ryerson Journalism Alumni Association"],
      typeSpeed: 24,
      cursor: false,
    });
});

$(window).scroll(function() {

	var fixedCoord = $(".social").offset().top;
	var about = $(".about").offset().top;
	var contact = $(".contact").offset().top;


	if (fixedCoord >= about) {
		 $("i").css("color", "#0D0A54");
		}
	if (fixedCoord >= contact) {
		 $("i").css("color", "#DCAF44");
		}
	if (fixedCoord <= about) {
		 $("i").css("color", "#DCAF44");
		}	
});