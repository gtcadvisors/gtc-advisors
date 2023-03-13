
// filter section dropdowns
$(".caret-up").click((e)=>{
  e.target.classList.toggle("d-none")
  e.target.parentElement.children[2].classList.toggle("d-none")

  e.target.parentElement.parentElement.children[1].classList.toggle("d-none")
})

$(".caret-down").click((e)=>{
  e.target.classList.toggle("d-none")
  e.target.parentElement.children[1].classList.toggle("d-none")
  
  e.target.parentElement.parentElement.children[1].classList.toggle("d-none")
})

