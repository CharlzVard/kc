$(function() { //DOMContentLoaded
	// Custom JS
	$("a[href*=\\#]").on("click", function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
				scrollTop: $(anchor.attr('href')).offset().top
		}, 777);
		e.preventDefault();
		return false;
	});

	$('.owl-carousel.projects').owlCarousel({
		'margin': 30,
		'autoplay': true,
		'autoplayTimeout': 5000,
		'autoplayHoverPause': true,
		'nav': false,
		'loop': true,
		responsive:{ //Адаптация в зависимости от разрешения экрана
				0:{
						items:1
				},
				992:{
						items:2
				},
				1200:{
						items:3
				}
		}
	});

	$('.owl-carousel.partners').owlCarousel({
		'autoplay': true,
		'autoplayTimeout': 3000,
		'autoplayHoverPause': true,
		'nav': true,
		'loop': true,
		'dots': false,
		responsive:{ //Адаптация в зависимости от разрешения экрана
			0:{
				items:1
			},
			768:{
				items:2
			},
			992:{
				items:3
			},
			1200:{
				items:4
			}
		}
	});
	
	//Инициализация галереи проектов
	$('[data-fancybox]').fancybox({
		loop: true,
	});



	jQuery('img.svg').each(function(){
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

	});


	$('#preloader').fadeOut(500);
});



if (window.location.pathname=="/projects"){
	function initMap() {
		var activeInfoWindow;
		var place1 = {lat: 57.425691, lng: 46.5720273};
		
		// The map, centered at Uluru
		var map = new google.maps.Map(
		document.getElementById('map'), {zoom: 6, center: {lat: 56.292, lng: 43.646}});
		// The marker, positioned at Uluru
		var marker1 = new google.maps.Marker({
				position: place1, 
				map: map,
				title:"Съёмка мультфильма"
		});
		
		var content1 = '<h4>Простоквашино</h4>'+
		'<p>Почему бы и не да?</p>';
		
		
		var infowindow1 = new google.maps.InfoWindow({
				content: content1
		});
		
		marker1.addListener('click', function() {
				activeInfoWindow&&activeInfoWindow.close();
				infowindow1.open(map, marker1);
				activeInfoWindow = infowindow1;
		});
	}
}


if (window.location.pathname=="/contacts"){
	// Initialize and add the map
	function initMap() {
		var activeInfoWindow;
		var place1 = {lat: 56.3280500, lng: 44.0174300};
		// The map, centered at Uluru
		var map = new google.maps.Map(
		document.getElementById('map'), {zoom: 18, center: {lat: 56.3280500, lng: 44.0174300}});
		// The marker, positioned at Uluru
		var marker1 = new google.maps.Marker({
				position: place1, 
				map: map,
				title:"KC-Cinema"
		});
		
		var content1 = '<h4>KC-Cinema</h4>'+
		'<p>603005, г. Нижний Новгород, ул. Минина, д. 18/3</p>'+
		'<img src="https://geo0.ggpht.com/cbk?output=thumbnail&panoid=fW5eP_gdbXtRXVeKHHpIfA&minw=535&minh=264&thumb=2&yaw=7.7317853&pitch=0">';
		
		var infowindow1 = new google.maps.InfoWindow({
				content: content1
		});
		
		marker1.addListener('click', function() {
				activeInfoWindow&&activeInfoWindow.close();
				infowindow1.open(map, marker1);
				activeInfoWindow = infowindow1;
		});
}

}