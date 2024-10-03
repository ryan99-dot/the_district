/*Activation des boutons pour les plats*/

let op = document.getElementsByClassName("open")
let des = document.getElementsByClassName("des_com")
let cl = document.getElementsByClassName("closed")
let pl = document.getElementsByClassName("plat")

for (let i = 0; i < des.length; i++) {
  op[i].addEventListener("click", function() {
    openchevron(i);
  });
  cl[i].addEventListener("click", function() {
    closechevron(i);
  });
  console.log(cl[i]);
}

function openchevron(n) {
  des[n].style.display = "flex"
  op[n].style.display = "none"
  cl[n].style.display = "block"
  pl[n].style.width = "95%"
}

function closechevron(n) {
  des[n].style.display = "none"
  op[n].style.display = "block"
  cl[n].style.display = "none"
    pl[n].style.width = "50%"
}


