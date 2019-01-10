var allumette = document.querySelector('#allumette img');
var nbAlumettes = Math.floor(Math.random() * 20) + 15;
var container = document.getElementById("container-allumette")
var nbClic = 0;
var min = 1;
var max = 4;


console.log(nbAlumettes);


//==============AFFICHAGE======================//

function afficheAllumettes(pNum) {
	var nbImage = pNum;
	var margeLeft = 15;
	

	for (i = 0; i < nbImage; i++) {
		
		var clone = allumette.cloneNode(true);
		clone.id = 'allu'+ '_' + i;
		
		clone.style.left = margeLeft + "px";
		clone.style.right = margeLeft + "px";
		
		var newAllumette = allumette.appendChild(clone);
		
		container.appendChild (clone);
		

		margeLeft += 15;
		
	}
}

//==============ROBOT======================//



function robot(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
var lastNumero = numero;
  var nbAlumettesRobot = Math.floor(Math.random() * (max - min)) + min;
	console.log(nbAlumettesRobot);
	
	while(i !== nbAlumettesRobot){	
		var allumetteClic = allumetteClic = document.querySelector("#allu_" + lastNumero-1);
		allumetteClic.style.opacity = '0';
	}
	
}


//==============CLIC======================//

container.onclick = function () {
	
	var numero = nbAlumettes;
	nbClic++;
	var tourRobot = false;
	
	if(nbClic < 4){	
		numero = numero - nbClic;
		var allumetteClic = document.querySelector("#allu_" + numero);
		allumetteClic.style.opacity = '0';
		
	}else if(nbClic === 3){
		return numero;
	}
}


//if (tourRobot === true){
//	robot(min, max);
//}


afficheAllumettes(nbAlumettes);








