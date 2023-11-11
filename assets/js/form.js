const params = new URLSearchParams(window.location.search).entries();
const arrayInputValues = [] 
const msgErrorEmail = document.querySelector('#email + .msgError');
const msgErrorPassword = document.querySelector('#password + .msgError');
const msgErrorConfPassword = document.querySelector('#confPassword + .msgError');

for(const [key, value] of params) {
  console.log(key, value)
  // arrayInputValues.push(value)
  // validInputs(key, value)
}

