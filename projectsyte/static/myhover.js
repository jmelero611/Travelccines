  $("path").hover(function(event) {
    var name = $(this).attr("title");
    var num_id = $(this).attr("id");
    if (num_id == 362){
    	num_id = 36
    }
    if (name != 'Unknown'){
      $("#mapping").text(name);
      $("#mapping").css({top: event.pageY, left: event.pageX}).show();
      $("#desticoun").val(num_id);
    }
}, function(){
  $("#mapping").hide();
});

