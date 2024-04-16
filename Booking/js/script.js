const loadingscreen = document.querySelector('#loading');
window.addEventListener('load', () =>{
	loadingscreen.animate(
	{
		opacity:[1,0],
		visibility:'hidden',
	},
	{
		duration:2000,
		deley:1200,
		easing:'ease',
		fill:'forwards',
		
	}
	);
});