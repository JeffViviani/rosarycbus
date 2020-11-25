var weeksSinceEpoc;

window.onload = function() {
	let clock = new Date();
	weeksSinceEpoc = Math.floor(Math.floor((clock.getTime() / 86400000)) / 7);
	document.getElementById("translation-select").onchange = function() {
		hideAllReadings();
		loadReadings();
	}
	hideAllReadings();
	loadReadings();
}

function loadReadings() {
	let hiddenReadings = document.getElementsByClassName("rotation-readings");
	for(let i=0; i<hiddenReadings.length; i++) {
		let translation = document.getElementById("translation-select").value;
		console.log(translation);
		let readingsToChoose = hiddenReadings[i].getElementsByClassName(translation);
		let numChoices = readingsToChoose.length;
		if(numChoices > 0) {
			console.log(weeksSinceEpoc % numChoices);
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