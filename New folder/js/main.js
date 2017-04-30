/*preloader*/
$(document).ready(function() {

	setTimeout(function(){
		$('body').addClass('loaded');
		$('h1').css('color','#222222');
	}, 1000);

		$( '#cd-dropdown' ).dropdown( {	gutter : 0 } );

});
