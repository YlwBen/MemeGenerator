<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MemeGenerator</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>

<<<<<<< HEAD

                <h1 class="text-center">MemeGenerator</h1>


              <section>
                <div class="container">
                    <div class="col-12 text-center" id="contMeme">
                        <img class="img" src="img/meme.jpg" alt="">
                    </div>

                    <div class="inputs col-12 text-center">
                      <form method="post" action="controleur.php">

                          <input placeholder='text top' name='text' id='text' maxlength='20' required>
                            <span id='text_top'></span>

                      <input placeholder='text down' name='text' id='text' required>
                      <span id='text_down'></span>

                      <input type='submit' value='Valider' id='bouton_envoi'>
                   </form>
                 </div>
                </div>
             </section>

                <script>
                    var formValid = document.getElementById('bouton_envoi');
                    var text_top = document.getElementById('text_top');
                    var text_down = document.getElementById('text_down');
                    var textvalid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;


                    formValid.addEventListener('click', validation);

                    function validation(event){
                        //Si le champ est vide
                        if (text.validity.valueMissing){
                            event.preventDefault();
                            text_top.style.color = 'red';
                            text_top.textContent='champ vide';
                            text_down.style.color = 'red';
                            text_down.textContent='champ vide';
                          }
                      }
                </script>

=======
      <section>
        <div class="container">
            <div class="col-12 text-center" id="contMeme">
                <img class="img" src="img/img1.jpg" alt="">
            </div>
            <div class="inputs col-12 text-center">
                <input id="textTop" type="text" method="get">
                <input id="textBottom" type="text" method="get">
                <button type="button" id="textButton">Click</button>
            </div>
        </div>
     </section>
>>>>>>> f1839373b081d120259f2a66e06547b20d90f554

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



    <script type="text/javascript" src="script.js"></script>
    </body>
</html>
