
///// ALTURA DA NAV BAR //////

	var elmnt;
	var w;
	var h;
	var txt;
	function navBar_altura() {
		 elmnt = document.getElementById("nav_altura");
		 w =  elmnt.offsetHeight ;//window.outerWidth;
		 h = elmnt.offsetWidth;//window.outerHeight;
		 txt = "Window size: width=" + w + ", height=" + h;

		// console.log(txt);

	
	}

	 contato_s = document.getElementById("contato")
	 contato_x = contato_s.getBoundingClientRect()
	 //console.log(contato_x)

//POSIÇÃO DA SECTION "CONTATO" NA PAGINA

document.addEventListener('DOMContentLoaded', function() {

  let elem = document.getElementById('coords-show-mark');

  // no elem in ebook (pdf/epub) mode
  if (elem) {
    elem.onclick = function() {

      function createMessageUnder(elem, text) {
        let coords = elem.getBoundingClientRect();
        let message = document.createElement('div');
        message.style.cssText = "position:fixed; color: yellow";

        message.style.left = coords.left + "px";
        message.style.top = coords.bottom + "px";

        message.innerHTML = text;

        return message;
      }

      let message = createMessageUnder(elem, 'Hello, world!');
      document.body.append(message);
      setTimeout(() => message.remove(), 5000);
    }
  }

})

import ("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js");

function tiraPoe(tp){

	var contact_btns = document.getElementById("contact_deck");

	$(document).ready(function(){
		switch (tp) {

			case "T":
				
				//document.getElementById("contact_deck").style.visibility = "hidden";
				 $(contact_btns).fadeOut(400);
			break;


			case "P":
			   // document.getElementById("contact_deck").style.visibility = "visible";
			   // console.log('poes');
			    $(contact_btns).fadeIn(400);
			break;

		}

	});
}

$(document).ready(function() {
  $("#myCarousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(".carousel-item")
            .eq(i)
            .appendTo(".carousel-inner");
        } else {
          $(".carousel-item")
            .eq(0)
            .appendTo($(this).find(".carousel-inner"));
        }
      }
    }
  });
});


