 $(document).ready(function(){

   var menu = document.querySelector('.main-menu');

      function windowSize() {
        windowWidth = window.innerWidth ? window.innerWidth : $(window).width();
        return windowWidth;
      }

      $(window).resize(function() {

            windowSize();

            if (windowSize() >= 640) {
              menu.style.display = 'block';
            } else {
              menu.style.display = 'none';
            }

      });

});



//hamburger menu

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

// $(document).ready(function(){
//         $("input:checkbox").change(function() {
//             if($(this).is(":checked")) {
//                 $.ajax({
//                     url: 'on_off.aspx',
//                     type: 'POST',
//                     data: { strID:$(this).attr("id"), strState:"1" }
//                 });
//             } else {
//                 $.ajax({
//                     url: 'on_off.aspx',
//                     type: 'POST',
//                     data: { strID:$(this).attr("id"), strState:"0" }
//                 });
//             }
//         });
//     });


/*slider*/


var cur_theme = document.getElementById('cur_theme');
var prev_theme = document.getElementById('prev_theme');
var next_theme = document.getElementById('next_theme');


function slidenext(){
  cur_theme.className = 'cur_theme1';
  next_theme.className = 'next_theme';
}
function slideprev(){
  cur_theme.className = 'cur_theme2';
  prev_theme.className = 'prev_theme';
}
