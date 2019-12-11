$(document).ready(function(){
    $("h1").click(function(){
        $(this).toggleClass("destaque");
    });

    $("#hide").click(function(){
        $("img[src*='nebulosa01']").hide(3000);
    });

    $("#show").click(function(){
        $("img[src*='nebulosa01']").show("normal");
    });

    $("#slideUp").click(function(){
        $("img[src*='nebulosa02']").slideUp();
    });

    $("#slideDown").click(function(){
        $("img[src*='nebulosa02']").slideDown();
    });

    $("#fadeOut").click(function(){
        $("img[src*='nebulosa03']").fadeOut();
    });

    $("#fadeIn").click(function(){
        $("img[src*='nebulosa03']").fadeIn();
    });

    $("#toggle").click(function(){
        $("img[src*='nebulosa04']").toggle();
    });

    $()
});