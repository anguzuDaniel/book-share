"use strict";

const showSignupBtn = document.getElementById("showSignup");
const showLoginbtn = document.getElementById("showLogin");
const signupForm = document.querySelector(".form__signup");
const loginForm = document.querySelector(".form__login");
const signupBtn = document.getElementById("signupBtn");
const loginBtn = document.getElementById("loginBtn");

showSignupBtn.addEventListener("click", (e) => {
	e.preventDefault();
	if (signupForm.classList.contains("notShown")) {
		loginForm.classList.add("notShown");
		signupForm.classList.remove("notShown");
		showSignupBtn.style.backgroundColor = "var(--control-btn-clr)";
		showSignupBtn.style.boxShadow = "var(--control-btn-clr)";
		showLoginbtn.style.backgroundColor = "transparent";
	}
});

showLoginbtn.addEventListener("click", (e) => {
	e.preventDefault();
	if (loginForm.classList.contains("notShown")) {
		loginForm.classList.remove("notShown");
		signupForm.classList.add("notShown");
		showLoginbtn.style.backgroundColor = "var(--control-btn-clr)";
		showSignupBtn.style.backgroundColor = "transparent";
	}
});

