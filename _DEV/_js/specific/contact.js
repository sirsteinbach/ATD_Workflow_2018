$(document).on('closed.zf.reveal',function(){
	$('#Comment').focus();
})	
$(document).ready(function(){
	$(':checkbox').change(function(){
		if($(this).is(':checked')){
			$('#datepicker').val('Uncertain');
		} else {
			$('#datepicker').val('');
			$('#datepicker').attr('placeholder','Event Date');
		}
	});
})
jQuery(function(){
	$('#datepicker').mask("99/99/9999",{placeholder:'mm-dd-yyyy'});
	$('#Phone-number').mask("(999) 999-9999");
	$('#datepicker').datepicker({
		dateFormat:'MM d, yy',
		changeMonth:true,
		changeYear:true,
		minDate:'0',
		maxDate:'+2y'
	});
	$('#datepicker').datepicker({
		onSelect:function(date){
			$(':checkbox').prop('checked', false);
		}
	});
})