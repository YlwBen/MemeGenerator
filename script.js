const img =  document.querySelectorAll("img"); //Selectionne les images de la page.

for (let i = 0; i < img.length; i++) { // Tant que i < "nombred'images" alors i devient i+1.

  img[i].addEventListener("click", function(){ // Dès qu'on click on lance la fonction.

   const chemin = img[i].src;
   document.querySelector("#imgAttente").src = chemin;
    })
};

function textTop(){
    const textUp = document.querySelector("#textTop").value;
    document.querySelector("#centeredTop").innerHTML = textUp;
};

function textBottom(){
    const textBottom = document.querySelector("#textBottom").value;
    document.querySelector("#centeredBottom").innerHTML = textBottom;
};
