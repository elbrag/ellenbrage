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

//
// var checkinput = document.querySelector('.checkinput');
// var eng_lang = document.getElementById('en');
// var sve_lang = document.getElementById('sv');
// var switchblock = document.getElementById('switch_block');
//
// function changeLang(x) {
//
// switchblock.style.left = '50%';
//
// }
//
//
// $("input[type=checkbox]").change(function() {
//
//     if (checkinput.checked) {
//       sve_lang.click();
//     } else {
//       eng_lang.click();
//     }
//
// });


// function checklang(x) {
//
//


  // var sve = false;
  // var eng = true;
  //
  // if (checkinput.checked) {
  //
  //     if (eng = true) {
  //       sve_lang.click();
  //       sve = true;
  //     }
  //
  //     if (sve = true) {
  //       eng_lang.click();
  //       eng = true;
  //     }
  //   }

  // }
