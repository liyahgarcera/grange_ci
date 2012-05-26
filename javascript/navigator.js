// JavaScript Document
// main multi-level dropdown menu animation

$(document).ready(function(){   
    main_menu();
}); 

function main_menu(){
	$(" #topnav ul ").css({display: "none"}); // Opera Fix
	
	$(" #topnav li").hover(function(){
		// mouse in
		/* This function finds the first hidden unordered
		 * list within the currently hovered list item and
		 * shows it. The function “.show” works only under
		 * specific circumstances, this is why we set the
		 * display to none. The number between the braces
		 * defines the animation speed in milliseconds.
		 */
		$(this).find('ul:first').css({visibility: "visible", display: "none"}).show(300);
	},function(){
		//mouse out
		/* This is the mouse out event: we use visibility instead
		 * of display since the show function mentioned above,
		 * sets display to “block” at the end of the animation.
		 * This way if you would hover just a short moment over the
		 * item the item would not display for the ongoing animation
		 * and then pop out all of a sudden. Using visibility prevents
		 * this flickering.
		 */
		$(this).find('ul:first').css({visibility: "hidden"});
	});
}