var slideIndex = 0;
activarpestania();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}


$(document).ready(function(){
  var zindex = 10;
  
  $("div.card-title").click(function(e){
    e.preventDefault();

    var isShowing = false;
    if ($(this).parent().hasClass("show")) {
      isShowing = true
    }

    if ($("div.cards").hasClass("showing")) {
      // a card is already in view
      $("div.card.show")
        .removeClass("show");

      if (isShowing) {
        // this card was showing - reset the grid
        $("div.cards")
          .removeClass("showing");
      } else {
        // this card isn't showing - get in with it
        $(this).parent()
          .css({zIndex: zindex})
          .addClass("show");

      }

      zindex++;

    } else {
      // no cards in view
      $("div.cards")
        .addClass("showing");
      $(this).parent()
        .css({zIndex:zindex})
        .addClass("show");

      zindex++;
    }
    
  });
});

$(".menuIcon").click(function(event) {
  event.preventDefault();
  $(".nav").toggleClass("list");
});


$(document).ready(function () {
        $('#navbar li').hover(function () {
            $(this).addClass('hover');
        }, function () {
            $(this).removeClass('hover');
        });
    });

    function activarpestania() {
      var diractual = window.location; 
		  diractual = diractual.href.split("/");
      if(diractual[diractual.length-1]=="habitaciones.php"){
        var pestaña = document.getElementById("habitaciones");
        pestaña.className += " selected";
    }
    else if(diractual[diractual.length-1]=="index.php"){
        var pestaña = document.getElementById("inicio");
        pestaña.className += " selected";
    }
      
      
    }

    function mostrarDetalles() {
      //var content = document.getElementById("content");
      $('#content').append("wepa");
    }