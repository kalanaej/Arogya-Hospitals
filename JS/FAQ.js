var qs = document.getElementsByClassName("question");
var x;

for (x = 0; x < qs.length; x++) {
	qs[x].addEventListener("click", function() {
		this.classList.toggle("expand");
		var answer = this.nextElementSibling;
		if (answer.style.display === "block") {
			answer.style.display = "none";
		} else {
			answer.style.display = "block";
		}
	});
}
