
$(window).load(function() {
        $('#slider').nivoSlider();
    });

// Show navigation for the slider when mouse enters, hide when mouse leaves
$("#slider").hover(function() {
	$(".nivo-nextNav").show();
	$(".nivo-prevNav").show();
}, function() {
	$(".nivo-nextNav").hide();
	$(".nivo-prevNav").hide();
});