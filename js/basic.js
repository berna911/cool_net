$(document).ready(function(){
	$("#page_info_more").click(function(){
		$("#page_info_unshow").slideToggle(300);
	});

	$("#my_page_logout").click(function(){
		$.ajax({
			type: "POST",
			url: "/progs/logout.php",
			dataType: "html",
			asynch: false,
			cache: false,
			success: function(data)
			{
				window.location.reload();
			}
		});
	});

	$("#page_add_wall_submit").click(function(){

		var text = $("#page_add_wall_textarea").val();

		$.ajax({
			type: "POST",
			url: "/progs/wall_add.php",
			data: "text="+text,
			dataType: "html",
			asynch: false,
			cache: false,
			success: function(data)
			{
				if(data == "OK")
				    window.location.reload();
			}
		});
	});

		$("#page_add_wall_textarea").focus(function(){
		$(this).attr("rows","5");
		$("#page_add_wall_hide").css("display", "block");
	});

	$("#page_add_wall_textarea").focusout(function(){
		if($("#page_add_wall_submit").click())
		$(this).attr("rows","1");
		$("#page_add_wall_hide").css("display", "none");
	});

	$("#messages_new_message_textarea").keydown(function(eventObject){
		if( $("#messages_new_message_textarea").val() == "" )
	{
		$("#messages_new_message_button_li").css("display", "none");
	}
	else
	{
		$("#messages_new_message_button_li").css("display", "block");
	}

	//if (event.keyCode == 13) {}	
	});

	/*if( $("#messages_new_message_textarea").val() == "" )
	{
		$("#messages_new_message_button_li").css("display", "none");
	}
	else
	{
		$("#messages_new_message_button_li").css("display", "block");
	}*/

	$("#messages_new_message_button_li").click(function(){

		var text = $("#messages_new_message_textarea").val();
		var id = $("#messages_new_message_button_li").attr("idd");

		$.ajax({
			type: "POST",
			url: "/progs/messages_add.php",
			data: {id: id, text: text},
			dataType: "html",
			cache: false,
			asynch: false,
			success: function(data){
				if(data == "OK")
				{
					window.location.reload();
				}
			}
		});
	});

});