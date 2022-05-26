$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
    // invoke the carousel
        $('#myCarousel').carousel();
    
    // scroll slides on mouse scroll 
    /* $('#myCarousel').bind('mousewheel DOMMouseScroll', function(e){
    
            if(e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
                $(this).carousel('prev');
                
                
            }
            else{
                $(this).carousel('next');
                
            }
        }); */
    
    //scroll slides on swipe for touch enabled devices  
         $("#myCarousel").on("touchstart", function(event){
     
            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){
    
            var yMove = event.originalEvent.touches[0].pageY;
            if( Math.floor(yClick - yMove) > 1 ){
                $(".carousel").carousel('next');
            }
            else if( Math.floor(yClick - yMove) < -1 ){
                $(".carousel").carousel('prev');
            }
        });
        $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
        });
    });
        
    });


console.clear();

const app = (() => {
	let body;
	let menu;
	let menuItems;
	
	const init = () => {
		body = document.querySelector('body');
		menu = document.querySelector('.menu-icon');
		menuItems = document.querySelectorAll('.nav__list-item');

		applyListeners();
	}
	
	const applyListeners = () => {
        if(window.innerWidth <= '768'){
		    menu.addEventListener('click', () => toggleClass(body, 'mob-active'));
        } else{
		    menu.addEventListener('click', () => toggleClass(body, 'nav-active'));
        }
	}
	
	const toggleClass = (element, stringClass) => {
        if(element.classList.contains(stringClass)){
            element.classList.remove(stringClass);
        } else {
            element.classList.add(stringClass);
        }
	}
	
	init();
})();

window.onscroll = function() {myFunction()};
// Get the navbar
var navbar = document.getElementById("navbar");
var menu = document.getElementById("menu");
// Get the offset position of the navbar
var sticky = navbar.offsetTop;
function myFunction() {
    if (window.pageYOffset > sticky && window.innerWidth > '768') {
      navbar.classList.add("nav-active");
      menu.classList.add("menu-hidden");
    } else {
      navbar.classList.remove("nav-active");
      menu.classList.remove("menu-hidden");
    }
  } 


    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function showdropdown(id) {
    var dropdown = document.getElementById(id);
    if (dropdown.style.display != "none"){
        dropdown.style.display = "none";
    } else{
        dropdown.style.display = "flex";
    }
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}


/* FAQ Panel */
$('.panel-title > a').click(function() {
    $(this).find('i').toggleClass('fa-chevron-down fa-chevron-up')
           .closest('panel').siblings('panel')
           .find('i')
           .removeClass('fa-chevron-up').addClass('fa-chevron-down');
});



  
  

  
  
    