// ------------------------------------- GENERAL ------------------------------------- //

	$.fn.ajax = function(method) {

		// Control variables
		var contentTag = "#content", fileType = ".php";
		var loadingHtml = '<img src="images/128-loading.gif" class="loadingBike" alt="Carregando..." />';
		var $mainContent = $(contentTag), $loadingContent = $(loadingHtml);

		var methods = {

			/**
			 * Set the hash based on the given attributes
			 * @return {null	}
			 */
			hashConfigureSource: function(href) {

				// Force the hash to load
				if (href && window.location.hash == href) {
					$(this).ajax("hashStartLoad");
				// Or load a new one
				} else if (href) {
					window.location.hash = href.replace(fileType, "");
				// Or use the current document to set the path
				} else if (window.location.hash == "") {
					var index = window.location.pathname.lastIndexOf('/'); 
					var hash = window.location.pathname.substring(index+1).replace(fileType, "");

					if (hash == "") hash = "index";

					$(this).ajax("hashDidLoad", hash);
				}
			},
	
			/**
			 * Load the new document on the screen
			 * @return {null	}
			 */
			hashStartLoad: function() {

			    var hash = window.location.hash.replace(/#(.*)\??.*/gi, "$1");
			    
			    if (hash) {
			        $mainContent.fadeOut(300, function() {
			        	$mainContent.after($loadingContent);
			            $mainContent.empty().load(hash + fileType + " " + contentTag, function() {
			                $loadingContent.remove();
			                $mainContent.children().unwrap().fadeIn(300, function() {
			                	$mainContent.ajax("hashDidLoad", hash);
			                });
			            });
			        });
			    }
			},

			/**
			 * Hash has already been loaded and we cannot set up the additional components
			 * @return {null}
			 */
			hashDidLoad: function(newHash) {
				// Custom code that may need to be executed onload
			}
		};


		// Method calling logic
	    if ( methods[method] ) {
	      return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
	    } else if ( typeof method === 'object' || ! method ) {
	      return methods.init.apply( this, arguments );
	    } else {
	      $.error( 'Method ' +  method + ' does not exist on jQuery.tooltip' );
	    }

	};

	/**
	 * Type of device being used
	 * @return {null}
	 */
	var isMobile = {
	    Android: function() {
	        return navigator.userAgent.match(/Android/i) ? true : false;
	    },
	    BlackBerry: function() {
	        return navigator.userAgent.match(/BlackBerry/i) ? true : false;
	    },
	    iOS: function() {
	        return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true : false;
	    },
	    Windows: function() {
	        return navigator.userAgent.match(/IEMobile/i) ? true : false;
	    },
	    any: function() {
	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());
	    }
	};

$(document).ready(function() {

// ------------------------------------- DANGEROUS ------------------------------------- //

	/**
	 * Make sure that the hash is set
	 */
	$(window).ajax("hashConfigureSource", window.location.hash);

// ------------------------------------- AJAX ------------------------------------- //

	/**
	 * Always load content dinamically with few expections
	 */
	$(document).on("click", "a", function(event) {

		if ($(this).attr("data-lock") != "yes") {

			if ($(this).attr("target") == "_blank") return true;
			if ($(this).hasClass("reloadPage")) return true;
			
			if ($(this).attr("href") != undefined) {
				if ($(this).attr("href").substr(0, 10) == "javascript") return true; // Chosen
				if ($(this).attr("href").substr(0, 7) == "http://") return true;
				if ($(this).attr("href").substr(0, 8) == "https://") return true;
				if ($(this).attr("href").substr(0, 7) == "mailto:") return true;
				if ($(this).attr("href") == "/logout.php") return true;
			}

			$(this).ajax("hashConfigureSource", $(this).attr("href"));
		}
		
		event.preventDefault();
	    return false;
	});

	/**
	 * Load the new hash
	 */
	$(window).bind('hashchange', function(event, href) {
		$(this).ajax("hashStartLoad");
	});


// ----------------------------------- APPLICATIONS -------------------------------------- //
// -------------------------------------- ----- -------------------------------------- //
// -------------------------------------- ----- -------------------------------------- //

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
	