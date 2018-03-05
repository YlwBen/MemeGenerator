<?php
    include('controleur.php');
    $url_test = "test.jpeg";
    var_dump($_POST);
    $url_complet  = $_POST['image'];
    $url = strstr($url_complet, "img"); // Depuis PHP 5.3.0
    echo $url;

    //Set the Content Type
     header('Content-type: image/jpeg');

     // Create Image From Existing File
     $jpg_image = imagecreatefromjpeg($url);

     // Allocate A Color For The Text
     $white = imagecolorallocate($jpg_image, 255, 255, 255);

     // Set Path to Font File
     $font_path = "Arial.ttf";
     $font = "/usr/share/fonts/Arial.ttf";

     // Set Text to Be Printed On Image
     $text = "This is a sunset!";

     // Print Text On Image
     imagettftext($jpg_image, 25, 0, 75, 300, $white, $font, $text);

     // Send Image to Browser
     imagejpeg($jpg_image);

     // Clear Memory
     imagedestroy($jpg_image);


?>
