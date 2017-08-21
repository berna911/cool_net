function explode( delimiter, string ) {	// Split a string by string
	// 
	// +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	// +   improved by: kenneth
	// +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)

	var emptyArray = { 0: '' };

	if ( arguments.length != 2
		|| typeof arguments[0] == 'undefined'
		|| typeof arguments[1] == 'undefined' )
	{
		return null;
	}

	if ( delimiter === ''
		|| delimiter === false
		|| delimiter === null )
	{
		return false;
	}

	if ( typeof delimiter == 'function'
		|| typeof delimiter == 'object'
		|| typeof string == 'function'
		|| typeof string == 'object' )
	{
		return emptyArray;
	}

	if ( delimiter === true ) {
		delimiter = '1';
	}

	return string.toString().split ( delimiter.toString() );
}


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

	$("#submit_new_avatar").click(function(){

		var data = new FormData();
		$.each($('#add_avatar_new_image')[0].files, function(i, file) {
    	data.append('file-'+i, file);
		});

		$.ajax({
    		url: '/progs/upload_new_avatar.php',
    		data: data,
    		cache: false,
    		contentType: false,
    		processData: false,
    		type: 'POST',
    		success: function(data){
        		var dat = explode('=', data);
        		var filenamee = explode('&', dat[1]);
        		var filename = filenamee[0];
        		var height = dat[2];
        		/*alert(filename);
        		alert(height);*/

        		$.ajax({
					type: "POST",
					url: "/include/cropping.php",
					data: "filename="+filename+"&height="+height,
					dataType: "html",
					asynch: false,
					cache: false,
					success: function(data)
					{
						$("#page_add_avatar_modal_form").html(data);
					}
		});
    		}
		});
	});

	$(".smile").click(function(){
		var smile = $(this).attr('alt');
		var text = $.trim($("#messages_new_message_textarea").val());
		$("#messages_new_message_textarea").focus().val(text+' '+smile+' ');
	});

});