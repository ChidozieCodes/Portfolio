window.onload = function() {
	//alert('connect')
}



$('#hamburger').click(function(){
	 $('#nav_mobile').toggleClass('active');
	//alert('hi');
})
$('#nav_mobile li a').click(function(){
	
	$('#nav_mobile').toggleClass('active');

})

var typed = new Typed(".typing", {
	strings: ["I'm ^60 A ^60 FullStack ^60 Web ^60 Developer", "^60 Let ^60 Me ^60 Bring ^60 Your ^60 Ideas ^60 To ^60 Reality"],
	typedSpeed: 150,
	backSpeed: 50,
	loop: true
});

$('a[href^="#"]').on('click', function(e){
		e.preventDefault();

		// $("#nav_bar ul li a").removeClass("active");
		// $(this).addClass("active");
		var target = this.hash;
		var $target = $(target);

		$('html, body').animate({
			'scrollTop': $target.offset().top-100
		}, 2000, 'swing', function (){
			window.location.hash = target;
		});
		
});

