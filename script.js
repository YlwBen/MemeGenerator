const img =  document.querySelectorAll("img"); //Selectionne les images de la page.
console.log(img);

for (let i = 0; i < img.length; i++) { // Tant que i < "nombred'images" alors i devient i+1.

  img[i].addEventListener("click", function(){ // Dès qu'on click on lance la fonction.

  var chemin = img[i].src;
 console.log(chemin);
   document.querySelector("#contMeme").innerHTML = `
   <img class="img" src="${chemin}">
   `;
    })
};


const textButton = document.querySelector("#textButton");
const textTop = document.querySelector("#textTop").value;
const textBottom = document.querySelector("#textBottom").value;

console.log(textButton);
console.log(textTop);

textButton.addEventListener("click", function(){
    console.log(textTop);
    console.log(textBottom);
})
