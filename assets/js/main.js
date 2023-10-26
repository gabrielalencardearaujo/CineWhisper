const formSubmit = document.querySelector('#formSignUp');

formSubmit.addEventListener('submit', handlClick)

function handlClick(event) {
  // event.preventDefault()
  const url = new URLSearchParams(window.location.search)
  console.log(url)
}

