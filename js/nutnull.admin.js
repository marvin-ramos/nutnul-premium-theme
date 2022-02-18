jQuery(document).ready(function($){

    // for logo/image uploader
    var mediaUploader;
    $( '#upload-button' ).on('click', function(e) {
        e.preventDefault();
        if( mediaUploader ) {
            mediaUploader.open();
            return;
        }

        // check the function in wordpress codex
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Company Logo',
            button: {
                text: 'Choose Logo'
            },
            multiple: false
        });

        // check the function in wordpress codex
        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#company-logo').val(attachment.url);
            $('#company-logo-preview').css('background-image','url(' + attachment.url + ')');
        });

        mediaUploader.open();
    });

    // removing company logo
    $('#remove-logo').on('click', function(e){
        e.preventDefault();
        var answer = confirm("Are you sure you want to remove company logo?");
        if( answer == true ) {

            // console.log('yes');
            $('#company-logo').val('');
            $('.nutnull-general-form').submit();
        }
        return;
    });
});