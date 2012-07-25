<html>
<head><title>Yaniv Training</title></head>
<body bgcolor="#99CCFF">
<?php
class Image {
    
    // class atributes (variables)
    private $image;
    private $width;
    private $height;
    private $mimetype;
    
    function __construct($filename) {
        
        // read the image file to a binary buffer
        $fp = fopen($filename, 'rb') or die("Image '$filename' not found!");
        $buf = '';
        while(!feof($fp))
            $buf .= fgets($fp, 4096);
        
        // create image and assign it to our variable
        $this->image = imagecreatefromstring($buf);
        
        // extract image information
        $info = getimagesize($filename);
        $this->width = $info[0];
        $this->height = $info[1];
        $this->mimetype = $info['mime'];
    }
	
	function show () {
		echo "Width: " . $this->width . "<br />";
		echo "Height: " . $this->height . "<br />";
		echo "Mimetype: " . $this->mimetype . "<br />";
	}
	
	function copy_image () {
		// Create image instances
		$src = $this->image;
		$dest = imagecreatetruecolor(80, 40);

		// Copy
		imagecopy($dest, $src, 0, 0, 20, 13, 80, 40);

		// Output and free from memory
		header('Content-Type: image/jpg');
		imagejpeg($dest);
//echo "Image: " . $this->image;
		
		imagedestroy($dest);
		//imagedestroy($src);
	}
	
}
$image = new Image("bar.jpg"); // If everything went well we have now read the image
$image->show();
//$image->copy_image();
?>
</body>
</html>