/* global $ */
window.addEventListener('load', () => {
	// Constant Elements
	const toggleBtn = document.querySelector('.toggle-nav');
	const mainNav = document.querySelector('.main-nav');
	const navBarLinks = Array.from(document.querySelectorAll('.first-level-nav a:not(.has-drop)'));
	const dropNav = document.querySelector('.drop-nav');

	const header = document.querySelector('.main-header');
	const headerTop = header.offsetTop + 300;
	const btnTop = document.querySelector('#btn-top');

	const btnShowContactForm = document.querySelector('.show-contact-form');
	const contactFormWrapper = document.querySelector('.contact-form-wrapper');
	const contactFormBg = document.querySelector('.contact-form-bg');
	var originalHeight = contactFormBg.clientHeight;
	let finalHeight = 0;

	window.addEventListener('resize', () => {
		originalHeight = contactFormBg.clientHeight;
		console.log(originalHeight);
	});

	console.log('%coriginalHeight:', 'background:red; color: white', originalHeight);

	const breadCrumbs = Array.from(document.querySelectorAll('.bread-crumbs a'));

	const videoPID = document.querySelector('.video-pid');

	const btnPlayVideoSGP = document.querySelector('#play-sgp-video');
	const btnCloseVideoSGP = document.querySelector('.btn-close-video');

	const weKnowBoxes = Array.from(document.querySelectorAll('.we-know-list li'));

	const btnCallToAction = document.querySelector('.solution-call-to-action a');

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
				scrollTop: $(anchorHref).offset().top - 120
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
	// Set class in main-header only in home section
	// Set animation in We Know Home boxes
	window.addEventListener('scroll', () => {
		let windowScrollY = window.scrollY;

		// Top Button
		if (windowScrollY > headerTop) {
			btnTop.classList.add('show');
		} else {
			btnTop.classList.remove('show');
		}

		// Add class in header
		let stickyAnchor = document.querySelector('#sticky-anchor');
		if (stickyAnchor !== null && windowScrollY > stickyAnchor.offsetTop) {
			header.classList.add('is-scrolling');
		} else {
			header.classList.remove('is-scrolling');
		}

		// Set animation in We Know Boxes
		if (weKnowBoxes !== null && stickyAnchor !== null && windowScrollY > stickyAnchor.offsetTop) {
			weKnowBoxes.forEach(box => box.classList.add('animate'));
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
		const sectionsIds = ['sgp', 'appMobile', 'pvo', 'pid', 'sar'];
		dropNavAnchors.forEach((anchor, i) => {
			anchor.setAttribute('href', `#${sectionsIds[i]}`);
			anchor.setAttribute('class', 'page-scroll');
		});
	}

	// Set Prevent Default to last child in bread crumbs
	if (breadCrumbs !== null && breadCrumbs.length > 0) {
		const lastAnchorInBreadCrumbs = breadCrumbs.pop();
		lastAnchorInBreadCrumbs.addEventListener('click', (e) => e.preventDefault());
	}

	// Set the video controls on mouse event
	if (videoPID !== null) {
		videoPID.addEventListener('mouseover', e => {
			const self = videoPID;
			self.setAttribute('controls', 'controls');
		});
	}

	// Set behaviour for SGP video
	if (btnPlayVideoSGP !== null) {
		const overlayVideo = document.querySelector('#video-sgp');
		const video = overlayVideo.querySelector('video');

		const closeVideo = () => {
			overlayVideo.classList.remove('show');
			video.pause();
		};

		btnPlayVideoSGP.addEventListener('click', e => {
			e.preventDefault();
			setTimeout(() => video.play(), 1000);
			overlayVideo.classList.add('show');
		});

		overlayVideo.addEventListener('click', closeVideo);
		btnCloseVideoSGP.addEventListener('click', closeVideo);
	}

	// Event to Call to action button
	if (btnCallToAction !== null) {
		btnCallToAction.addEventListener('click', e => {
			let arrowIcon = btnShowContactForm.querySelector('[class*=fas]');
			arrowIcon.classList.remove('fa-chevron-up');
			arrowIcon.classList.add('fa-chevron-down');
			let increase = setInterval(function () {
				finalHeight += 20;
				contactFormWrapper.style.height = `${finalHeight}px`;
				if (finalHeight >= originalHeight) {
					clearInterval(increase);
				}
			}, 4);
		});
	}

	// Set actual year
	let year = new Date().getFullYear();
	document.querySelector('#actualYear').innerText = year;

})

const navBar = document.querySelector('.first-level-nav');

// Set class="actual" to <li> element un .main-nav
function setActualLink(link) {
	const actualLink = navBar.querySelector(`li[data-link=${link}]`);
	actualLink.classList.add('actual');
}