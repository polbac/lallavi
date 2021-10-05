export default class Blog{
    constructor(){
        this.navigationBarWrapper = document.querySelector('.blog-navigation')
        this.blogList = document.querySelector('.blog-list')

        this.navigationBarWrapper
            .querySelector('.archive')
            .addEventListener('click', this.toggleBlogNavigation.bind(this))
    }

    toggleBlogNavigation() {
        this.blogList.classList.toggle('open')
    }
}