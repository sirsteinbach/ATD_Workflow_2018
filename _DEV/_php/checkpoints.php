<?php //WHICH CHECKPOINTS HAVE BEEN VIEWED
if(strpos($visited,"Prices")!==false){$viewPrice="Y";}else{$viewPrice="N";}
if(strpos($visited,"Gallery")!==false){$viewGallery="Y";}else{$viewGallery="N";}
if(strpos($visited,"Calendar")!==false){$viewCalendar="Y";}else{$viewCalendar="N";}
//echo $visited;

// PUT TOGETHER TO DETERMINE PASS/FAIL
if(($viewPrice=="N")&&($viewGallery=="N")&&($viewCalendar=="N")){
	$_SESSION['Checkpoint']['Status']="FailAll";
	$_SESSION['Checkpoint']['i1']="fa-exclamation-triangle";
	$_SESSION['Checkpoint']['t1']="Whoa There . . .";
	$_SESSION['Checkpoint']['m1']="It seems you haven&rsquo;t viewed any of our galleries, checked our calendar for availability, or even seen our prices! Wouldn&rsquo;t you like to see any of those before continuing?";
	$_SESSION['Checkpoint']['i2']="fa-envelope";
	$_SESSION['Checkpoint']['t2']="Continue Anyway . . .";
	$_SESSION['Checkpoint']['m2']="Sure, no problem... But please don&rsquo;t ask to see our work, or if we&rsquo;re available on your date, or what our prices are, okay? <em>That&rsquo;s what those buttons above are for.</em>";
	$_SESSION['Checkpoint']['btn-P']="Y";
	$_SESSION['Checkpoint']['btn-G']="Y";
	$_SESSION['Checkpoint']['btn-C']="Y";
	}
elseif(($viewPrice=="N")&&($viewGallery=="Y")&&($viewCalendar=="Y")){
	$_SESSION['Checkpoint']['Status']="FailPrice";
	$_SESSION['Checkpoint']['i1']="fa-question-circle";
	$_SESSION['Checkpoint']['t1']="Missing Something . . .";
	$_SESSION['Checkpoint']['m1']="You&rsquo;d be surprised how often couples contact us and ask us what our prices are! You wouldn&rsquo;t want that to be you too, <em>right</em>?";
	$_SESSION['Checkpoint']['i2']="fa-picture-o";
	$_SESSION['Checkpoint']['t2']="Continue On . . .";
	$_SESSION['Checkpoint']['m2']="That&rsquo;s totally cool. You are welcome to contact us for whatever reason. Just remember our prices are available right <em>here on our website</em>.";
	$_SESSION['Checkpoint']['btn-P']="Y";
	$_SESSION['Checkpoint']['btn-G']="";
	$_SESSION['Checkpoint']['btn-C']="";
	}
elseif(($viewPrice=="Y")&&($viewGallery=="N")&&($viewCalendar=="Y")){
	$_SESSION['Checkpoint']['Status']="FailGallery";
	$_SESSION['Checkpoint']['i1']="fa-question-circle";
	$_SESSION['Checkpoint']['t1']="Wait A Minute . . .";
	$_SESSION['Checkpoint']['m1']="It seems you haven&rsquo;t visited any of our galleries yet! Would you like to look at our photography galleries before continuing?";
	$_SESSION['Checkpoint']['i2']="fa-picture-o";
	$_SESSION['Checkpoint']['t2']="Continue Without Viewing . . .";
	$_SESSION['Checkpoint']['m2']="Okay, you&rsquo;re in charge here! Just don&rsquo;t forget about our galleries. There&rsquo;s no best way to see what to expect from us!";
	$_SESSION['Checkpoint']['btn-P']="";
	$_SESSION['Checkpoint']['btn-G']="Y";
	$_SESSION['Checkpoint']['btn-C']="";
	}
