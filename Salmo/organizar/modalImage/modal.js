$(document).ready(function(){

    $("#myImg").click(function(){
        $("#myModal").show();
        $(".modal-content").attr("src", $(this).attr("src"));
        $("#caption").text($(this).attr("alt"));
    });

    $(".close").click(function(){
        $(".modal").hide();
    })
})