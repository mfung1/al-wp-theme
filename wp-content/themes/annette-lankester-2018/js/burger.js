/*
 Burger Interaction
 ------------------

 This script will toggle the mobile menu on / off and apply effect to burger.

*/

const burger = document.querySelector('.nav_burger'),
      menu = document.querySelector('.nav_mob');

let viewable = false;
const toggleMenu = () => {
  viewable == true
  ?
  menu.style = "left: 0; transition: left .6s ease"
  :
  menu.style = {"left": menu.clientWidth, "transition": 'left .6s ease'};
}

const toggleButton = () => {
  if (viewable == false) {
   viewable = true;
   burger.children[0].style = "";
   burger.children[2].style = "";
   burger.children[1].style = "opacity: 0; transition: .3s ease;"
   burger.children[0].className = "rotate45deg";
   burger.children[2].className = "rotate-45deg";
  } else {
   viewable = false;
   burger.children[0].style = "transform: rotate(0deg);";
   burger.children[1].style = "opacity: 1; transition: .3s ease;"
   burger.children[2].style = "transform: rotate(0deg);";
  }
  toggleMenu();
}

burger.addEventListener('click', toggleButton);
burger.addEventListener('keypress', e => {
  if(e.keyCode == 32 || e.keyCode == 13 || e.charCode == 32 || e.charCode == 13) {
    toggleButton;
  }
})