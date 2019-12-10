// Constant Elements
const navBar = document.querySelector('.first-level-nav');
const toggleBtn = document.querySelector('.toggle-nav');
const mainNav = document.querySelector('.main-nav');

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

// Prevent default in 'Soluciones' nav link
document.querySelector('.has-drop').addEventListener('click', e => e.preventDefault());

// To top button - Sticky show
const headerTop = document.querySelector('.main-header').offsetTop + 300;
const btnTop = document.querySelector('#btn-top');
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
		if (window.scrollY != 0) {
			window.scrollBy(0, scrollStep);
		} else {
			clearInterval(scrollInterval);
		}
	}, 15);
});
