/** 
 *------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github 
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         http://t3-framework.org 
 *------------------------------------------------------------------------------
 */
jQuery.noConflict();
(function($) {

	$(document).ready(function ($) {
		//equalheight
		(function(){
    		$('#t3-content, .t3-sidebar').equalHeight();
		})();

		// back to top
		(function(){
			$('#back-to-top').on('click', function(){
				$('html, body').stop(true).animate({
					scrollTop: 0
				}, {
					duration: 800, 
					easing: 'easeInOutCubic',
					complete: window.reflow
				});

				return false;
			});
		})();
		
		(function(){
		    $("#fontIncrease").click(function(){ 
			     var currentSize = $('div.itemFullText').css('font-size'); 
				 var currentSize = parseFloat(currentSize)*1.2;
				 $('div.itemFullText').css('font-size', currentSize); return false; 
			}); 
		})();
		
		(function(){
		    $("#fontDecrease").click(function(){ 
			    var currentFontSize = $('div.itemFullText').css('font-size'); 
				var currentSize = $('div.itemFullText').css('font-size'); 
				var currentSize = parseFloat(currentSize)*0.8; 
				$('div.itemFullText').css('font-size', currentSize);
			}); 
		})();
		
		// auto run My Modal
		(function(){
				 if($.cookie("myModalCheck") == '1'){
				       $('#myModal').modal();
					   $.cookie("myModalCheck", "2");
				  }
		})();

	});
})(jQuery);