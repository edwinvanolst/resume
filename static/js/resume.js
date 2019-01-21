var darkMode = false

var body = document.querySelector('body')
var icons = document.querySelectorAll('path')
var printButton = document.getElementById('print-button')
var themeButton = document.getElementById('theme-button')

printButton.onclick = function() {
  //window.print()
	var stateObj = { foo: "bar" };
history.pushState(stateObj, "page 2", "file:///home/edwin/Code/Workspace/resume/sdfsdfsd.html");
}

themeButton.onclick = function() {
  darkMode = !darkMode
  if (darkMode) body.className = 'dark'
  else body.className = ''

  //for (i = 0; i < icons.length; ++i) {
    //alert(i)
    //icons[i].setAttribute('style', 'fill:green')
  //}
}

var messageButton = document.getElementById('message-button')
var messageForm = document.getElementById('message-form')

messageButton.onclick = function() {
  messageForm.style.display = 'block'
}

