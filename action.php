<?php
    include('controleur.php');

    error_log("coucou je passe ici\n", 3, "log/test.log"); // Permet de voir les erreur dans le terminal (pour du php)
    // var_dump($_POST);
    $url_complet  = $_POST['image'];
    error_log($_POST['image'], 3, "log/test.log");

    $url = strstr($url_complet, "img"); // Depuis PHP 5.3.0
    var_dump($url);

     //Set the Content Type
     // header('Content-type: image/jpeg');

     // Create Image From Existing File
     $jpg_image = imagecreatefromjpeg($url);

     // // Allocate A Color For The Text
     // $white = imagecolorallocate($jpg_image, 255, 255, 255);


     // // Set Path to Font File
     // $font_path = "Arial.ttf";
     $font = "/usr/share/fonts/truetype/freefont/FreeSerif.ttf";


     // // Set Text to Be Printed On Image
     $textTop = $_POST['textTop'];
     var_dump($textTop);

     $textBottom = $_POST['textBottom'];
     var_dump($textBottom);


     // // Print Text On Image
     $white = imagecolorallocate($jpg_image, 255, 255, 255);
     imagettftext($jpg_image, 25, 0, 75, 300, $white, $font, $textTop);

     echo '<img class="img" src="'.$url.'">';

     // // Send Image to Browser
     // //imagejpeg($jpg_image);
     //
     // // Clear Memory
     // imagedestroy($jpg_image);


?>
