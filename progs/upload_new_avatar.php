<?php
	$folder = "../img/crop/";
	$orig_w = 150;

		$imageFile = $_FILES['file-0']['tmp_name'];
		$filename = basename($_FILES['file-0']['name']);

		list($width, $height ) = getimagesize($imageFile);

		$src = imagecreatefromjpeg($imageFile);
		$orig_h = ($height/$width)*$orig_w;

		$tmp = imagecreatetruecolor($orig_w, $orig_h);
		imagecopyresampled($tmp,$src,0,0,0,0,$orig_w, $orig_h,$width,$height);
		imagejpeg($tmp, $folder.$_COOKIE['uid'].'-'.$filename,100);

		imagedestroy($tmp);
		imagedestroy($src);

		$filename = urlencode($filename);
		
		echo "filename=".$_COOKIE['uid']."-".$filename."&height=$orig_h";
?>