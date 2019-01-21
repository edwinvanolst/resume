var darkMode = true

var body = document.querySelector('body')
var icons = document.querySelectorAll('path')
var printButton = document.getElementById('print-button')
var themeButton = document.getElementById('theme-button')

printButton.onclick = function() {
  window.print()
}

themeButton.onclick = function() {
  darkMode = !darkMode
  if (darkMode) body.className = 'dark'
  else body.className = ''

  for (i = 0; i < icons.length; ++i) {
    alert(i)
    icons[i].setAttribute('style', 'fill:green')
  }
}

