/* global $ */

// Constant Elements
const navBar = document.querySelector('.first-level-nav');
const toggleBtn = document.querySelector('.toggle-nav');
const mainNav = document.querySelector('.main-nav');
const navBarLinks = Array.from(document.querySelectorAll('.first-level-nav a:not(.has-drop)'));
const dropNav = document.querySelector('.drop-nav');

const headerTop = document.querySelector('.main-header').offsetTop + 300;
const btnTop = document.querySelector('#btn-top');

const btnShowContactForm = document.querySelector('.show-contact-form');
const contactFormWrapper = document.querySelector('.contact-form-wrapper');
const contactFormBg = document.querySelector('.contact-form-bg');
let originalHeight = contactFormBg.clientHeight;
let finalHeight = 0;

// Set class="actual" to <li> element un .main-nav
function setActualLink (link) {
	const actualLink = navBar.querySelector(`li[data-link=${link}]`);
	actualLink.classList.add('actual');
}

// Event to display the .main-nav in mobile devices
toggleBtn.addEventListener('click', function (e) {
	e.preventDefault();
	let iTag = this.querySelector('i');
	let classValue = iTag.getAttribute('class');

	if (classValue.includes('fa-bars')) {
		iTag.classList.remove('fa-bars');
		iTag.classList.add('fa-times');
		mainNav.classList.add('show');
		document.all[0].classList.add('no-scroll');
		document.body.classList.add('no-scroll');
	} else {
		iTag.classList.add('fa-bars');
		iTag.classList.remove('fa-times');
		mainNav.classList.remove('show');
		document.all[0].classList.remove('no-scroll');
		document.body.classList.remove('no-scroll');
		// $('html, body').removeClass('no-scroll');
	}
});

// Prevent default in 'Soluciones' nav anchor
document.querySelector('.has-drop').addEventListener('click', e => e.preventDefault());
$('.has-drop').one('click', false, (e) => ('ontouchstart' in document.documentElement) ? e.preventDefault() : null);

// Scroll to section behaviour
$(function () {
	$('a.page-scroll').bind('click', function (event) {
		const anchorHref = this.getAttribute('href');
		$('html, body').stop().animate({
			scrollTop: $(anchorHref).offset().top
		}, 500);
		event.preventDefault();
	});
});

// Hide navbar on click - Mobile
navBarLinks.forEach(oneLink => {
	oneLink.addEventListener('click', () => {
		mainNav.classList.remove('show');
		toggleBtn.querySelector('i').classList.remove('fa-times');
		toggleBtn.querySelector('i').classList.add('fa-bars');
		document.all[0].classList.remove('no-scroll');
		document.body.classList.remove('no-scroll');
	});
});

// To top button - Sticky show
window.addEventListener('scroll', () => {
	let windowScrollY = window.scrollY;
	if (windowScrollY > headerTop) {
		btnTop.classList.add('show');
	} else {
		btnTop.classList.remove('show');
	}
});

// To Top Button - Event to top
btnTop.addEventListener('click', e => {
	e.preventDefault();

	let scrollStep = -window.scrollY / (650 / 15);
	let scrollInterval = setInterval(function () {
		if (window.scrollY !== 0) {
			window.scrollBy(0, scrollStep);
		} else {
			clearInterval(scrollInterval);
		}
	}, 15);
});

// Contact Form behaviour
btnShowContactForm.addEventListener('click', function () {
	let arrowIcon = this.querySelector('[class*=fas]');
	if (finalHeight < originalHeight) {
		this.classList.add('up');
		contactFormWrapper.classList.add('up');
		arrowIcon.classList.remove('fa-chevron-up');
		arrowIcon.classList.add('fa-chevron-down');
		let increase = setInterval(function () {
			finalHeight += 20;
			contactFormWrapper.style.height = `${finalHeight}px`;
			if (finalHeight >= originalHeight) {
				clearInterval(increase);
			}
		}, 4);
	} else {
		this.classList.remove('up');
		contactFormWrapper.classList.remove('up');
		arrowIcon.classList.remove('fa-chevron-down');
		arrowIcon.classList.add('fa-chevron-up');
		let decrease = setInterval(function () {
			finalHeight -= 20;
			contactFormWrapper.style.height = `${finalHeight}px`;
			if (finalHeight === 0) {
				clearInterval(decrease);
			}
		}, 4);
	}
});

// Set the href in drop-nav anchors - Only home
if (dropNav.hasAttribute('data-drop')) {
	const dropNavAnchors = Array.from(dropNav.querySelectorAll('a'));
	const sectionsIds = ['sgp', 'pvo', 'pid', 'sar'];
	dropNavAnchors.forEach((anchor, i) => {
		anchor.setAttribute('href', `#${sectionsIds[i]}`);
		anchor.setAttribute('class', 'page-scroll');
	});
}
