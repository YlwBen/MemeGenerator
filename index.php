<IMG SRC="action.php">
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MemeGenerator</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="lienvers/html2canvas.js"></script>
        <script type="text/javascript" src="html2canvas.js"></script>
    </head>

    <body>


            <h1 class="text-center">MemeGenerator</h1>


        <section>
            <div class="container">
                <form method="post" action="action.php">
                    <div class="col-12 text-center" id="contMeme">
                        <img class="img" id="imgAttente" src="img/img1.jpg" name='image'>
                        <div class="textMeme" id="centeredTop"></div>
                        <div class="textMeme" id="centeredBottom"></div>
                    </div>
                    <div class="inputs col-12 text-center">
                        <input type="text" name="image" value="img/img1.jpg" id="image">
                        <input placeholder='text top' name='textTop' id='textTop' maxlength='18' required onkeyup="txtUp()">
                        <input placeholder='text bottom' name='textBottom' id='textBottom' maxlength='18' required onkeyup="txtDown()">
                        <input type='submit' value='Valider' id='bouton_envoi'>
                    </div>
                </form>
            </div>
        </section>


    <section>
        <div class="container">
         <div class="row">
          <div class="icone col-2 offset-1">
            <img class="icone" src="img/meme.jpg" alt="">
            </div>
          <div class="icone col-2">
            <img class="icone " src="img/meme_un.jpg" alt="">
            </div>
            <div class="icone col-2">
                <img class="icone" src="img/meme_deux.jpg" alt="">
            </div>
            <div class="icone col-2">
                <img class="icone" src="img/meme_trois.jpg" alt="">
            </div>
            <div class="icone col-2">
                <img class="icone" src="img/meme_quatre.jpg" alt="">
            </div>
           </div>
          </div>
    </section>


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    </body>
</html>
