//Instauration des variables importés
// var div = document.getElementById('icon');
// var icons = div.getElementsByTagName('i');

var icones = document.querySelectorAll('.icon-content > i');
let input = document.querySelector('#iconValue');
for(let i = 0; i < icones.length; i++) {
    icones[i].addEventListener('click', function() {
        icones.forEach(element => {
            element.style.fontSize = '';
        });
        icones[i].style.fontSize = '';
        input.value = icones[i].className;
        icones[i].style.fontSize = '50px';
        console.log(input.value);
    })
}