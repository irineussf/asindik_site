const cli_array = [
	{nome:"Condomínio Primeacqua", cidade:"Campinas", 
	 conj:"<b>12</b> Torres <br><b>440</b> Apartamentos", mand: " "/* "2010 - 2012 / 2016"*/,
	 img_link:"img/portfolio/001_prime_acqua.png", ativo:"N", implan:"N", cart:"N"},

	{nome:"Residencial Torres do Bonfim", cidade:"Campinas",
	 conj:"<b>4</b> Torres <br><b>399</b> Apartamentos", mand: "4º Mandato",
	 img_link:"img/portfolio/002_torres_do_bonfim.svg", ativo:"S", implan:"N", cart:"N"},

	{nome:"Central View Residence", cidade:"Campinas",
	 conj:"<b>4</b> Torres <br><b>400</b> Apartamentos", mand: "2014 - 2018 - Dois Mandatos",
	 img_link:"img/portfolio/003_central_view.svg", ativo:"N", implan:"N", cart:"N"},

	{nome:"Terra Caxambú", cidade:"Jundiaí",
	 conj:"<b>143</b> Lotes", mand: " "/*"2016 - 2017"*/,
	 img_link:"img/portfolio/004_caxambu.svg", ativo:"N", implan:"N", cart:"N"},

	{nome:"Premiere Morumbi", cidade:"Paulinia",
	 conj:"<b>8</b> Torres <br><b>337</b> Apartamentos", mand:" "/*"2017 - 2019"*/,
	 img_link:"img/portfolio/005_premiere.svg", ativo:"N", implan:"N", cart:"N"},

	{nome:"Residencial Recanto da Fortuna", cidade:"Campinas",
	 conj:"<b>12</b> Torres <br><b>239</b> Apartamentos", mand: "4º Mandato",
	 img_link:"img/portfolio/006_recanto.svg", ativo:"S", implan:"N", cart:"N"},

	{nome:"Iluminare", cidade:"Campinas",
	 conj:"<b>10</b> Casas", mand: " "/*"2017 - 2019"*/,
	 img_link:"img/portfolio/007_iluminare.svg", ativo:"N", implan:"N", cart:"N"},

	{nome:"Talipô Exclusive Club", cidade:"Campinas",
	 conj:"<b>8</b> Torres <br><b>376</b> Apartamentos", mand: " "/*"2018 - 2020"*/,
	 img_link:"img/portfolio/008_talipo.svg", ativo:"N", implan:"S", cart:"N"},

	{nome:"Portal Dálias do Campo", cidade:"Sumaré",
	 conj:"<b>7</b> Torres <br><b>352</b> Apartamentos", mand: " "/*"2020 - Atual"*/,
	 img_link:"img/portfolio/009_dalias.svg", ativo:"S", implan:"N", cart:"N"},

	{nome:"Ecovila Tipuana", cidade:"Campinas",
	 conj:"<b>12</b> Torres <br><b>384</b> Apartamentos", mand: "2º Mandato"/*"2020 - Atual"*/,
	 img_link:"img/portfolio/010_ecovila.svg", ativo:"S", implan:"N", cart:"N"},

	{nome:"Residencial Parque das Flores", cidade:"Sumaré",
	 conj:"<b>28</b> Blocos <br><b>445</b> Apartamentos", mand: "2º Mandato "/*"2020 - Atual"*/,
	 img_link:"img/portfolio/011_parquedasflores.svg", ativo:"S", implan:"N", cart:"N"},

	{nome:"Versalhes Garden", cidade:"Campinas",
	 conj:"<b>3</b> Torres <br><b>384</b> Apartamentos", mand: " "/*"2020 - Atual"*/,
	 img_link:"img/portfolio/012_versalhesgarden.svg", ativo:"S", implan:"S", cart:"N"},

	{nome:"Edifício Louvre", cidade:"Campinas",
	 conj:"<b>1</b> Torre <br><b>28</b> Apartamentos", mand: " "/*"2020 - Atual"*/,
	 img_link:"img/portfolio/013_edifciolouvre.svg", ativo:"S", implan:"N", cart:"N"},

	{nome:"Ecovila Talisia", cidade:"Hotolândia",
	 conj:"<b>4</b> Torre <br><b>354</b> Apartamentos", mand: " "/*"2020 - Atual"*/,
	 img_link:"img/portfolio/014_ecovilatalisia.svg", ativo:"S", implan:"S", cart:"S", cartLink:"cartilhas/c_talisia_online"},

	{nome:"Condomínio Caesalpinia", cidade:"Campinas",
	 conj:"<b>14</b> Torres <br><b>354</b> Apartamentos", mand: " "/*"2020 - Atual"*/,
	 img_link: " "/*"img/portfolio/xx"*/, ativo:"S", implan:"N", cart:"N"},

	{nome:"Alto do Ibirapuera | Ipês", cidade:"Campinas",
	 conj:"<b>2</b> Torres <br><b>354</b> Apartamentos", mand: " "/*"2020 - Atual"*/,
	 img_link: "img/portfolio/015_a_ipes.svg"/*"img/portfolio/xx"*/, ativo:"S", implan:"S", cart:"S", cartLink:"cartilhas/c_ipes_online"}

]
var cont_clients =  document.querySelector("section.clientes div.content")

