<?php
	$folder = "img/";
	$orig_w = 500;

	if( isset($_POST['submit']) )
	{
		$imageFile = $_FILES['image']['tmp_name'];
		$filename = basename($_FILES['image']['name']);

		list($width, $height ) = getimagesize($imageFile);

		$src = imagecreatefromjpeg($imageFile);
		$orig_h = ($height/$width)*$orig_w;

		$tmp = imagecreatetruecolor($orig_w, $orig_h);
		imagecopyresampled($tmp,$src,0,0,0,0,$orig_w, $orig_h,$width,$height);
		imagejpeg($tmp, $folder.$filename,100);

		imagedestroy($tmp);
		imagedestroy($src);

		$filename = urlencode($filename);
		header("Location: crop.php?filename=$filename&height=$orig_h");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cropping</title>
</head>
<body>
	<h1>Upload from</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
		<p>
			<label for="image">Image:</label>
			<input type="file" name="image" id="image" />
		</p>
		<p>
			<input type="submit" name="submit" value="Upload!" />
		</p>
	</form>
</body>
</html>