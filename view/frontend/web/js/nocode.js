require(['jquery'], function ($) {
    'use strict';

    $('#nocode').change(function () {
        var isChecked = $('#nocode').prop('checked') ? true : false;
        $.ajax({
            url: '/nocode/post/index',
            data: "nocode=" + isChecked,
            type: "POST",
            dataType: 'json'
        });
    });

});