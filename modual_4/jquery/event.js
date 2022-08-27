$(document).ready(function () {
	$('#user,#psw,#country').focus(function () {
		$(this).css('background-color', 'lime');
	});

	$('#user,#psw,#country').blur(function () {
		$(this).css('background-color', 'white');
	});

	$('#country').change(function () {
		var a = $(this).val();
		$('#test').html(a);

	});

	$('sform').submit(function () {
		console.log("form submited");

	});

	$('#user,#psw').select(function () {
		$(this).css("background", "yellow");

	});
});