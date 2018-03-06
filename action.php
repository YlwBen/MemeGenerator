<?php
    include('controleur.php');
    include('header.php');

    $url_complet  = $_POST['image'];
    $url = strstr($url_complet, "img"); // Depuis PHP 5.3.0
    $image = new Imagick($url);
    $image->setResolution( 300, 300 );
    $image->writeImage('/var/www/MemeGenerator/mypdf6666.jpeg');
    //$im = new Imagick($url);
    //header('Content-type: image/jpeg');

    //$image = new Imagick($url);

// If 0 is provided as a width or height parameter,
// aspect ratio is maintained

    var_dump($image);
    echo '<img src="'.$image.'" />';


    include('footer.php');

?>
