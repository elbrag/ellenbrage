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
  var pos = 0;
  var pos2 = -500;
  var id = setInterval(frame, 0);
  function frame() {
    if (pos == 1000) {
      clearInterval(id);
    } else {
      pos+=5;
      pos2+=5;
      cur_theme.style.right = pos + 'px';
      next_theme.style.opacity = '1';
      if (pos2 < 0) {
        next_theme.style.right = pos2 + 'px';
      }
    }
  }
}
function slideprev(){
  var pos = 0;
  var pos2 = -500;
  var id = setInterval(frame, 0);
  function frame() {
    if (pos == 1000) {
      clearInterval(id);
    } else {
      pos+=5;
      pos2+=5;
      cur_theme.style.left = pos + 'px';
      prev_theme.style.opacity = '1';
      if (pos2 < 0) {
        prev_theme.style.left = pos2 + 'px';
      }
    }
  }
}
