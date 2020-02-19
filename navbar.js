window.onscroll = function(){
	console.log(window.scrollY);
	stickyScroll();
}

var navbar = document.getElementById('navbar');
var nbOffset = navbar.offsetTop;

function stickyScroll()
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