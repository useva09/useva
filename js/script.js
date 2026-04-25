let i=0;
function slider(){
let slides=document.getElementsByClassName("slide");
for(let j=0;j<slides.length;j++){
slides[j].style.display="none";
}
i++;
if(i>slides.length){i=1;}
slides[i-1].style.display="block";
setTimeout(slider,3000);
}
window.onload=slider;