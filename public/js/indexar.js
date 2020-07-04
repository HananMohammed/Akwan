$("input[type=range]").mouseup(function (e) {
    var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));
    var percent = val * 100;

    $(this).css('background-image',
        '-webkit-gradient(linear, right top, left top, ' +
        'color-stop(' + percent + '%, #B7B7B7), ' +
        'color-stop(' + percent + '%, #65CC2A)' +
        ')');

    $(this).css('background-image',
        '-moz-linear-gradient(right center, #B7B7B7 0%, #B7B7B7 ' + percent + '%, #65CC2A ' + percent + '%, #65CC2A 100%)');
});