$(document).ready(function() {
	$('body').on('click', '#cj-tab', function(){
		$('#cj').show();
		$('#kalila').hide();
		$('#mel').hide();
		$('#tarin').hide();
	});

	$('body').on('click', '#mel-tab', function(){
		$('#mel').show();
		$('#cj').hide();
		$('#kalila').hide();
		$('#tarin').hide();
	});

	$('body').on('click', '#kalila-tab', function(){
		$('#kalila').show();
		$('#cj').hide();
		$('#mel').hide();
		$('#tarin').hide();
	});

	$('body').on('click', '#tarin-tab', function(){
		$('#tarin').show();
		$('#cj').hide();
		$('#kalila').hide();
		$('#mel').hide();
	});
});