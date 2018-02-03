  $("path").hover(function(event) {
    var name = $(this).attr("title");
    if (name != 'Unknown'){
      $("#mapping").text(name);
      $("#mapping").css({top: event.pageY, left: event.pageX}).show();
    }
}, function(){
  $("#mapping").hide();
});

