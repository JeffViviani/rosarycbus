var weeksSinceEpoc;

window.onload = function() {
	let clock = new Date();
	weeksSinceEpoc = Math.floor(Math.floor((clock.getTime() / 86400000)) / 7);
	document.getElementById("translation-select").onchange = function() {
		hideAllReadings();
		loadReadings();
	}
	let brfbtns = document.getElementsByClassName("brfbtn");
	for(let index = 0; index < brfbtns.length; index++) {
		brfbtns[index].onchange = function() {
			let wrapper = this.parentElement.parentElement;
			let pChildren = wrapper.getElementsByTagName("p");
			for(let index = 1; index < pChildren.length; index++) {
				if(this.checked) {
					pChildren[index].style.color = "#cfcdae";
				} else {
					pChildren[index].style.color = "black";
				}
			}
		}
	}

	let sectionbtns = document.getElementsByClassName("section-btn");
	for(let index = 0; index < sectionbtns.length; index++) {
		sectionbtns[index].onclick = function() {
			console.log("YAY!");
			let sib = this.nextElementSibling;
			if(sib.style.display != "block") {
				sib.style.display = "block";
			} else {
				sib.style.display = "none";
			}
		}
	}

	hideAllReadings();
	loadReadings();
}

function loadReadings() {
	let hiddenReadings = document.getElementsByClassName("rotation-readings");
	for(let i=0; i<hiddenReadings.length; i++) {
		let translation = document.getElementById("translation-select").value;
		let readingsToChoose = hiddenReadings[i].getElementsByClassName(translation);
		let numChoices = readingsToChoose.length;
		if(numChoices > 0) {
			readingsToChoose[weeksSinceEpoc % numChoices].style.display = "block";
		}
	}
}

function hideAllReadings() {
	console.log("yay");
	let hiddenReadings = document.querySelectorAll(".rotation-readings > div");
	for(let i=0; i<hiddenReadings.length; i++) {
		console.log("Hiding");
		hiddenReadings[i].style.display = "none";
	}
}