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

function formPadFunc(el){
  this.el = el;
  this._init();
}
formPadFunc.prototype._init = function(){
  this.btnA = this.el.find('.btn-enviar');
  this.submit = this.el.find('.enviar-hidden');
  this.loader = this.el.find('.load');
  this.input = this.el.find('.valid');
  this.status = true;
  this.msgErro = '';
  this.erroForm = this.el.find('.erro-form');
  this.inputsCErros = [];

  this._initEvents();
}
formPadFunc.prototype._initEvents = function(){
  var self = this;

  this.btnA.on('click', function(e){
    e.preventDefault();
    self._startLoad();
  });
}
formPadFunc.prototype._startLoad = function(){
  this.loader.fadeTo(150, '1');

  if(this.erroForm.hasClass('active')){
    this.erroForm.css('display', 'none');
    this.erroForm.remove('active');			
  }

  this.input.each(function(){
    $(this).removeClass('input-error');
  })

  this.inputsCErros.length = 0;

  this._startValid();
}
formPadFunc.prototype._startValid = function(){
  var self = this;
  this.input.each(function(){
    if($(this).val() == ''){
      self.status = false;
      self.msgErro = '*Campos obrigatórios vázios';
      self.inputsCErros.push($(this));
    }
  });

  this._endFunc();
}
formPadFunc.prototype._endFunc = function(){
  var self = this;

  setTimeout(function(){
    self.loader.fadeTo(150, '0');

    if(self.status == false){
      self.erroForm.find('p').text(self.msgErro);
      self.erroForm.css('display', 'block');
      self.erroForm.addClass('active');

      for(i=0; i<self.inputsCErros.length; i++){
        self.inputsCErros[i].addClass('input-error');
      }

      self.status = true;
    }
    else{
      self.submit.trigger('click');
    }

  }, 450)
}

new formPadFunc( $('.form-email') ); // Formulário Home Banner

new formPadFunc( $('.form-newsletter') ); //Formulário Footer Newsletter
