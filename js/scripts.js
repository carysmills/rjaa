
$(window).scroll(function() {
	if ($("#social").hasClass("home")) {

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

	};
});

$( "#nav-toggle" ).click(function() {
  $(this).toggleClass( "active" );
  $( "#mobile" ).toggleClass( "show" );
});
