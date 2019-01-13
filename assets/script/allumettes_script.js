var jeu = new CL_jeu();
var nbAllumettes = Math.floor(Math.random() * 20) + 25;
var container = document.getElementById("container-allumettes");
var widthContainer = nbAllumettes*15;
var margeLeft = (700-widthContainer)/2;
container.style.left = margeLeft + "px";
var min = 1;
var max = 3;
var j = nbAllumettes-1;
var tourRobot = false;


console.log(nbAllumettes);
console.log(jeu.etat);

//==============CLASSES======================//
function CL_jeu() {
    this.etat ="initial;"
    this.tour="joueur";
    this.resultat="perd";
    this.gains=0;
}

//==============AFFICHAGE======================//

function afficheAllumettes(pNum) {
	var nbImage = pNum;

    for (i = 0; i < nbImage; i++) {
        var myAllumettes = new Image;
        myAllumettes.src = 'assets/pics/allumette.png';
        myAllumettes.id = 'allu'+ '_' + i;
        container.appendChild (myAllumettes);
        jouer();
    }
}

//==============JOUER======================//

function jouer() {
    if (jeu.etat == "initial") {
        if (jeu.tour == "joueur") {
            console.log("à votre tour !");

        }
    }
}
//==============TEMPS ATTENTE======================//

function disabled() {
    btOne.style.cursor = "default";
    btOne.disabled=true;
    btOne.style.display = "none";
    btTwo.style.cursor = "default";
    btTwo.style.disabled=true;
    btTwo.style.display = "none";
    btThree.style.cursor = "default";
    btThree.style.disabled=true;
    btThree.style.display = "none";
    setTimeout(wait, 2000);

}

function wait() {
    robot(min,max);
}

function activ() {
    btOne.style.cursor = "grab";
    btOne.disabled=false;
    btOne.style.display = "block";
    btTwo.style.cursor = "grab";
    btTwo.style.disabled=false;
    btTwo.style.display = "block";
    btThree.style.cursor = "grab";
    btThree.style.disabled=false;
    btThree.style.display = "block";
}

//==============ROBOT======================//
//==============ROBOT======================//
function robot(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);

  var nbAlumettesRobot = Math.floor(Math.random() * (max - min)) + min;

	console.log("allumette robot : " +nbAlumettesRobot);
	console.log("numéro allumette :" + j);

    for (i = 0; i < nbAlumettesRobot; i++) {
        var numAllu = document.querySelector("#allu_" + j);
        numAllu.classList.add('verticalTranslateT');
        numAllu.style.opacity = '0';
        j --;
    }
    setTimeout(activ, 2000);

}


//==============CLIC======================//

btOne.onclick = function () {
    var numAllu = document.querySelector("#allu_" + j);
    numAllu.classList.add('verticalTranslateB');
    numAllu.style.opacity = '0';
	j--;
    jeu.tour = "robot";
    disabled();


}

btTwo.onclick = function () {

    for (i = 0; i < 2; i++) {
        var numAllu = document.querySelector("#allu_" + j);
        numAllu.classList.add('verticalTranslateB');
        numAllu.style.opacity = '0';
        j --;
    }
    jeu.tour = "robot";
    disabled();

}

btThree.onclick = function () {

    for (i = 0; i < 3; i++) {
        var numAllu = document.querySelector("#allu_" + j);
        numAllu.classList.add('verticalTranslateB');
        numAllu.style.opacity = '0';
        j --;
    }
    jeu.tour = "robot";
    disabled();

}







afficheAllumettes(nbAllumettes);








