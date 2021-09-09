export default class Productions{
    constructor() {
        this.MAX_ELEMENTS = 3
        this.wrapper = document.querySelector('section.producciones')
        this.modules = this.wrapper.querySelectorAll('.producciones-item')
        this.loaded = 0
        this.modules.forEach(module => {
            const img = module.querySelector('img')
            img.addEventListener('load', this.load.bind(this))
            img.setAttribute('src', img.getAttribute('data-src'))
        })
    }

    load(e) {
        this.loaded++
        const target = e.currentTarget.parentNode.parentNode
        target.classList.add('loaded')
        target.style.left = `${window.innerWidth / 2 - target.offsetWidth / 2}px`
        target.style.top = `${window.inneHeight / 2 - target.offsetHeight / 2}px`
        this.modules = this.wrapper.querySelectorAll('.producciones-item.loaded')
        this.setSizes()

        if (this.loaded === this.modules.length) {
            this.render()
            window.addEventListener('resize', this.render.bind(this))
            window.addEventListener('scroll', this.scroll.bind(this))
        }
    }

    scroll(e){
        const scrollPosition = window.scrollY

        this.modules.forEach(module => {
            const weight = +module.getAttribute('data-weight')
            module.style.transform = `translateY(${(scrollPosition / (1 - weight))}px)`
        })
    }

    getModuleSize() {
        let moduleSize = window.innerWidth / this.MAX_ELEMENTS / 4
        
        if (moduleSize < 150) {
            moduleSize = 150
        }

        if (window.innerWidth < 600 && moduleSize > 100) {
            moduleSize = 100
        }

        return moduleSize
    }

    setSizes() {
        const moduleSize =  this.getModuleSize()
        this.modules.forEach(module => {
            module.style.width = `${moduleSize * +module.getAttribute('data-weight')}px`
        })
    }

    areRectanglesOverlap(rect1, rect2) {
        let [left1, top1, right1, bottom1] = [rect1[0], rect1[1], rect1[2], rect1[3]],
            [left2, top2, right2, bottom2] = [rect2[0], rect2[1], rect2[2], rect2[3]];
       if (
        left1 >= right2 || top1 >= bottom2 || 
        right1 <= left2 || bottom1 <= top2
       ) {
           return false
       }

       return true
      }


    getEmptySpace(targetNodule) {
        let find = false
        let x = 0
        let y = 0
        const MARGIN = 20
        const canvasWidth =  + window.innerWidth - targetNodule.offsetWidth 
        const canvasHeight = window.innerHeight * (0.75 + (window.innerHeight / window.innerWidth))
        let tryRandom = 0
        
        while (!find) {
            x = MARGIN + Math.random() * (canvasWidth - MARGIN)
            y = MARGIN + Math.random() * canvasHeight
            
            let touchSomeone = false


            this.modules.forEach(module => {
                const moduleX = +module.getAttribute('x')
                const moduleY = +module.getAttribute('y')
                
                if (
                    moduleX && moduleY &&
                    this.areRectanglesOverlap(
                        [x, y, x + targetNodule.offsetWidth, y + targetNodule.offsetHeight],
                        [moduleX, moduleY, moduleX + module.offsetWidth, moduleY + module.offsetHeight]
                    )
                ) {
                    touchSomeone = true
                }
                tryRandom++

                if (tryRandom >= 1000) {
                    touchSomeone = false
                }

            })
            
            if (!touchSomeone) {
                find = true
            }
        }

        return { x, y }
    }

    setPositions(){
        this.modules.forEach(module => {
            const { x, y } = this.getEmptySpace(module)

            module.style.top = `${y}px`
            module.style.left = `${x}px`
            
            module.setAttribute('x', x)
            module.setAttribute('y', y)

            module.classList.add('positioned')

            module.classList.remove('left')
            module.classList.remove('right')

            if (x < window.innerWidth / 2) {
                module.classList.add('left')
            } else {
                module.classList.add('right')
            }
        })
    }

    addInteractions() {

    }


    render() {
        this.setPositions()
    }
}