console.table(cli_array)
var newArr = Array.from(cli_array, ({mand})=> mand)
console.log("newARR--> "+newArr)

var arrayteste
for (x=0; x<cli_array.length; x++){
	
	class verBadge {	
		constructor(cliItem){
			this.cliItem = cliItem
		}

		cria(){
			var xativo = cli_array[x].ativo
			var ximplan = cli_array[x].implan
			var xmand = cli_array[x].mand
			var xcart = cli_array[x].cart


			if (xativo == "S") {
				var rativo = `<div class="badge_ativo">ATIVO</div>`
			} else{ rativo = " "}

			if (ximplan == "S") {
				var rimplan = `<div class="badge_implan">IMPLANTAÇÃO</div>`
			}else{ rimplan = " "}

			if (xmand !== " ") {
				var rmand = `<div class="badge_mand">${cli_array[x].mand}</div>`
			}else{ rmand = " "}

			if (xcart == "S") {
				var rcart = `<a href="${cli_array[x].cartLink}" target="blank"><div class="badge_cart"><i class="fa fa-book"></i> <b>cartilha</b></div></a>`
			}else{ rcart = " "}
			
			
			return rativo + rimplan + rmand //+ rcart
		
		}

// 		teste(){
// 			if (this.atv == "S"){
// 				console.log(this.nome+" ---xxx "+ this.atv + "---xxx "+  this.imp)
// 				return  `<div class="badge_ativo">ATIVO</div>`
// 			}
	
// 			if (this.imp == "S"){
// 				console.log(this.nome+" ---zzz "+ this.atv + "---zzz "+  this.imp)
// 				return `<div class="badge_implan">IMPLANTAÇÃO</div>`
// 			}
	
// 			if (this.atv == "S" && this.imp == "S"){
// 				console.log(this.nome+" ---VVV "+ this.atv + "---zzz "+  this.imp)
// 				return `<div class="badge_ativo">ATIVO</div><div class="badge_implan">IMPLANTAÇÃO</div>	`
// 			}
		
// 		}

}

	let	badge = new verBadge(cli_array[x])
	// console.log(Object.entries(cli_array[x]))
	badge.cria()


	cont_clients.innerHTML += `
							
								<div class="clientesBx">
									<div class="badges">
									 ${badge.cria()}
								 </div>						
								 
								<div class="imgBx">
										<img src="${cli_array[x].img_link}">

									</div>
									<div class="nome_cli"> 
										<h3><b>${cli_array[x].nome}</b></h3>
										
										<p>${cli_array[x].cidade}</p>

									</div>
									<div class="img_unidades">
									🏠🏠🏠🏠
										<!-- <img src="img/img_unidades.svg"/>-->
									</div>
									<div class="qtd_unidades">
										<p>${cli_array[x].conj}</p>
									</div>
									<!--
									
									<div class="img_mandato">
										<img src="img/img_mandato.svg"/>
									</div>
							
									 <div class="qtd_mandato">
								     	<p>${cli_array[x].mand}</p>
									 </div>
									
									 -->
									
								</div>
								`
								
}

var imgBx = document.querySelectorAll("section.clientes div.content div.clientesBx .imgBx")

// for (xa=0; xa<cli_array.length; xa++){

// 	if(cli_array[xa].ativo == "S"){
// 		imgBx[xa].classList.add("ativo")
// 	}
// 	if(cli_array[xa].implan == "S"){
// 		imgBx[xa].classList.add("implan")
// 		if(cli_array[xa].ativo == "S")
// 		c	onsole.log("SIM", cli_array[xa].nome)
			
			
// 			// var styles = window.getComputedStyle(imgBx[xa],':after')
// 			// console.log(styles.right)
// 	}
// }   