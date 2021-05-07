var weeksSinceEpoc;
var savedSections = [];
var medSelect;

window.onload = function() {
	let clock = new Date();
	saveReadings();
	weeksSinceEpoc = parseInt(document.getElementById("wse").innerText);
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
			let bracketed = false;
			for(let i=1; i < ps.length; i++) {
				let text = ps[i].innerText;
				for(let index = 0; index < text.length; index++) {
					c = text[index]
					if(c == "." || c == ";" || c == "!" || c == "?") {
						if(!bracketed) {
							sentence += c;
							sentences.push(sentence);
							sentence = "";
						}
					} else {
						if(c == '[') {
							bracketed = true;
						} else if(c == ']') {
							bracketed = false;
						}
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
					var sib = hiddenReadings[i];
					sib = nextHm(sib);
					//At first Hail Mary. Good. Now add p nodes.
					let max, start;
					pIndex = 0;
					if(medSelect.value == "intb" && sentences.length > 10) {
						pIndex = weeksSinceEpoc % (sentences.length - 9);
						start = pIndex;
						max = pIndex + 9;
					} else {
						pIndex = 0;
						start = 0;
						max = sentences.length - 1;
					}
					
					let denominator = parseFloat(max - start);
					let hm = 0;
					
					console.log("NUM SENTENCES: " + sentences.length);
					
					/* For each Hail Mary, add appropriate sentences beforehand.
					 * Know which sentences belong to which Hail Mary's by mathematical
					 * division and interpolation. */
					 for(hm=0; hm<10; hm++, sib = nextHm(sib)) {
						 let moveon = false;
						 let newHm = true;
						 /* Determine if pIndex sentence belongs... */
						 let sentenceDest = Math.round((pIndex - start) / denominator * 9);
						 while(sentenceDest == hm) {
							 if(newHm) {
								 newHm = false;
								blitBefore(sib, sentences[pIndex]);
							 } else {
								 blitAtop(sib.previousElementSibling, sentences[pIndex]);
							 }
							 pIndex++;
							 sentenceDest = Math.round((pIndex - start) / denominator * 9);
							 if(pIndex > max) {
								 sentenceDest = -1;
							 }
						 }
						 
					 }
					sentences = [];
				} else {
					sentences[sentences.length - 1] += "\n[To Next Reading...]\n";
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
	let max = parsedScriptures.length;
	for(let i=0; i<max; i++) {
		parsedScriptures[0].remove();
	}
}

function nextHm(element) {
	if(element.innerText.substring(0,4) == "Hail") {
		element = element.nextElementSibling;
	}
	while(element != null && element.innerText.substring(0,4) != "Hail") {
		element = element.nextElementSibling;
	}
	return element;
}

function blitBefore(element, text) {
	let newParagraph = document.createElement("p");
	newParagraph.innerText = text;
	newParagraph.classList.add("regal")
	newParagraph.classList.add("parsedScripture");
	element.parentNode.insertBefore(newParagraph, element);
}

function blitAtop(element,text) {
	element.innerText += text;
}