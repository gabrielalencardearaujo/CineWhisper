const params = new URLSearchParams(window.location.search)

for(const key of params.values()) {
  console.log(key)
}