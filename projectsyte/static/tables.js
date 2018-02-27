$(document).ready(function(){
    $(".show").click(function(){
        var who = $(this).attr("where");
        var where = ".row"+who;
        var change = "#hide"+who;
        $(where).show();
        $(this).hide();
        $(change).show();

    });
    $(".hide").click(function(){
        var who = $(this).attr("where");
        var where = ".row"+who;
        var change = "#show"+who;
        $(where).hide();
        $(this).hide();
        $(change).show();

    });
});