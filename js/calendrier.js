let maDate=new Date();
let jour=maDate.getDay();
let info=document.getElementById("info");
if(jour==1||jour==2||jour==4||jour==5){
    info.innerHTML="Nous sommes ouverts de 9h à 19h";
console.log("Nous sommes ouverts de 9h à 19h");
}
else if(jour==6){
    info.innerHTML="Nous sommes ouverts de 9h à 18h";
    console.log("Nous sommes ouverts de 9h à 18h");
}
else{
    info.innerHTML="Fermé aujourd'hui.";
    console.log("Fermé aujourd'hui");
}

let fleche=document.getElementById("flecheDuBas");
let carte=document.getElementById("infoSup");
console.log(carte);
fleche.addEventListener("click",function(){
carte.classList.toggle("carteBis");
console.log("ok");
});

let marker=document.getElementById("marker");
let map=document.getElementById("map");
let croix=document.getElementById("croix");
marker.addEventListener('click',function(){
map.classList.toggle("mapBis");
})
croix.addEventListener('click',function(){
    map.classList.remove('mapBis');
})