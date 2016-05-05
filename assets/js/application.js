jQuery(document).ready( function() {
  (function ($) {

        // Quiz
        var quiz = $('#quiz form');
        var input = $('#quiz form input');
        var next = $('.next');
        var submit_three = $('#buttonDiv_three #button');
        var submit_four = $('#buttonDiv_four #button');
        var submit_five = $('#buttonDiv_five #button');
        var submit_six = $('#buttonDiv_six #button');
        var answer = $('#answerSheet')

        $(next).click(function(){
            $(this).parent().parent('form').removeClass('show');
            $(this).parent().parent('form').next('form').addClass('show');
        })
        $(submit_three).click(function(){
            $(this).parent('#buttonDiv_three').hide();
            $(quiz).addClass('done');
            $(next).hide();
            $(input).prop('disabled', true);
            $(answer).show();
        })
        $(submit_four).click(function(){
            $(this).parent('#buttonDiv_four').hide();
            $(quiz).addClass('done');
            $(next).hide();
            $(input).prop('disabled', true);
            $(answer).show();
        })
        $(submit_five).click(function(){
            $(this).parent('#buttonDiv_five').hide();
            $(quiz).addClass('done');
            $(next).hide();
            $(input).prop('disabled', true);
            $(answer).show();
        })
        $(submit_six).click(function(){
            $(this).parent('#buttonDiv_six').hide();
            $(quiz).addClass('done');
            $(next).hide();
            $(input).prop('disabled', true);
            $(answer).show();
        })



    function calcScore() {
        var results = {right: 0, wrong: 0, answered: [], unanswered: [], missed: []};
        $("form .tab").each(function(index) {
            var chosen = $(this).find("input:checked");
            if (chosen.length) {
                results.answered.push(index);
                if (chosen.val() == answers[(index * 2) + 1]) {
                    results.right++;
                    results.answered.push(index);
                } else {
                    results.wrong++;
                    results.missed.push(index);
                }
            } else {
                results.unanswered.push(index);
            }
        });
        return(results);
    }

    $("#buttonDiv_three").click(function() {
        var results = calcScore();
        var str = "You got " + results.right + " out of 3 correct";
        $(document.createElement('h3')).css({
             'text-align': 'center',
             'font-size': '2.5em'
         }).text(Math.round(results.right / 3 * 100) + '%').insertAfter('.results_area');
        var result = Math.round(results.right / 3 * 100);
        $("#results").html(str);
      });
    $("#buttonDiv_four").click(function() {
        var results = calcScore();
        var str = "You got " + results.right + " out of 4 correct";
        $(document.createElement('h3')).css({
             'text-align': 'center',
             'font-size': '2.5em'
         }).text(Math.round(results.right / 4 * 100) + '%').insertAfter('.results_area');
        var result = Math.round(results.right / 4 * 100);
        $("#results").html(str);
      });
    $("#buttonDiv_five").click(function() {
        var results = calcScore();
        var str = "You got " + results.right + " out of 5 correct";
        $(document.createElement('h3')).css({
             'text-align': 'center',
             'font-size': '2.5em'
         }).text(Math.round(results.right / 5 * 100) + '%').insertAfter('.results_area');
        var result = Math.round(results.right / 5 * 100);
        $("#results").html(str);
      });
    $("#buttonDiv_six").click(function() {
        var results = calcScore();
        var str = "You got " + results.right + " out of 6 correct";
        $(document.createElement('h3')).css({
             'text-align': 'center',
             'font-size': '2.5em'
         }).text(Math.round(results.right / 6 * 100) + '%').insertAfter('.results_area');
        var result = Math.round(results.right / 6 * 100);
        $("#results").html(str);
      });
    
	})(jQuery);

});


