let menu_div = document.querySelector(".menu");
let logoName_div = document.getElementById('logo-name');
let logo_a = document.querySelector("a.logo");
let searchContainer_div = document.querySelector(".search-container");
let selectRef_a = document.querySelector(".select-ref");
let dropDown_span = document.querySelector(".dropdown");
let dropDownContent_div = document.querySelector("dropdown-content");
let sandwichMenu_div = document.querySelector("div.sandwich-menu");
let login_div = document.getElementById("login");

function revealLogo(logos) {
  logoName_div.innerHTML = `${logos}`;
}

function myFunction(x) {
  x.classList.toggle("change");
}

function openNav() {
  document.getElementById("myNav").style.height = "100%";
  document.getElementById("myNav").style.display = "block";
  document.getElementById("myNav").style.transition = "all 0.5s ease";
  sandwichMenu_div.addEventListener('click', () => closeNav());
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
  document.getElementById("myNav").style.transition = "all 0.5s ease";
  sandwichMenu_div.addEventListener('click', () => openNav());
}

function loginClose() {
  login_div.style.display = "none";
}

function loginOpen() {
  login_div.style.display = "block";
}

function main() {
  logoName_div.addEventListener('mouseover', () => revealLogo("U Help Me"));
  logoName_div.addEventListener('mouseout', () => revealLogo("UHM"));
  sandwichMenu_div.addEventListener('click', () => openNav());
}
main();
