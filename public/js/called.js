$(function () {
	if ($("body").hasClass("sidebar-open")) {
		// console.warn("ESTA ABERTO");
		$("body").removeClass("sidebar-open");
		$("body").addClass("sidebar-collapse");
		$("#btnHamburger").css({ 'display': 'none', 'transition': '.4s' });
		$("ul.navbar-nav.ml-auto").css({'margin-right': '0px', 'transition': '.7s' });
	} else {
		// console.warn("ESTA FECHADO");
		$("body").addClass("sidebar-collapse");
		$("#btnHamburger").css({ 'display': 'block', 'transition': '.4s' });
		$("ul.navbar-nav.ml-auto").css({'margin-right': '0px', 'transition': '.6s' });
	}
	
	$("#btnHamburger").click(function () {
		if ($("body").hasClass("sidebar-open")) {
			// console.warn("sidebar FECHOU");
			$("#btnHamburger").css({ 'display': 'none', 'transition': '.4s' });
			$("#btnCloseMenu").css({ 'display': 'block', 'transition': '.4s' });
			$("ul.navbar-nav.ml-auto").css({ 'margin-right': '250px', 'transition': '.5s' });
		} else {
			// console.warn("sidebar ABRIU");
			$("#btnHamburger").css({ 'display': 'none', 'transition': '.4s' });
			$("#btnCloseMenu").css({ 'display': 'block', 'transition': '.4s' });
			$("ul.navbar-nav.ml-auto").css({ 'margin-right': '250px', 'transition': '.4s' });
		}
	});
	
	$("#btnCloseMenu").click(function () {
		if ($("body").hasClass("sidebar-open")) {
			$("body").removeClass("sidebar-open");
			$("body").addClass("sidebar-collapse");
			$("#btnHamburger").css({ 'display': 'block', 'transition': '.4s' });
			$("ul.navbar-nav.ml-auto").css({'margin-right': '0px', 'transition': '.3s' });
			// console.warn("sidebar FECHOUKK");
		} else {
			$("body").addClass("sidebar-collapse");
			$("#btnHamburger").css({ 'display': 'block', 'transition': '.4s' });
			$("ul.navbar-nav.ml-auto").css({'margin-right': '0px', 'transition': '.2s' });
			// console.warn("sidebar FECHOUUUUU");
		}
	});
	// $("ul.navbar-nav.ml-auto").css({ 'margin-right': '0px', 'transition': '.1s' });
});