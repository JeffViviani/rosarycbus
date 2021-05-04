var weeksSinceEpoc;
var savedSections = [];
var medSelect;

window.onload = function() {
	let clock = new Date();
	saveReadings();
	weeksSinceEpoc = Math.floor(Math.floor((clock.getTime() / 86400000)) / 7);
	document.getElementById("translation-select").onchange = function() {
		hideAllReadings();
		loadReadings();
	}
	medSelect = document.getElementById("medstyle-select");
	medSelect.onchange = function() {
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

function saveReadings() {
	let expandableBoxes = document.getElementsByClassName("expandable-box");
	savedSections = [];
	for(let i = 1; i <= 5; i++) {
		savedSections.push(expandableBoxes[i].innerHTML);
	}
}

function loadReadings() {
	let hiddenReadings = document.getElementsByClassName("rotation-readings");
	let sentences = [];
	for(let i=0; i<hiddenReadings.length; i++) {
		//For every 'rotation-readings' element...
		let translation = document.getElementById("translation-select").value;
		let readingsToChoose = hiddenReadings[i].getElementsByClassName(translation);
		let numChoices = readingsToChoose.length;
		//If reading exists...
		if(numChoices > 0) {
			//Legacy rotation type via local Javascript. Still here...
			let visibleReadings = readingsToChoose[weeksSinceEpoc % numChoices];
			//Parse sentences. Gather them all into an array
			let ps = visibleReadings.getElementsByTagName("p");
			let sentence = "";
			for(let i=1; i < ps.length; i++) {
				let text = ps[i].innerText;
				for(let index = 0; index < text.length; index++) {
					c = text[index]
					if(c == "." || c == ";") {
						sentence += c;
						sentences.push(sentence);
						sentence = "";
					} else {
						sentence += c;
					}
				}
			}
			
			if(medSelect.value == "dis") {
				visibleReadings.style.display = "block";
			} else {
			
				//Is next line another reading or no?
				if(!hiddenReadings[i].nextElementSibling.classList.contains("rotation-readings")) {
					//No, so Hail Mary's are coming up. Parse the sentences and add them before.
					let pIndex = 0;
					let sib = hiddenReadings[i];
					let hailMaryFound = false;
					while(!hailMaryFound) {
						let prevSib = sib;
						console.log(sib.nodeName);
						sib = sib.nextElementSibling;
						if(sib.nodeName == "P") {
							if (sib.innerText.substring(0,4) == "Hail") {
								hailMaryFound = true;
							}
						}
					}
					//At first Hail Mary. Good. Now add p nodes.
					let max;
					if (sentences.length > 10) {
						max = 10;
					} else {
						max = sentences.length;
					}
					
					for(let pIndex=0; pIndex<max; pIndex++) {
						let newParagraph = document.createElement("p");
						console.log("Adding " + pIndex);
						newParagraph.innerText = sentences[pIndex];
						newParagraph.classList.add("regal")
						newParagraph.classList.add("parsedScripture");
						sib.parentNode.insertBefore(newParagraph,sib);
						sib = sib.nextSibling.nextSibling;
					}
					sentences = [];
				}
			}
			
		}
	}
}

function hideAllReadings() {
	let hiddenReadings = document.querySelectorAll(".rotation-readings > div");
	for(let i=0; i<hiddenReadings.length; i++) {
		hiddenReadings[i].style.display = "none";
	}
	let parsedScriptures = document.getElementsByClassName("parsedScripture");
	for(let i=0; i<parsedScriptures.length; i++) {
		parsedScriptures[0].remove();
	}
}

function integrate(section) {
	let readings = document.getElementsByClassName("rotation-readings");
	
}