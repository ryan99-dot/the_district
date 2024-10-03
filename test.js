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


/*let op = document.getElementById("open");
let des = document.getElementById("des_com");
let cl = document.getElementById("close");

console.log (op)
console.log (des)
console.log(cl)

op.addEventListener("click", openchevron)
cl.addEventListener("click", closechevron)

function openchevron(){
  op.style.display = "none"
  des.style.display = "block"
  cl.style.display = "block"
}

function closechevron(){
  op.style.display = "block"
  des.style.display = "none"
  cl.style.display = "none"
}*/

let op = document.getElementsByClassName("open")
let des = document.getElementsByClassName("des_com")
let cl = document.getElementsByClassName("close")

for (let i = 0; i < des.length; i++) {
  op[i].addEventListener("click", function() {
    openchevron(i);
  });
  cl[i].addEventListener("click", function() {
    closechevron(i);
  });
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
