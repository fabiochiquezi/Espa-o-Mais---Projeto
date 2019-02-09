class menuMobFunc{
  constructor(el, option){
    this.el = el;
    this.iconMenu = this.el.querySelector( '.icon-mob-js' );
    this.menu = this.el.querySelector( '.menu-site' );

    this._init();
  }
  _init(){
    var self = this;
    this.iconMenu.addEventListener('click', function(e) {
      e.preventDefault();
      self._startFunc();
    });
  }
  _startFunc(){
    if(this.menu.classList.contains('active-menu')){
      this.menu.classList.remove('active-menu');
      this.iconMenu.querySelector('i').classList.remove('icon-menu-active');
    }
    else{
      this.menu.classList.add('active-menu');
      this.iconMenu.querySelector('i').classList.add('icon-menu-active');
    }
  }
}

new menuMobFunc ( document.querySelector('.header-site') );