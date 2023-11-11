const params = new URLSearchParams(window.location.search).values();
console.log(params)

for(const value of params) {
  console.log(value)
}
// for(const key of params.values()) {
//   console.log(key)
// }