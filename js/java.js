//MENU NAVIGATION
const menu = [
	//{item:"Início", link:"#inicio"},
	{item:"Home", link:"#home"},
	{item:"Sobre", link:"#sobre"},
	{item:"Serviços", link:"#servicos"},
	{item:"Experiência Profissional", link:"#clientes"},
	{item:"Contato", link:"#contato"},
]

var navMenu =  document.querySelector(".nav_ul")

for (i=0; i<menu.length; i++){
	navMenu.innerHTML += "<li><a href='"+menu[i].link+"' onclick='toggleMenu()'>"+menu[i].item+"</a></li>"
}
// TOGGLE MENU
const menuBtn = document.querySelector(".toggle_container")
const nav_ulBtns = document.querySelectorAll('.nav_ul a')
let menuOpen = false

menuBtn.addEventListener('click', () =>{
	if(!menuOpen){
		menuBtn.classList.add('open')
		menuOpen = true
	} else{
		menuBtn.classList.remove('open')
		menuOpen = false
	}
})
for (i=0; i<nav_ulBtns.length; i++){
	//console.log(nav_ulBtns[a].outerText)
	nav_ulBtns[i].addEventListener('click', () =>{
	if(!menuOpen){
		menuBtn.classList.add('open')
		menuOpen = true
	} else{
		menuBtn.classList.remove('open')
		menuOpen = false
	}
})
}


// SErviços
const arrServicos = [
	{servItem: "Implantação de condomínios", servImg:"apartment"},
	{servItem: "Habilidade na identificação e tratativa de problemas estruturais/construtivos", servImg:"construction"},
	{servItem: "Otimização de recursos", servImg:"local_atm"},
	{servItem: "Racionalização de despesas", servImg:"money_off"},
	{servItem: "Negociação de contratos", servImg:"history_edu"},
	{servItem: "Implementação das  obrigações legais", servImg:"gavel"},
	{servItem: "Imparcialidade no trato das relações humanas e  gestão  de conflitos", servImg:"psychology"},

]

var servSection =  document.querySelector("section.servicos div.content")

for (s=0; s<arrServicos.length; s++){
	servSection.innerHTML +=`
							<div class="servicosBx">
								<i class="material-icons md-48">${arrServicos[s].servImg}</i>
								<h3>${arrServicos[s].servItem}</h3>
							</div>				 	
							`
}
// CONTATOS
 const arrContatos = [
 	{cName:"WhatsApp", cIcon:"fab fa-whatsapp", cLink:"http://api.whatsapp.com/send?1=pt_BR&phone=5519999012285&text=Olá!"},
 	{cName:"E-mail", cIcon:"far fa-envelope", cLink:"mailto:contato@asindik.com.br"},
 	{cName:"Facebook", cIcon:"fab fa-facebook-f", cLink:"https://www.facebook.com/asindika/"},
 	{cName:"Instagram", cIcon:"fab fa-instagram", cLink:"https://www.instagram.com/keilasindica/"},
 ]

var contactSection =  document.querySelector("section.contato div.contactSocial")

for (c=0; c<arrContatos.length; c++){
	contactSection.innerHTML +=`
							<a href="${arrContatos[c].cLink}" target="_blank">
								<div class="contatosBx">
									<i class="${arrContatos[c].cIcon}"></i>
								</div>
							</a>				 	
							`
}
// FIXA MENU NO TOPO
window.addEventListener('scroll', function () {
	var header = document.querySelector('header')
	var navbar_logo = document.querySelector('.navbar_logo')
	header.classList.toggle('sticky', window.scrollY > 0)
	navbar_logo.classList.toggle('sticky', window.scrollY > 0)
})
// TOGGLE DO MENU
function toggleMenu(){
	var menuToggle = document.querySelector(".toggle")
	var menuNav_ul = document.querySelector(".nav_ul")
	menuToggle.classList.toggle("active")
	menuNav_ul.classList.toggle("active")
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
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});