<?php 

$image=imageCreate(150,50); 
$col=ImageColorAllocate($image,255,255,0);
$col2=ImageColorAllocate($image,0,0,0);
$x1=0;
$y1=0; 
$x2=100;
$y2=30;

imageFilledRectangle($image,$x1,$y1,$x2,$y2,$col);
imageString($image,15,50,5,"Button",$col2);

Header ("Content-type: image/jpeg");
ImageJPEG ($image);
ImageDestroy($image);

?>