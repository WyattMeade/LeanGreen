/*
 * Website: Lean Green
 * Author: Wyatt Meade
 */

$(".btn").on("click", function(e) {
	
	e.preventDefault();
	
	if($(this).closest(".clientContainer").hasClass("reveal")) {
		$(".clientContainer").removeClass("reveal");
	} else {
		$(".clientContainer").removeClass("reveal");
		$(this).closest(".clientContainer").addClass("reveal");
	}

});