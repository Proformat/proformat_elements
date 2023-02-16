(function () {
    
    class BreakdanceReadMore {
      constructor(selector) {
        this.selector = selector;
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
        this.rmButton.querySelector('.button-atom__text').innerText = 'Czytaj';
        
      }

      toggleClass() {
        this.expandedText.classList.toggle('is-active');
        this.isOpen = !this.isOpen;
        if(this.isOpen){
          this.rmButton.querySelector('.button-atom__text').innerText = 'Zwiń';
        } else {
          this.rmButton.querySelector('.button-atom__text').innerText = 'Czytaj';
        }
      }
    }
  
    window.BreakdanceReadMore = BreakdanceReadMore;
  })();
  