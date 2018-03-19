jQuery(document).ready(function($){
 
 
    var custom_uploader;
 
 
    $('.upload_image_button').click(function(e) {
 
        e.preventDefault();
        attach_id = $(this).attr('target');
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#'+attach_id).val(attachment.url);
        });
 
        //Open the uploader dialog
        custom_uploader.open();
        

    });
 
 
 $( '.tab' ).click(function() {
  $( '.o-section' ).hide();
  jQuery('.'+$(this).attr('target')).show();
});


$(function() {    
  $(".tab").click(function() {  
    $(".tab").removeClass("active");
    $(this).addClass("active"); 
    
  });
});


$('.drop').change(function() {
        var selectedValue = $(this).val();
        dropswitch = $(this).attr('target');
        $('.'+dropswitch).val(selectedValue);
    });



});




