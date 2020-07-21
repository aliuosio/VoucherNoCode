require(['jquery'], function ($) {
    'use strict';
    $(document).ready(function () {
        $("#nocode-box").hide();
    });

    $(window).on('mouseenter', function () {
        $("#nocode-box")
            .insertAfter($('.discount-code'))
            .css("padding", 0)
            .css("margin-bottom", 0)
            .show();
    });
});