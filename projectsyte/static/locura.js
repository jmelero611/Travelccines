$(document).ready(function(){
    $(".button-toggle").click(function(){
        var which_to_parse = $(this).attr("id");
        var which_array = which_to_parse.split("-");
        var which = which_array[1];
        var to_close = "#protect-" + which;
        $(to_close).children(".inner-content-collapsable").toggle();
        if ($(this).text() == 'Show'){
        	$(this).text('Hide');
        } else {
        	$(this).text('Show');
        }
    });
});