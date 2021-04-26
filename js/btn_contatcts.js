
//var float_contacts = document.getElementsByClassName("float_contacts");

//console.log(float_contacts.length);

let x = document.getElementsByClassName("float_contacts");

function tiraPoe(tp){

	switch(tp){

		case "t":

		console.log("tiera")

		case "p":

		console.log("poes")
	}

}

//var timeT = setInterval(tiraPoe, 50);

/*


function tira(){

	var trans = 1;

	

	function tiraD() {


	    if (trans < 0) {
			
			for (a = 0; a < x.length; a++) {
				x[a].style.zIndex = -100;
				
			}
			console.log("menor q 0")
			clearInterval(timeT);

		
		} else {

			trans = trans - 0.1; 
			for (i = 0; i < x.length; i++) {
				x[i].style.opacity = trans;
				console.log(trans);
				
			}


		}
	}
var timeT = setInterval(tiraD, 20);
}

function poe(){

	var transp = 0;

	var timeP = setInterval(poeD, 150);

	function poeD() {


	    if (transp >= 1) {
				for (a = 0; a < x.length; a++) {
				x[a].style.zIndex = 100;
				
			}

			
			console.log("maior q 1")
			clearInterval(timeP);

		} else {

			transp = transp + 0.1; 
			for (i = 0; i < x.length; i++) {
				x[i].style.opacity = transp;
				console.log(transp)
				
				
			}


		}
	}

}


