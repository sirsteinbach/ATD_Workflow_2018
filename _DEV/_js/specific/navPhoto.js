// Photo Gallery Nav
$(document).ready(function(){
	locations = Array(
	"/gallery/portfolio1.php",
	"/gallery/engagements1.php",
	"/gallery/sunsets1.php",
	"/gallery/families.php",
	"/gallery/seniors.php",
	"/gallery/modeling.php",
	"/gallery/travel.php",
	"/gallery/sonia.php",
	"/gallery/stephen.php"
	//"/gallery/password.php"
	);
$("#sort").change(function(){
	goto = locations[$("#sort>option:selected").index()];
	window.location.href = goto;
	})
});

// Wedding Sub Nav
$(document).ready(function(){
	w_sub_locations = Array(
	"/gallery/portfolio1.php",
	"/gallery/portfolio2.php",
	"/gallery/portfolio3.php",
	"/gallery/portfolio4.php",
	"/gallery/portfolio5.php",
	"/gallery/candids.php",
	"/gallery/ceremonies.php",
	"/gallery/brides.php",
	"/gallery/details.php",
	"/gallery/groups.php"
	);
$("#WG_sort").change(function(){
	goto = w_sub_locations[$("#WG_sort>option:selected").index()];
	window.location.href = goto;
	})
});

// Engagement Sub Nav
$(document).ready(function(){
	e_sub_locations = Array(
	"/gallery/engagements1.php",
	"/gallery/engagements2.php"
	);
$("#EG_sort").change(function(){
	goto = e_sub_locations[$("#EG_sort>option:selected").index()];
	window.location.href = goto;
	})
});

// Sunsets Sub Nav
$(document).ready(function(){
	s_sub_locations = Array(
	"/gallery/sunsets1.php",
	"/gallery/sunsets2.php"
	);
$("#SS_sort").change(function(){
	goto = s_sub_locations[$("#SS_sort>option:selected").index()];
	window.location.href = goto;
	})
});

// Initialize Fancybox
$(document).ready(function(){
	$('.fancybox').fancybox()
})