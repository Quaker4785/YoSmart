$(document).ready(function(){
	$('#home').click(function(){
		load_views('YS-pages/views/home.php', '#stakeholderarea');
	});
	$('#about').click(function(){
		load_views('YS-pages/views/aboutus.php', '#stakeholderarea');
	});
	$('#services').click(function(){
		load_views('YS-pages/views/services.php', '#stakeholderarea');
	});
	
});
