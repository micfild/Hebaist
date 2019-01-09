var appareil = document.getElementById('appareil');
var lunettes = document.getElementById('lunettes');
var loupe = document.getElementById('loupe');
var crayon = document.getElementById('crayon');
var logo = document.querySelector('#logo img');
var bloc = document.getElementById('bloc');




document.getElementById('valide').onclick = function() {
  
    
    appareil.classList.add('horizTranslateR');
    lunettes.classList.add('horizTranslateR');
    loupe.classList.add('horizTranslateL');
    crayon.classList.add('horizTranslateR');
    logo.style.width = ('300px');
    logo.style.marginLeft = ('-80px');
    bloc.style.width = ('1350px');
    bloc.style.height = ('759px');
    bloc.style.marginLeft = ('-120px');
    bloc.style.marginTop = ('-130px');
    
};