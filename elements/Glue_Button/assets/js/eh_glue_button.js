class EhGlueButton {
    constructor(props) {
      this.container = props.container
      this.button = props.button
      this.position = { 
        x: { last: 0, current: 0, original: 0 },
        y: { last: 0, current: 0, original: 0 }
      }
      this.limit = 100
      this.hoverState = true
      this.bcr = null

      this.init()
    }
  
    setBcr() {
      this.bcr = this.container.getBoundingClientRect()
    }
  
    onMouseMove(e) {
      if ( !this.hoverState ) return
      const y = this.bcr.top - window.scrollY
      const x = this.bcr.left - window.scrollX
      this.position.x.current = ( e.clientX - x - this.bcr.width / 2  ) * 0.7
      this.position.y.current = ( e.clientY - y - this.bcr.height / 2 ) * 0.7 
  
      if ( this.position.x.current >= this.limit || this.position.y.current >= this.limit ) {
        this.onMouseLeave(e)
        return
      }
      this.button.style.transform = `translate(${this.position.x.current}px, ${this.position.y.current}px)`
    }
  
    onMouseLeave(e) {
        this.hoverState = false
        this.button.style.transform = `translate(0px, 0px)`
        this.hoverState = true
    }
  
    init() {
      this.container.addEventListener('mouseenter', this.setBcr.bind(this))
      this.container.addEventListener('mousemove', this.onMouseMove.bind(this))
      this.container.addEventListener('mouseleave', this.onMouseLeave.bind(this))
    }
  }
  
  export { EhGlueButton }