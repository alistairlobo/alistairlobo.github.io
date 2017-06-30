$(function() 
{
	// $("h1").animate({
    //   "margin-left": "100px"
    // }, "slow");

    (".sidebar-menu li").on("click", function() {
       $(".sidebar-menu li").removeClass("active");
       $(this).addClass("active");
    });
});