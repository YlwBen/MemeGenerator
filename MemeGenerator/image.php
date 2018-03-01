<?php

  header('Content-type: image/jpeg');

  $image = imagecreatefromjpeg('img/meme.jpg');
  $white = imagecolorallocate($image, 255, 255, 255);

  $font_path = 'font/arial.ttf';
  $text = $_GET['text1']; // POUR LE FORM D'ALEXIS
  $text = $_GET['text2']; // POUR LE FORM D'ALEXIS
  imagettftext($image, 25, 0, 75, 300, $white, $font_path, $text);
  imagejpeg($image);

?>

<?php <img src="image.php?text=montexte" /> ?>
