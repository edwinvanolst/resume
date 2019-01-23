var darkMode = false
var showForm = false

var body = document.querySelector('body')
var resume = document.getElementById('main')

var msgButton = document.getElementById('message-button')
var msgLink = document.getElementById('message-link')
var printButton = document.getElementById('print-button')
var themeButton = document.getElementById('theme-button')

var form = document.getElementById('form')
var email = document.getElementById('email')
var message = document.getElementById('message')
var submit = document.getElementById('submit')

function msgForm() {
	//var stateObj = { foo: "bar" };
  //history.pushState(stateObj, "page 2", "file:///home/edwin/Code/Workspace/resume/sdfsdfsd.html");
  form.style.display = 'block'
  if (showForm = !showForm) {
    form.style.display = 'block'
    msgButton.firstChild.className = 'fas fa-arrow-left'
    resume.style.display = 'none'
  }
  else {
    form.style.display = 'none'
    msgButton.firstChild.className = 'fas fa-envelope'
    resume.style.display = 'block'
  }
}

msgButton.onclick = msgForm
msgLink.onclick = msgForm

printButton.onclick = function() {
  window.print()
}

submit.onclick = function() {
  // if email.value is email
  // if message.value not empty
}

themeButton.onclick = function() {
  if (darkMode = !darkMode) body.className = 'dark'
  else body.className = ''
}
