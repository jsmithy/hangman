<?php

$im = imagecreate(200, 200) or die("something happened");
$text_color = imagecolorallocate($im, 44, 249, 243);
imagepng($im, "testimage.png");

?>
<img src="test.php">


