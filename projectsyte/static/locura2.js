function update(){
	$(".lower-sub_section").each(function() {
		$(this).hide();
  		var which_to_parse = $(this).attr("id");
        var which_array = which_to_parse.split("-");
        var which = which_array[1];
        var to_close = "#protect-" + which;
        $(to_close).children(".inner-content-collapsable").toggle();
        $(to_close).children(".sub_section_head").children("a").text('Show');
        $(to_close).children(".sub_section_head").children("a").attr("id",which_to_parse);
});
}

window.onload = update();