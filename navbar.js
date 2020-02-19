window.onscroll = function(event){
		stickyScroll(event);
}

var navbar = document.getElementById('navbar');
var nbOffset = navbar.offsetTop;

function stickyScroll(event)
{
	event.preventDefault();
	if(window.pageYOffset >= nbOffset)
	{
		navbar.classList.add('sticky');
	}
	else
	{
		navbar.classList.remove('sticky');
	}
}