
var zombie = $('#zombie'), 
	pLocs = [0, -250, -500, -750, -1000, -1250 ,-1500],
	curFrm = 0,
	lastStep=0;/*putting , stops walking ROFL!!!*/

skrollr.init({
	beforerender: function(o)
	{
		if(o.curTop > lastStep + 50) 
		{
			if (curFrm>=6)
				{ 
					curFrm=-1;
				}
				zombie.css('background-position', pLocs[curFrm++] + 'px 0px');
				lastStep = o.curTop;
		} 
		else if(o.curTop < lastStep - 50) 
		{
			if (curFrm<=0)
				{ 
					curFrm=7; 
				}
				zombie.css('background-position', pLocs[curFrm--] + 'px 0px');
				lastStep = o.curTop;
		}
	}
});	

