let btnMenuResponsive = document.querySelector('#menu-responsive-button')
let closeBtnMenu = document.querySelector('#close-responsive-menu')
let nav = document.querySelector('#primary-nav')

btnMenuResponsive.addEventListener('click', () => {
	nav.classList.toggle('open-menu')
})

closeBtnMenu.addEventListener('click', () => {
	nav.classList.remove('open-menu')
})


window.onresize = () => {
	if (window.innerWidth >= 768 && nav.classList.contains('open-menu')) {
		nav.classList.remove('open-menu')
	}
}
