<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0,0,0);
$gray = imagecolorallocate($image, 100,100,100);

imagettftext($image, 32, 0, 320, 250, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Weder Monteiro");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em ").date("d/m/Y"), $gray);

header("Content-Type: image/jpeg");

//imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 80);
imagejpeg($image);

imagedestroy($image);

?>