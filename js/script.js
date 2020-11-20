window.onload = function() {
	let clock = new Date();
	const weeksSinceEpoc = Math.floor(Math.floor((clock.getTime() / 86400000)) / 7);
	let hiddenReadings = document.getElementsByClassName("rotation-readings");
	for(let i=0; i<hiddenReadings.length; i++) {
		let readingsToChoose = hiddenReadings[i].getElementsByTagName("div");
		let numChoices = readingsToChoose.length;
		readingsToChoose[weeksSinceEpoc % numChoices].style.display = "block";
	}
}