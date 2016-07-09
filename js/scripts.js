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


$(".year").on( "click", function( event ) {
	if ($(this).next().hasClass("flex")) {
		$(this).next().addClass("none");
		$(this).next().removeClass("flex");
		$(this).addClass("hide");
		$(this).removeClass("show");
		$(this).find('i').toggleClass('fa-chevron-up fa-chevron-down');
	}

	else if ($(this).next().hasClass("none")) {
		$(this).next().addClass("flex");
		$(this).next().removeClass("none");
		$(this).addClass("show");
		$(this).find('i').toggleClass('fa-chevron-down fa-chevron-up')


	}
	else {
		$(this).next().addClass("flex");
		$(this).addClass("show");
		$(this).removeClass("hide");
		$(this).find('i').toggleClass('fa-chevron-down fa-chevron-up')
	}
});

$( document ).ready(function() {
    $(".yearBlock:first-of-type").addClass("flex")
    $(".drop").first().removeClass("fa-chevron-down")
    $(".drop").first().addClass("fa-chevron-up")
});