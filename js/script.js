// Set Footer Logo Height
// document.addEventListener("DOMContentLoaded", equalizeHeights)
init()

function init() {
  javascriptEnabled()
  fadeFunc()

  window.addEventListener('resize', reequalizeHeights)
}

function scrollPosition(offset) {
  if (offset) {
    return offset + (window.pageYOffset | document.body.scrollTop)
  }
  return window.pageYOffset | document.body.scrollTop
}

function viewportTopPosition(offset) {
  if (offset) {
    return offset + (window.pageYOffset | document.body.scrollTop)
  }
  return window.pageYOffset | document.body.scrollTop
}

function viewportBottomPosition(offset) {
  if (offset) {
    return offset + window.innerHeight + (window.pageYOffset | document.body.scrollTop)
  }
  return window.innerHeight + (window.pageYOffset | document.body.scrollTop)
}

function javascriptEnabled() {
  document.getElementsByTagName('BODY')[0].className += ' js'
}

function footerHeight() {
  if (window.innerWidth >= 760) {
    var footerHeight = document.getElementById('footer-right').scrollHeight
    document.getElementById('footer-logo').style.height = footerHeight + 'px'
  } else {
    var infoBarHeight = document.getElementById('info-bar').scrollHeight
    document.getElementById('footer-logo').style.height = infoBarHeight + 'px'
  }
}

function reequalizeHeights() {
  var elemList = document.getElementsByClassName('e-h')
  for (var i = 0; i < elemList.length; i++) {
    elemList.item(i).style.height = 'auto'
  }
  equalizeHeights()
}

function equalizeHeights() {
  var parentList = document.getElementsByClassName('equalize-h')
  for (var i = 0; i < parentList.length; i++) {
    changeHeights(parentList.item(i))
  }

  function changeHeights(parentClass) {
    var elemList = parentClass.getElementsByClassName('e-h')
    var newHeight = getMaxHeight(elemList)

    for (var i = 0; i < elemList.length; i++) {
      elemList.item(i).style.height = newHeight + 'px'
    }
  }

  function getMaxHeight(elemList) {
    var maxHeight = 0

    for (var i = 0; i < elemList.length; i++) {
      var testHeight = elemList.item(i).offsetHeight
      if (testHeight > maxHeight) {
        maxHeight = testHeight
      }
    }
    return maxHeight
  }
}

// Fade Element in when scrolled into view

function fadeFunc() {
  var fadeList = document.getElementsByClassName('fade')
  var canGo = true
  var fadeCount = 0

  setInterval(fadeIn, 100)

  function fadeStop() {
    clearInterval(fadeIn)
  }

  function fadeIn() {
    for (var i = 0; i < fadeList.length; i++) {
      if (canGo && !fadeList.item(i).className.includes('animate') && isScrolledIntoView(fadeList.item(i))) {
        canGo = false
        fadeList.item(i).className += ' animate'
        fadeCount++
        if (fadeCount >= fadeList.length) {
          fadeStop()
        }
        setTimeout(function () {
          canGo = true;
        }, 50)
      }
    }
  }
}

function isScrolledIntoView(el) {
  var elemTop = el.getBoundingClientRect().top
  var elemBottom = el.getBoundingClientRect().bottom
  var elemHeight = el.offsetHeight
  var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight)
  if (el.getBoundingClientRect().height >= window.innerHeight) {
    return true
  } else {
    return isVisible
  }
}

function simpleParallax(intensity, element) {
  $(window).scroll(function () {
    var scrollTop = $(window).scrollTop()
    var imgPos = scrollTop / intensity + 'px'
    element.css('transform', 'translateY(' + imgPos + ')')
  })
}

// /////////////////////////////////////////////////
// MODAL LOGIC
// /////////////////////////////////////////////////
var m = document.getElementById('modal')
var b = document.getElementById('background')
var modalState = 0

function modalSetup() {
  var mbtns = document.getElementsByClassName('modal-btn')
  for (i = mbtns.length - 1; i >= 0; i--) {
    mbtns[i] = mbtns[i].outerHTML = '<button class="btn btn-primary">Try for Free</button>'
  }
  var topt = document.getElementsByClassName('training-option')
  for (i = topt.length - 1; i >= 0; i--) {
    topt[i].setAttribute('onClick', 'openModal()')
  }
}

function openModal() {
  m.className += ' active'
  m.style.marginTop = scrollPosition(30) + 'px'
  b.className += ' active'
  modalState = 1
}

function closeModal() {
  m.className = m.className.replace(/ \bactive\b/, '')
  b.className = b.className.replace(/ \bactive\b/, '')
  modalState = 0
}

document.onkeydown = function (evt) {
  evt = evt || window.event
  if (evt.keyCode == 27) {
    closeModal()
  }
}

function uncheckNav() {
  document.getElementById('nav-checkbox').checked = false
}

// /////////////////////////////////////////////////
// Append Zero Function
// /////////////////////////////////////////////////
function addZero(myNumber) {
  return (myNumber.toString().length < 2) ? '0' + myNumber : myNumber
}

// /////////////////////////////////////////////////
// Format Phone Number with spaces
// /////////////////////////////////////////////////
function phoneFormat(input) {
  // Strip all characters from the input except digits
  input = input.replace(/\D/g, '')

  // Trim the remaining input to ten characters, to preserve phone number format
  input = input.substring(0, 10)

  // Based upon the length of the string, we add formatting as necessary
  var size = input.length
  if (size == 0) {
    input = input
  } else if (size < 4) {
    input = input.substring(0, 3)
  } else if (size < 7) {
    input = input.substring(0, 3) + ' ' + input.substring(3, 6)
  } else {
    input = input.substring(0, 3) + ' ' + input.substring(3, 6) + ' ' + input.substring(6, 10)
  }
  return input
}

window.onload = function () {
  var phoneInput = document.getElementById('c-2-3')
  console.log(phoneInput)
  if (phoneInput) {
    document.getElementById('c-2-3')
      .addEventListener('keyup',
        function (e) {}
      )
  }
}