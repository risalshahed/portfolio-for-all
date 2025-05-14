jQuery(document).ready(function($) {
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();

        var form = $(this);
        var formData = form.serialize();

        $.ajax({
            type: 'POST',
            url: '<?php echo get_template_directory_uri(); ?>/mailer.php',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $('<div class="alert alert-success">'+ response.data +'</div>').insertBefore(form);
                    form[0].reset();
                } else {
                    $('<div class="alert alert-danger">'+ response.data +'</div>').insertBefore(form);
                }
            },
            error: function() {
                $('<div class="alert alert-danger">Something went wrong. Try again.</div>').insertBefore(form);
            }
        });
    });
});