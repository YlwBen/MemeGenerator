const img =  document.querySelectorAll("img"); //Selectionne les images de la page.

for (let i = 0; i < img.length; i++) { // Tant que i < "nombred'images" alors i devient i+1.

  img[i].addEventListener("click", function(){ // Dès qu'on click on lance la fonction.

   const chemin = img[i].src;
   document.querySelector("#imgAttente").src = chemin;
    })
};

function txtUp(){
    const textTop = document.querySelector("#textTop").value;
    document.querySelector("#centeredTop").innerHTML = textTop;
};

function txtDown(){
    const textBottom = document.querySelector("#textBottom").value;
    document.querySelector("#centeredBottom").innerHTML = textBottom;
};

var formValid = document.getElementById('bouton_envoi');

formValid.addEventListener('click', validation);

function validation(event){
    //Si le champ est vide
    if  text.validity.valueMissing){
        event.preventDefault();
        textTop.style.color = 'red';
        textTop.textContent='champ vide';
        textBottom.style.color = 'red';
        textBottom.textContent='champ vide';
    }else{
        return false;
    }
  };
