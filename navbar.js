window.onscroll = function(){
		stickyScroll();
}

var navbar = document.getElementById('navbar');
var nbOffset = navbar.offsetTop;

function stickyScroll()
{
	if(window.pageYOffset >= nbOffset)
	{
		navbar.classList.add('sticky');
	}
	else
	{
		navbar.classList.remove('sticky');
	}
}