/* global AFRAME */
AFRAME.registerComponent('info-panel', {
  init: function () {
    var buttonEls = document.querySelectorAll('.menu-button');
    var fadeBackgroundEl = this.fadeBackgroundEl = document.querySelector('#fadeBackground');

    this.movieImageEl;
    this.movieTitleEl = document.querySelector('#movieTitle');
    this.movieDescriptionEl = document.querySelector('#movieDescription');

    this.movieInfo = {
      karigurashiButton: {
        title: 'TESTS',
      },
      kazetachinuButton: {
        title: 'PROJETS',
      },
      ponyoButton: {
        title: 'CV',
      }
      
    };

    this.onMenuButtonClick = this.onMenuButtonClick.bind(this);
    this.onBackgroundClick = this.onBackgroundClick.bind(this);
    this.backgroundEl = document.querySelector('#background');
    for (var i = 0; i < buttonEls.length; ++i) {
      buttonEls[i].addEventListener('click', this.onMenuButtonClick);
    }
    this.backgroundEl.addEventListener('click', this.onBackgroundClick);
    this.el.object3D.renderOrder = 9999999;
    this.el.object3D.depthTest = false;
    fadeBackgroundEl.object3D.renderOrder = 9;
    fadeBackgroundEl.getObject3D('mesh').material.depthTest = false;
  },

  onMenuButtonClick: function (evt) {

    var movieTitle = this.movieInfo[evt.currentTarget.id].title;

    this.backgroundEl.object3D.scale.set(1, 1, 1);

    this.el.object3D.scale.set(1, 1, 1);

    if(movieTitle=="PROJETS")
    {
      window.location.href = "http://github.com/j0bot";
    }
    else if(movieTitle=="CV")
    {
      alert("pas encore finit");
      window.location.href = "http://j0bot.ch/?page=cv";      
    }
    else if(movieTitle=="TESTS")
    {
      alert("Il n'y a pas de tests");
      window.location.href = "http://j0bot.ch/?page=test";
    }

  },

  onBackgroundClick: function (evt) {
    this.backgroundEl.object3D.scale.set(0.001, 0.001, 0.001);
    this.el.object3D.scale.set(0.001, 0.001, 0.001);
    this.el.object3D.visible = false;
    this.fadeBackgroundEl.object3D.visible = false;
  }
});
