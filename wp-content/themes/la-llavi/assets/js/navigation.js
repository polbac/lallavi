export default class Navigation{
    constructor() {
        this.show = false
        this.wrapper = document.querySelector('nav')
        this.body = document.querySelector('body')
        this.navItem = this.wrapper.querySelector('.nav-item')
        
        this.navItem.addEventListener('click', this.toggleMenu.bind(this))
    }

    toggleMenu() {
        this.wrapper.classList.toggle('display')
        this.body.classList.toggle('menu-open')
    }
}