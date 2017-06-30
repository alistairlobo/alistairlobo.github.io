
$(document).keypress(function(event) {
   if (event.which === 115 ) { window.location = 'http://teknack.in'; }
   else if (event.which === 83 ) { window.location = 'http://teknack.in'; }
   
});

var s = skrollr.init({
    render: function(data){
        $('#info').text(data.curTop);
    }
});

window.addEventListener("load", function()
{
	var load_screen = document.getElementById("load_screen");
	document.body.removeChild(load_screen);
});