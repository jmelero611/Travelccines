$(document).ready(function(){
    $("path").click(function(){
       var where = $(this).attr("id");
	var name = $(this).attr("title");
	if (name != 'Unknown'){
		location.href = "output.php?oricoun=&desticoun="+where+"&non-vacc-chec=on&recomm-check=on";
	}
    });
});
