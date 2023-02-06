const resetButton =document.querySelector(".btn")
const result = document.querySelector("#result");
function pokemon() {
    let score = 0;
    let total = 5;
    let reponse = [
      "B",
      "B", 
      "A",
      "A",
      "A",
    ];
    
    for (let i = 0; i < total; i++) {
      let reponseValide = document.getElementsByName("Q" + (i + 1));
      let couleur = document.getElementById(i)
      for (let j = 0; j < reponseValide.length; j++) {
        if (reponseValide[j].checked && reponseValide[j].value === reponse[i]) {
          score++;
          couleur.style.background = "green";
          break;
        }
        else{
          couleur.style.background = "red";
        }
      }
    }
    
    if (score === total) {
        result.innerHTML = "🙂 Félicitations, vous avez obtenu " + score + " sur " + total + " ! Toutes les réponses sont correctes. 🙂";
    } else {
        result.innerHTML = "😠 Désolé, vous avez seulement obtenu " + score + " sur " + total + ". Il y a une ou plusieurs réponses incorrectes.😠";
    }
  
  resetButton.addEventListener("click", function() {
    for (let i = 0; i < total; i++) {
      let couleur = document.getElementById(i);
      couleur.style.background = "";
      let reponseValide = document.getElementsByName("Q" + (i + 1));
      for (let j = 0; j < reponseValide.length; j++) {
        reponseValide[j].checked = false;
      }
    }
    result.innerHTML = "";
    score = 0;
  });
}