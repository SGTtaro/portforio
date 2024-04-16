/*loading*/

const loadingAreaGrey = document.querySelector('#loading');


window.addEventListener('load', () =>{
	loadingAreaGrey.animate({
		opacity:[1,0],
		visibility: 'hidden',
	},
	{	
		duration:2000,
		delay: 1200,
		easing:'ease',
		fill:'forwards'
		
	});
	
	
});






