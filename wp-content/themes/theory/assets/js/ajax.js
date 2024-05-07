jQuery(document).ready(function($){
    $('#button_car').on('click', function(e){
        e.preventDefault();

        $.ajax({
            url:theo_ajax_script.ajaxurl,
            data: {
                'action' : 'theo_ajax_example',
                'nonce' :  theo_ajax_script.nonce,
                'string_one' : theo_ajax_script.string_box,
                'string_two' : theo_ajax_script.string_new
            },
            success: function(data){
                $('#car_content').append(data);
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });
    });
});