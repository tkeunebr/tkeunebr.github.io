define(function() {

    "use strict";

    $(document).delegate('.flash-message', 'click', function(e) {

        // Don't close the flash message when clicking on
        // a link or button

        if ($(e.target).closest('a, button, input').length) {
            return;
        }

        $(this).stop(true, true).slideUp('slow', function() {
            $(this).remove();
        });
    });

    return {
        show: function(message, type, html) {
            if ('object' == $.type(message)) {
                type = message.type || 'valid';
                html = message.html || false;
                message = message.message;
            }

            type = type || 'valid';

            $(".flash-message").remove();

            var $e = $('<div class="flash-message" style="display:none"></div>')
                .addClass(type);

            if (html) {
                $e.html(message);
            } else {
                $e.text(message);
            }
            $e.appendTo('body')
                .slideDown('slow').delay(10000).slideUp('slow', function() {
                    $(this).remove();
                });
        }
    };
});
