jQuery(function(){	
	$('#Who').change(function() {
		if ($(this).val()=='BR') {
			$('#Name1').attr('placeholder',"Your Name").focus();
			$('#iName1').removeClass('fa-male').addClass('fa-female');
			$('#Name2').attr('placeholder',"Groom's Name");
			$('#iName2').removeClass('fa-female').addClass('fa-male');
			$('#ExtraName').hide();
		}
		else if ($(this).val()=='GR') {
			$('#Name1').attr('placeholder',"Your Name").focus();
			$('#iName1').removeClass('fa-female').addClass('fa-male');
			$('#Name2').attr('placeholder',"Brides's Name");
			$('#iName2').removeClass('fa-male').addClass('fa-female');
			$('#ExtraName').hide();
		}
		else if ($(this).val()=='BP') {
			$('#Name1').attr('placeholder',"Bride's Name");
			$('#iName1').removeClass('fa-male').addClass('fa-female');
			$('#Name2').attr('placeholder',"Groom's Name");
			$('#iName2').removeClass('fa-female').addClass('fa-male');
			$('#ExtraName').show();
			$('#NameX').attr('placeholder',"Your Name (Bride's Parent)").focus();
		}
		else if ($(this).val()=='GP') {
			$('#Name1').attr('placeholder',"Bride's Name");
			$('#iName1').removeClass('fa-male').addClass('fa-female');
			$('#Name2').attr('placeholder',"Groom's Name");
			$('#iName2').removeClass('fa-female').addClass('fa-male');
			$('#ExtraName').show();
			$('#NameX').attr('placeholder', "Your Name (Grooms's Parent)").focus();
		}
		else if ($(this).val()=='XX') {
			$('#Name1').attr('placeholder',"Your Name").focus();
			$('#iName1').switchClass('fa-female','fa-user');
			$('#Name2').attr('placeholder',"Partners's Name");
			$('#iName2').switchClass('fa-male','fa-user');
			$('#ExtraName').hide();
		}
		else {
			$('#Name1').attr('placeholder',"Bride's Name");
			$('#iName1').removeClass('fa-male').addClass('fa-female');
			$('#Name2').attr('placeholder',"Grooms's Name");
			$('#iName2').removeClass('fa-female').addClass('fa-male');
			$('#ExtraName').show();
			$('#NameX').attr('placeholder',"Your Name").focus();
		}
	});
});

$(document).ready(function(){ 
	$('#Respond').change(function(){
		if($(this).val()=='skype'){
			$('#mod-Skype').foundation('open');
			$('#iRespond').removeClass('fa-cog').addClass('fa-skype');
		}
		if($(this).val()=='google'){
			$('#mod-Hangout').foundation('open');
			$('#iRespond').removeClass('fa-cog').addClass('fa-google-plus-square');
		}
		if($(this).val()=='DNC'){
			$('#mod-DNC').foundation('open');
			$('#iRespond').removeClass('fa-cog').addClass('fa-bell-slash');
		}
	}); 
});