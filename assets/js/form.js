const params = new URLSearchParams(window.location.search);
console.log(params)
for(const key of params.values()) {
  console.log(key)
}