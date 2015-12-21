$(document).ready(function() {

	/**
	 * Change the current theme
	 * @return {null}
	 */
	$(".upperBlock li").live("click", function(event) {
		// Remove the selection
		$(this).siblings(".selectedLanguage").removeClass("selectedLanguage").end().addClass("selectedLanguage");
		$("body").find("." + $(this).attr("data-block")).show(0).siblings("section").hide(0);
	});

});
	