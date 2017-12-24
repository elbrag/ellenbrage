var menuicon = document.getElementById('menu-symb');

function openMenu(x){

  x.classList.toggle("change");

  var menu = document.querySelector('.main-menu');

  if (menu.style.display == "block") {
    menu.style.display = "none";
  } else  {
    menu.style.display = "block";
  }

};


var checkinput = document.querySelector('.checkinput');
var eng_lang = document.querySelector('.lang-item-en');
var sve_lang = document.querySelector('.lang-item-sv').children;

function checklang() {
  if (checkinput.checked) {
    sve_lang.click();
  }
}
