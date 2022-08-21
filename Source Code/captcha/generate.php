<?php
session_start();
//Calling this function we have change the php file to an image.
header('Content-type: image/jpeg');
$text = $_SESSION['secure'];
$font_size = 25;

$image_width = 130;
$image_height = 40;

//$font = dirname(__FILE__) . '/font.ttf'; 

$image = imagecreate($image_width, $image_height);
imagecolorallocate($image, 0, 255, 255); //setting white background.

$text_color = imagecolorallocate($image, 250, 0, 0); //text color

for($x=1; $x<=20; $x++)
{
	$x1 = rand(1, 100);
	$y1 = rand(1, 100);
	$x2 = rand(1, 100);
	$y2 = rand(1, 100);
	
	imageline($image, $x1, $y1, $x2, $y2, $text_color);
}

imagettftext($image, $font_size, 0, 15, 30, $text_color, 'VLADIMIR.TTF', $text); // imagettftext(image, fontsize, angle, x, y)

imagejpeg($image);

?>