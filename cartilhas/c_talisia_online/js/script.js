
function toggleMenu(){
  const menuToggle = document.querySelector('.toggle')
  const sidebar = document.querySelector('.sidebar')
  menuToggle.classList.toggle('active')
  sidebar.classList.toggle('active')
}

//data in datajs.js file!

let menuSidebar =  document.querySelector(".menuSidebar")
let section = document.querySelector('.sections');

for (i=0; i<indexSidebar.length; i++){

  //menu lateral
menuSidebar.innerHTML += "<li><a href=#"+indexSidebar[i].iClass+" onclick='toggleMenu()'>"+indexSidebar[i].titleIndex+"</a></li>"
  // verificar item for par
  let varClass = ''
  if (i % 2 == 0){
      console.log("par")
      varClass = "cGrey"
  }else{
      console.log("impar")
      varClass = ""
  }
  //carregar sections de capitulos
  section.innerHTML += (`
      <section class="${indexSidebar[i].iClass} ${varClass}" id=${indexSidebar[i].iClass}>
          <div class='title'>
              <h2>${i + 1} - ${indexSidebar[i].titleIndex}</h2>
              <p>${indexSidebar[i].chapDesc}</p>
              <a href="#home" class="btn">Voltar</a>
          </div>
      </section>
      `)
}


/// Scroll smoth
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 600, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});