elseif(($viewPrice=="Y")&&($viewGallery=="Y")&&($viewCalendar=="N")){
	$_SESSION['Checkpoint']['Status']="FailCalendar";
	$_SESSION['Checkpoint']['i1']="fa-question-circle";
	$_SESSION['Checkpoint']['t1']="Hang On . . .";
	$_SESSION['Checkpoint']['m1']="Often people do not realize they can check our calendar for availability online. Would you like to see if your date is free on our calendar first?";
	$_SESSION['Checkpoint']['i2']="fa-calendar-times-o";
	$_SESSION['Checkpoint']['t2']="Don&rsquo;t Need Availability . . .";
	$_SESSION['Checkpoint']['m2']="Sure, no problem... But please don&rsquo;t ask to see our work, or if we&rsquo;re available, or what our prices are, okay?";
	$_SESSION['Checkpoint']['btn-P']="";
	$_SESSION['Checkpoint']['btn-G']="";
	$_SESSION['Checkpoint']['btn-C']="Y";
	}
elseif(($viewPrice=="Y")&&($viewGallery=="N")&&($viewCalendar=="N")){
	$_SESSION['Checkpoint']['Status']="PassPrice";
	$_SESSION['Checkpoint']['i1']="fa-exclamation-triangle";
	$_SESSION['Checkpoint']['t1']="Just a Second . . .";
	$_SESSION['Checkpoint']['m1']="It looks like you haven&rsquo;t viewed any of our galleries or checked our online calendar for availability!</p><p>Would you like to see those before contacting us?";
	$_SESSION['Checkpoint']['i2']="fa-envelope";
	$_SESSION['Checkpoint']['t2']="That&rsquo;s Fine, Continue . . .";
	$_SESSION['Checkpoint']['m2']="Sure, you&rsquo;re welcome to contact us for whatever reason. Just don&rsquo;t ask to see our work or if we&rsquo;re availble now.";
	$_SESSION['Checkpoint']['btn-P']="";
	$_SESSION['Checkpoint']['btn-G']="Y";
	$_SESSION['Checkpoint']['btn-C']="Y";
	}
elseif(($viewPrice=="N")&&($viewGallery=="Y")&&($viewCalendar=="N")){
	$_SESSION['Checkpoint']['Status']="PassGallery";
	$_SESSION['Checkpoint']['i1']="fa-exclamation-triangle";
	$_SESSION['Checkpoint']['t1']="Wait just a second . . .";
	$_SESSION['Checkpoint']['m1']="It seems like you might have overlooked our Calendar and Prices too! Both of those items might be very important before you contact us?";
	$_SESSION['Checkpoint']['i2']="fa-envelope";
	$_SESSION['Checkpoint']['t2']="Continue Anyway . . .";
	$_SESSION['Checkpoint']['m2']="Sure, you&rsquo;re welcome to contact us for whatever reason. Just don&rsquo;t ask to see our work or what our prices are. <em>That&rsquo;s those buttons up above!</em>";
	$_SESSION['Checkpoint']['btn-P']="Y";
	$_SESSION['Checkpoint']['btn-G']="";
	$_SESSION['Checkpoint']['btn-C']="Y";
	}
elseif(($viewPrice=="N")&&($viewGallery=="N")&&($viewCalendar=="Y")){
	$_SESSION['Checkpoint']['Status']="PassCalendar";
	$_SESSION['Checkpoint']['i1']="fa-exclamation-triangle";
	$_SESSION['Checkpoint']['t1']="Did you miss this . . .";
	$_SESSION['Checkpoint']['m1']="It seems like you might have overlooked our Calendar and our Gallery too! Both of those items might be very important before you contact us?";
	$_SESSION['Checkpoint']['i2']="fa-envelope";
	$_SESSION['Checkpoint']['t2']="Continue Anyway . . .";
	$_SESSION['Checkpoint']['m2']="Sure, you&rsquo;re welcome to contact us for whatever reason. Just don&rsquo;t ask to see our work or if we&rsquo;re availble then.";
	$_SESSION['Checkpoint']['btn-P']="Y";
	$_SESSION['Checkpoint']['btn-G']="Y";
	$_SESSION['Checkpoint']['btn-C']="";
	}
else{$_SESSION['Checkpoint']['Status']="PassAll";
}
?>