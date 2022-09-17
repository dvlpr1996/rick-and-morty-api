addEventListener("load", (event) => {
	// gender icon selected based on data
	let genderWrapper = document.querySelectorAll("#gender-wrapper");
	let gender = document.querySelectorAll("#gender-wrapper #gender");
	let genderIcon = document.querySelectorAll("#gender-wrapper #gender-icon");

	for (let i = 0; i < genderWrapper.length; i++) {
		switch (gender[i].innerHTML) {
			case 'Female': genderIcon[i].classList.add('fa-venus'); break;
			case 'Male': genderIcon[i].classList.add('fa-mars'); break;
			case 'Genderless': genderIcon[i].classList.add('fa-genderless'); break;
			case 'unknown': genderIcon[i].classList.add('fa-genderless'); break;
		}
	}

	// status icon selected based on data
	let statusWrapper = document.querySelectorAll("#status-wrapper");
	let status = document.querySelectorAll("#status-wrapper #status");
	let statusIcon = document.querySelectorAll("#status-wrapper #status-icon");

	for (let i = 0; i < statusWrapper.length; i++) {
		switch (status[i].innerHTML) {
			case 'Alive': statusIcon[i].classList.add('fa-smile', 'alive'); break;
			case 'Dead': statusIcon[i].classList.add('fa-dizzy', 'dead'); break;
			case 'unknown': statusIcon[i].classList.add('fa-question-circle', 'unknown'); break;
		}
	}
});

let year = document.querySelector("#year");
if (year) {
	year.innerHTML = (new Date).getFullYear();
}

window.addEventListener("load", () => {
	window.addEventListener("offline", () => {
		alert("you are seem offline. check your internet connection");
	});
});
