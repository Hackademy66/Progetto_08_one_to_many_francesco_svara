/* const fullpageEl = document.getElementById('fullpage') */


const menuBtn = document.querySelector('.menu__btn')
const navigation = document.querySelector('.navigation')
const navCloseBtn = document.querySelector('.navigation__close__btn')

const CLICK = 'click'
const IS_ACTIVE = 'is--active'

const toggleNavigation = () => {
    navigation.classList.toggle(IS_ACTIVE)
    document.body.style.overflow = navigation.classList.contains(IS_ACTIVE) ? 'hidden' : 'scroll'
    if (navigation.classList.contains(IS_ACTIVE)) {
        previousScrollPosition = window.pageYOffset;
    } else {
        window.scrollTo(0, previousScrollPosition);        
    }    
}

menuBtn.addEventListener(CLICK, toggleNavigation)
navCloseBtn.addEventListener(CLICK, toggleNavigation)