/**var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

function openNav() {
  sidenav.classList.add("active");
}

function closeNav() {
  sidenav.classList.remove("active");
}**/


/**let op = document.getElementById("open");
let des = document.getElementById("des");
let cl = document.getElementById("close")**/


let op = document.getElementsByClassName("open")
let des = document.getElementsByClassName("des_com")
let cl = document.getElementsByClassName("close")

console.log(op)
console.log(des)
console.log(cl)



for (i = 0; i < des.length; i++
) {
  op[i].onclick = openchevron(i)
  cl[i].onclick = closechevron(i)
}

function openchevron(n) {
  des[n].style.display = "block"
  op[n].style.display = "none"
  cl[n].style.display = "block"
}

function closechevron(n) {
  des[n].style.display = "none"
  op[n].style.display = "block"
  cl[n].style.display = "none"
}






