(function () {
    
    class BreakdanceReadMore {
      constructor(selector) {
        this.selector = selector;
        console.log(this.selector);
        this.isOpen = false;
        this.primaryText = document.querySelector(
          `${this.selector} .readmore-primary-text`
        );
        
        this.expandedText = document.querySelector(
          `${this.selector} .readmore-expanded-text`
        );
          
        this.rmButton = document.querySelector(`${this.selector} .rm-button`);
        this.init();
      }


      init() {
        this.rmButton.onclick = () => this.toggleClass()
        
      }

      toggleClass() {
        this.expandedText.classList.toggle('is-active');
      }
    }
  
    window.BreakdanceReadMore = BreakdanceReadMore;
  })();
  