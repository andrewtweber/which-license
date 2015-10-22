var step = 1;
var answers = {
    control: "",
    closed: "",
    royalties: "",
    reciprocity: ""
};

$(document).ready( function() {
    $('.buttons a').on('click', function(e) {
        e.preventDefault();
        var answer = $(this).data('path');
        answers[$('#step-' + step).data('question')] = answer;

        var classes = '#step-' + step;
        step++;

        if ($('#step-' + step).data('path') != answer) {
            classes += ', .buttons';
        }

        $(classes).fadeOut('fast', function() {
            if ($('#step-' + step).data('path') == answer) {
                $('#step-' + step).fadeIn('fast');
            } else {
                $('#result').fadeIn('fast');

                $('.license').each( function() {
                    if ($(this).data('control') == answers.control &&
                        $(this).data('closed') == answers.closed &&
                        $(this).data('royalties') == answers.royalties &&
                        $(this).data('reciprocity') == answers.reciprocity) {
                        $(this).fadeIn('fast');
                    }
                });

                console.log(answers);
            }
        });
    });
});
