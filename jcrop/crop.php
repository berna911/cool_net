<?php
	$folder = 'img/';
	$filename = $_GET['filename'];
	$orig_w = 500;
	$orig_h = $_GET['height'];

	$targ_w = 120;
	$targ_h = 100;

	$ratio = $targ_w / $targ_h;

	if( isset($_POST['submit']) )
	{
		$src = imagecreatefromjpeg($folder.$filename);

		$tmp = imagecreatetruecolor($targ_w, $targ_h);
		imagecopyresampled($tmp,$src,0,0,$_POST['x'],$_POST['y'],$targ_w, $targ_h,$_POST['w'],$_POST['h']);
		imagejpeg($tmp, $folder.'t_'.$filename,100);

		imagedestroy($tmp);
		imagedestroy($src);

		echo "<h1>Saved</h1><img src=\"$folder/t_$filename\">";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cropping</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.Jcrop.js"></script>
	<link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />
	<script type="text/javascript">
	  $(function(){
	  	$("#cropbox").Jcrop({
	  		aspectRatio: <?php echo $ratio?>,
	  		setSelect: [0,0,<?php echo $orig_w.','.$orig_h;?>],
	  		onSelect: updateCoords,
	  		onChange: updateCoords
	  	});
	  });

	  function updateCoords(c)
	  {
	  	showPreview(c);
	  	$("#x").val(c.x);
	  	$("#y").val(c.y);
	  	$("#w").val(c.w);
	  	$("#h").val(c.h);
	  }

	  function showPreview(coords)
	  {
	  	var rx = <?php echo $targ_w; ?> / coords.w;
	  	var ry = <?php echo $targ_h; ?> / coords.h;

	  	$("#preview img").css({
	  		width: Math.round(rx*<?php echo $orig_w; ?>)+'px',
	  		height: Math.round(ry*<?php echo $orig_h; ?>)+'px',
	  		marginLeft: '-'+ Math.round(rx*coords.x)+'px',
	  		marginTop: '-' + Math.round(ry*coords.y)+'px',
	  	});
	  }
	</script>
	<style type="text/css">	
		#preview
		{
			width: <?php echo $targ_w; ?>px;
			height: <?php echo $targ_h; ?>px;
			overflow: hidden;
		}
	</style>
</head>
<body>
	<h1>Cropping img</h1>

	<table>
		<tr>
			<td>
				<img src="<?php echo $folder.$filename ?>" id="cropbox" alt="img not found" />
			</td>
			<td>
				Thumb preview
				<div id="preview">
					<img src="<?php echo $folder.$filename ?>" id="previewImg" alt="thumb" />
				</div>
			</td>
		</tr>
	</table>

	<form action="<?php echo $SERVER['REQUEST_URI'] ?>" method="post">
		<p>
			<input type="text" id="x" name="x" />
			<input type="text" id="y" name="y" />
			<input type="text" id="w" name="w" />
			<input type="text" id="h" name="h" />
			<input type="submit" id="submit" name="submit" value="Crop image" />
		</p>
	</form>
</body>
</html>