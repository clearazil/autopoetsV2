
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

$(document).on('change', '.btn-file :file', function() {
  var input = $(this),

      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
        
    });
});