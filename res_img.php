<?php 
 
$nom_image = "http://transformice.com/images/x_deadmeat/x_interfaces/ressources/" . $_GET['id'] . ".png";
$inf = "";
$sup = "";
if (isset($_GET['inf']))
{
	$inf = $_GET['inf'];
}
if (isset($_GET['sup']))
{
	$sup = $_GET['sup'];
}
 
header ("Content-type: image/png");
$image = imagecreate(26, 34);
$imagesrc = imagecreatefrompng($nom_image);
imagecolorallocate($image, 255, 255, 255);
imagecopyresampled($image, $imagesrc, 0, 0, 0, 0, 26, 26, 26, 26);
$color = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 2, 1, 22, $inf, $color);
imagestring($image, 2, 14, 22, $sup, $color);
imagepng($image);
?> 
