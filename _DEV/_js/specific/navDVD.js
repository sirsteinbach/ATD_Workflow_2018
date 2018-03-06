jQuery(document).ready(function(){
	locations = Array(
	"/gallery/dvdPlatinum.php",
	"/gallery/dvdGold.php",
	"/gallery/dvdSilver.php"
	);
$("#sort").change(function () {
	goto = locations[$("#sort>option:selected").index()];
	window.location.href = goto;
	})
});

// Initialize Fancybox
$(document).ready(function(){
	$(".fancybox").fancybox()
})