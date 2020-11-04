function obterLinks(){
  let linkModal = document.querySelectorAll("a[href='#modalConversao']")
  $(linkModal).attr("data-toggle", "modal")
}
obterLinks()