const formSubmit = document.querySelector('#formSignUp');

const validFieldsInput = {
  email: {
    regex: '^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.([a-z]+)?$',
    error: 'Email Inválido!',
  },
  password: {
    regex: '(?=.*[A-Z])(?=.*[!@#$&*_-])(?=.*[0-9].*[0-9])(?=.*[a-z]).{8}$',
    error: 'A senha deve conter letra maiuscula, letra minuscula, pelo menos dois números e 1 caracter especial.',
    value: '',
  },
  confPassword: {
    error: 'As senhas devem ser iguais',
  }
}

// Inputs Validation:
function validInputs(key, value) {
  const msgError = document.querySelector(`#${key} + .msgError`);
  msgError.textContent = '';

  const mountRegex = new RegExp(validFieldsInput[key]?.regex, 'i');
  const validRegex = mountRegex.test(value.trim());
  if(key == 'password') validFieldsInput[key].value = value;

  if(key == 'confPassword' && validFieldsInput[key].value != value) return msgError.textContent = validFieldsInput[key].error;

  if(!validRegex) return msgError.textContent = validFieldsInput[key].error;
  else return true
}

onsubmit = (event) => {
  event.preventDefault();
  const allInputs = document.querySelectorAll('input')

  for(const input of allInputs) {
    if(validInputs(input.name, input.value) !== true) return;
  }

  if(allInputs[2].value != allInputs[3].value) return;

  event.currentTarget.submit();
}
