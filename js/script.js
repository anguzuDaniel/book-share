"use strict";

const scrollEffect = document.querySelector(".scrollEffect");
const showSignupBtn = document.getElementById("showSignup");
const showLoginbtn = document.getElementById("showLogin");
const signupForm = document.querySelector(".form__signup");
const loginForm = document.querySelector(".form__login");
const signupBtn = document.getElementById("signupBtn");
const loginBtn = document.getElementById("loginBtn");
const rightBtn = document.getElementById("right--btn");
const leftBtn = document.getElementById("left--btn");
const reviewCards = document.querySelectorAll(".reviews__cards");
const userDropdownBtn = document.querySelector(".admin__content--user");
const deleteModalBtn = document.querySelector(".showDeleteModal");
const deleteModal = document.querySelector(".delete__modal");

// form the admin section
const adminNavBtn = document.getElementById("admin__nav--btn");
const adminNav = document.querySelector(".admin__nav");
const adminNavText = document.querySelectorAll(".admin__nav--text");

// home page
const homeHumbugerBtn = document.querySelector(".humbuger");
const homeNav = document.querySelector(".header__nav--list");
const homeCtaBtns = document.querySelector(".cta");

const adminContent = document.querySelector(".admin__container");

/** functions */
// adds white background to header when scrolling down
window.onscroll = function () {
	let top = window.scrollY;

	// checks if top is greater or equal to 164
	// add if codition is true else remove
	if (top < 164) {
		scrollEffect.classList.remove("scroll");
	} else {
		scrollEffect.classList.add("scroll");
	}
};

if (homeHumbugerBtn != null) {
	homeHumbugerBtn.addEventListener("click", () => {
		if (homeNav.style.display != "none") {
			homeNav.style.display = "none";
			homeCtaBtns.style.display = "none";
		} else {
			homeNav.style.display = "flex";
			homeCtaBtns.style.display = "flex";
		}
	});
}

if (adminNavBtn != null) {
	adminNavBtn.addEventListener("click", () => {
		let visible = adminNav.getAttribute("data-visible");

		if (visible === "false") {
			adminNav.setAttribute("data-visible", true);
			adminNavText.forEach((e) => {
				e.style.display = "flex";
			});
			adminContent.style.left = "200px";
		} else {
			adminNav.setAttribute("data-visible", false);
			adminNavText.forEach((e) => {
				e.style.display = "none";
			});
			adminContent.style.left = "100px";
		}
	});
}

if (showSignupBtn != null) {
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
}

if (showLoginbtn != null) {
	showLoginbtn.addEventListener("click", (e) => {
		e.preventDefault();
		if (loginForm.classList.contains("notShown")) {
			loginForm.classList.remove("notShown");
			signupForm.classList.add("notShown");
			showLoginbtn.style.backgroundColor = "var(--control-btn-clr)";
			showSignupBtn.style.backgroundColor = "transparent";
		}
	});
}

// card slider effect
const cardSlider = function () {
	// slider code
	// review section
	let curCard = 0;
	const maxCard = reviewCards.length - 1;

	const goToNextCard = function (card) {
		reviewCards.forEach((s, i) => {
			s.style.transform = `translateX(${100 * (i - card)}%)`;

			if (s.style.transform === "translateX(0%)")
				s.classList.add("review--slide--active");
			// if card has a transform of 0% then add active class
			else s.classList.remove("review--slide--active"); // else remove
		});
	};

	const nextCard = function () {
		if (curCard === maxCard) {
			curCard = 0;
		} else {
			curCard++;
		}

		goToNextCard(curCard);
	};

	const prevCard = function () {
		if (curCard === 0) {
			curCard = maxCard - 1;
		} else {
			curCard--;
		}

		goToNextCard(curCard);
	};

	// card slider btns
	if (rightBtn != null) rightBtn.addEventListener("click", nextCard);
	if (leftBtn != null) leftBtn.addEventListener("click", prevCard);
};
cardSlider();

if (userDropdownBtn != null) {
	userDropdownBtn.addEventListener("click", (e) => {
		e.preventDefault();
		dropdown.style.display = "block";
		console.log("clicked!!");
	});
}

// smooth scroll for links
if (document.querySelector(".navigation__list") != null) {
	document
		.querySelector(".navigation__list")
		.addEventListener("click", function (e) {
			console.log(e.target);
			e.preventDefault();

			if (e.target.classList.contains("nav--link")) {
				const id = e.target.getAttribute("href");
				document.querySelector(id).scrollIntoView({ behavior: "smooth" });
			}
		});
}

if (deleteModalBtn != null) {
	deleteModalBtn.forEach((btn) => {
		btn.addEventListener("click", (e) => {
			e.preventDefault();
			if (deleteModal.classList.contains("show")) {
				deleteModal.classList.remove("show");
			} else {
				deleteModal.classList.add("show");
			}
		});
	});
}
