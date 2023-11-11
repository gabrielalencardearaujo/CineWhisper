const params = new URLSearchParams(window.location.search).entries();
const arrayInputValues = [] 

for(const [key, value] of params) {
  console.log(key, value)
  arrayInputValues.push(value)
}
