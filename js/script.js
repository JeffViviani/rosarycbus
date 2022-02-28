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
	
	occSelect = document.getElementById("occasion-select");
	occSelect.onchange = function() {
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
	let chapters = [];
	let chaptersBrf = [];
	let chapterStartRef = [];
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
			let temp = ps[0].innerText;
			chapters.push("<span class='subtle'>" + temp.substring(0, temp.indexOf(':')) + "]</span><br>");
			chaptersBrf.push(substrBookChap(temp));
			chapterStartRef.push(sentences.length);
			let bracketed = false;
			
			/* For each 'p' element in the reading, parse it for sentences. */
			let passThrough = 0;
			for(let i=1; i < ps.length; i++) {
				let text = ps[i].innerText;
				for(let index = 0; index < text.length; index++) {
					c = text[index]
					sentence += c;
					if(c == "." || c == ";" || c == "!" || c == "?" || passThrough == 1) {
						if(text[index + 1] == '"') {
							passThrough = 1;
						} else {
							if(!bracketed) {
								sentences.push(sentence);
								sentence = "";
								passThrough = 0;
							}
						}
					} else {
						if(c == '[' && text[index + 1] == '.') {
							bracketed = true;
						} else if(c == ']') {
							bracketed = false;
						}
					}
				}
			}
			
			if(medSelect.value == "dis") {
				
				visibleReadings.style.display = "block";
				
			} else if(medSelect.value == "suc") {
				
				let sucs = visibleReadings.getElementsByClassName("suc");
				let suc = sucs[weeksSinceEpoc % sucs.length]
				if(suc != null) {
					
					let newParagraph;
					let text = suc.innerHTML;
					
					let newDiv = document.createElement("div");
					let tmp = hiddenReadings[i].previousElementSibling.nodeName;
					if(tmp == "CENTER") {
						newParagraph = document.createElement("center");
						newParagraph.innerHTML = "<p class='guide'>[Meditation]</p>";
						newDiv.appendChild(newParagraph);
						newDiv.classList.add("impactTop");
					} else {
						newDiv.classList.add("impactBot");
					}
					
					
					newParagraph = document.createElement("p");
					newParagraph.innerHTML = chaptersBrf[i] + ' ' + text.toUpperCase();
					
					
					newDiv.appendChild(newParagraph);
					
					hiddenReadings[i].parentNode.insertBefore(newDiv, hiddenReadings[i]);
				}
				
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
					
					/* Determine from which chapter the first sentence from a
					 * reading comes from */
					 let chapterPtr = chapterStartRef.length - 1;
					 while(pIndex < chapterStartRef[chapterPtr]) {
						 chapterPtr--;
					 }
					 
					 /* Fill in chapter for first sentence. Always has a chapter. */
					 sentences[pIndex] = chapters[chapterPtr] + sentences[pIndex];
					 chapterPtr++;
					
					/* For each Hail Mary, add appropriate sentences beforehand.
					 * Know which sentences belong to which Hail Mary's by mathematical
					 * division and interpolation. */
					 for(hm=0; hm<10; hm++, sib = nextHm(sib)) {
						 let moveon = false;
						 let newHm = true;
						 /* Determine if pIndex sentence belongs... */
						 let sentenceDest = Math.round((pIndex - start) / denominator * 9);
						 while(sentenceDest == hm) {
							 
							 /* If you need to indicate new chapter... */
							 if(pIndex == chapterStartRef[chapterPtr]) {
								sentences[pIndex] = chapters[chapterPtr] + sentences[pIndex];
								chapterPtr++;
							 }
							 
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
					chapters = [];
					chapterStartRef = [];
				}
			}
		}
	}
	
	/* Load Opening and Closing prayers based upon the occasion. */
	let ords = document.querySelectorAll(".ord");
	let cels = document.querySelectorAll(".cel");
	if(occSelect.value == "ord") {
		
		for(let i=0; i<ords.length; i++) {
			ords[i].style.display = "block";
		}
		for(let i=0; i<cels.length; i++) {
			cels[i].style.display = "none";
		}
		
	} else {
		
		for(let i=0; i<ords.length; i++) {
			ords[i].style.display = "none";
		}
		for(let i=0; i<cels.length; i++) {
			cels[i].style.display = "block";
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
	let parsedImpactTop = document.getElementsByClassName("impactTop");
	max = parsedImpactTop.length;
	for(let i=0; i<max; i++) {
		parsedImpactTop[0].remove();
	}
	let parsedImpactBot = document.getElementsByClassName("impactBot");
	max = parsedImpactBot.length;
	for(let i=0; i<max; i++) {
		parsedImpactBot[0].remove();
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
	newParagraph.innerHTML = text;
	newParagraph.classList.add("regal")
	newParagraph.classList.add("parsedScripture");
	element.parentNode.insertBefore(newParagraph, element);
}

function blitAtop(element,text) {
	element.innerHTML += text;
}

function substrBookChap(str) {
	
	let indexOfBookStart, indexOfColon;
	indexOfBookStart = str.indexOf("according to St. ") + 17;
	if(indexOfBookStart == 16) {
		indexOfBookStart = str.indexOf("Reading from ") + 13;
		console.log(indexOfBookStart);
	}
	if(indexOfBookStart == 12) {
		return "___";
	} else {
		indexOfColon = str.indexOf(':');
		if(indexOfColon == -1) {
			return "___";
		} else {
			return "<span class='subtle'>" + str.substring(indexOfBookStart, indexOfColon + 1).toUpperCase() + "</span>";
		}
	}
}