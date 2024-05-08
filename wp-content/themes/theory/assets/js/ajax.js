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
                // Сохраняем текущее содержимое #car_content
                var currentContent = $('#car_content').html();
                // Если новый контент отличается от текущего, добавляем его
                if (data !== currentContent) {
                    $('#car_content').html(data);
                }
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });
    });
});