// ANIMATION DE SCROLL
$('a[href^="#"]').click(function(){
	var the_id = $(this).attr("href");

	$('html, body').animate({
		scrollTop:$(the_id).offset().top
	}, 'slow');
	return false;
    });

// STICKY MENU
    $( document ).ready(function() {
      var secondaryNav = $('.header_nav'),
      	secondaryNavTopPosition = secondaryNav.offset().top;

      $(window).on('scroll', function(){

      	if($(window).scrollTop() > secondaryNavTopPosition ) {
      		secondaryNav.addClass('fixed');
      	} else {
      		secondaryNav.removeClass('fixed');
      	}
      });
        $('a[href^="#"]').click(function(){
    	var the_id = $(this).attr("href");

    	$('html, body').animate({
    		scrollTop:$(the_id).offset().top
    	}, 'slow');
    	return false;
        });

    });

// ANNULATION DE l'ANIM DE LA FLECHE APRES CLIQUE
$("#fleche_anim").click(function(){
    $("#fleche_anim img").removeClass("animated");
});
