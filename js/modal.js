function getSizes(im,obj)
{
		var x_axis = obj.x1;
		var x2_axis = obj.x2;
		var y_axis = obj.y1;
		var y2_axis = obj.y2;
		var thumb_width = obj.width;
		var thumb_height = obj.height;
		if(thumb_width > 0)
			{
				if(confirm("Do you want to save image..!"))
					{
						$.ajax({
							type:"GET",
							url:"/progs/upload_ava.php?t=ajax&img="+$("#image_name").val()+"&w="+thumb_width+"&h="+thumb_height+"&x1="+x_axis+"&y1="+y_axis,
							cache:false,
							success:function(rsponse)
								{
								 $("#cropimage").hide();
								    $("#thumbs").html("");
									$("#thumbs").html("<img src='users/photo/"+rsponse+"' />");
								}
						});
					}
			}
		else
			alert("Please select portion..!");
	}

$(document).ready(function() {
	$('#page_addPhoto').click( function(event){
		event.preventDefault();
		$('#page_add_avatar_modal_overlay').fadeIn(400, 
		 	function(){
				$('#page_add_avatar_modal') 
					.css('display', 'block')
					.animate({opacity: 1, top: '50%'}, 200);
		});
	});
	
	$('#page_add_avatar_modal_close, #page_add_avatar_modal_overlay').click( function(){
		$('#page_add_avatar_modal')
			.animate({opacity: 0, top: '45%'}, 200,
				function(){
					$(this).css('display', 'none');
					$('#page_add_avatar_modal_overlay').fadeOut(400);
				}
			);
	});

	
});