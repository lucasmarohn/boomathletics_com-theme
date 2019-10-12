
var parallaxList = [];
var e = document.getElementsByClassName('parallax');

function initParallax() {  
  for(var i = 0; i < e.length; i++) {
    var o = e[i].parentElement.getBoundingClientRect().top;
    var newModule = new parallaxObj(e[i], o);
    newModule.update();
    parallaxList.push(newModule);
  }
}

var parallaxObj = function(e, o) {
  this.element = e;
  this.offset = o;

  var currStyle = this.element.getAttribute("style")
  
  this.update = function() {
    var translate = (window.scrollY)/3;
    this.element.setAttribute("style", "transform: translateY(" + Math.floor(translate) + "px);" + currStyle);
  }
}

function updateObjects() {
  for(var i = 0; i < parallaxList.length; i++) {
    parallaxList[i].update()
  }
}

function init() {
  initParallax();
  window.addEventListener("scroll", updateObjects);
}


init();