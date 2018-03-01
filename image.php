<?php

  header('Content-type: image/jpeg');

  $image = imagecreatefromjpeg('img/meme.jpg');
  $white = imagecolorallocate($image, 255, 255, 255);

  $font_path = 'font/arial.ttf';
  $text = $_POST['text'];
  imagettftext($image, 25, 0, 75, 300, $white, $font_path, $text);
  imagejpeg($image);

?>
