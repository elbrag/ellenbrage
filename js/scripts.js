//if window width is changed, adjust the menu
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
              document.querySelector('body').style.overflow = 'auto';
            } else {
              menu.style.display = 'none';
            }

      });

});



//hamburger menu

var menuicon = document.getElementById('menu-symb');

function openMenu(x){

  // x.style.top + '1px';
  // x.style.top -= '1px';

  x.classList.toggle("change");

  var menu = document.querySelector('.main-menu');

  if (menu.style.display == "block") {
    menu.style.display = "none";
    document.querySelector('body').style.overflow = 'auto';
  } else  {
    menu.style.display = "block";
    document.querySelector('body').style.overflow = 'hidden';
  }

};

/*theme slider*/


var cur_theme = document.getElementById('cur_theme');
var prev_theme = document.getElementById('prev_theme');
var next_theme = document.getElementById('next_theme');


function slidenext(){
  var pos = 0;
  var pos2 = -700;
  var id = setInterval(frame, 0);
  function frame() {
    if (pos == 1000) {
      clearInterval(id);
    } else {
      pos+=10;
      pos2+=10;
      cur_theme.style.right = pos + 'px';
      next_theme.style.opacity = '1';
      if (pos2 < 0) {
        next_theme.style.right = (pos2+10) + 'px';
      }
    }
  }
}
function slideprev(){
  var pos = 0;
  var pos2 = -700;
  var id = setInterval(frame, 0);
  function frame() {
    if (pos == 1000) {
      clearInterval(id);
    } else {
      pos+=10;
      pos2+=10;
      cur_theme.style.left = pos + 'px';
      prev_theme.style.opacity = '1';
      if (pos2 < 0) {
        prev_theme.style.left = (pos2+10) + 'px';
      }
    }
  }
}

/*sorting the images into place (see function below for function call)
https://stackoverflow.com/questions/9778899/how-to-order-divs-by-id-in-javascript*/
function sortdivs(){
  var mylist = document.querySelector('.single_thumbs');
  var divs = mylist.getElementsByTagName('div');
  var listitems = [];
  for (i = 0; i < divs.length; i++) {
    listitems.push(divs.item(i));
  }
  listitems.sort(function(a,b) {
    var compA = a.getAttribute('id').toUpperCase();
    var compB = b.getAttribute('id').toUpperCase();
    return (compA < compB) ? -1 : (compA > compB) ? 1 : 0;
  })
  for (i = 0; i < listitems.length; i++) {
    mylist.appendChild(listitems[i]);
  }
}

//work:single: gallery function
var bigimage = document.querySelector('.single_image');
bigimage.classList.remove('single_image');
bigimage.className = 'single_big';

var $bigimage = $('.single_big');

$bigimage.parent().before($bigimage);
//this is only to move bigimage into a class, so that the prev/next controls can be absolutely positioned to it
$($bigimage).prependTo(".image_area");


function enlarge(x){
  var ensmall = document.querySelector('.single_big');
  ensmall.classList.remove('single_big');
  ensmall.className = 'single_image';

  $(ensmall).prependTo(".single_thumbs");

  var smallimage = document.getElementById(x);

  smallimage.className = 'single_big';
  var $bigimage = $('.single_big');

  $bigimage.parent().before($bigimage);
  //this is only to move bigimage into a class, so that the prev/next controls can be absolutely positioned to it
  $($bigimage).prependTo(".image_area");

  sortdivs();
}

function nextimage() {
  var children = document.querySelector(".single_thumbs").children.length + 1;
  var current = parseInt(document.querySelector('.single_big').id);
  var nextid = (current+1);

  if (nextid > children) {
    nextid = 1;
  }

  enlarge(nextid);
}

function previmage() {

  var children = document.querySelector(".single_thumbs").children.length + 1;
  var current = parseInt(document.querySelector('.single_big').id);
  var previd = (current-1);

  if (previd == 0) {
    previd = children;
  }

  enlarge(previd);
}
