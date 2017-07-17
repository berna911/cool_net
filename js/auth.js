$(document).ready(function(){
	$("#auth_but").click(function(){
		var login = $("#auth_login").val();
		var pass = $("#auth_pass").val();
		$.ajax({
				type: "POST",
				url: "progs/auth.php",
				data: "login="+login+"&pass="+pass,
				dataType: "html",
				cache: false,
				async: false,
				success: function(data){
					window.location.reload();
				}
		});
	});

	$('html').keydown(function(eventObject){
    if (event.keyCode == 13) {
        var login = $("#auth_login").val();
		var pass = $("#auth_pass").val();
		$.ajax({
				type: "POST",
				url: "progs/auth.php",
				data: "login="+login+"&pass="+pass,
				dataType: "html",
				cache: false,
				async: false,
				success: function(data){
					window.location.reload();
				}
		});
    }
});
});