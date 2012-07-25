<?php
// Create image instances
$src = imagecreatefromjpeg('bar.jpg');
$dest = imagecreatetruecolor(640, 480);

// Copy
imagecopy($dest, $src, 0, 0, 100, 200, 640, 480);

// Output and free from memory
header('Content-Type: image/jpg');
imagejpeg($dest);

imagedestroy($dest);
imagedestroy($src);
?>