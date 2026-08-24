let btn_teste = document.getElementById("teste")

btn_teste.addEventListener("click", () => {
    btn_teste.innerHTML = "Outro"
    btn_teste.style.backgroundColor = "black"
})

let jumbo = document.querySelector('#jumbo')

btn_teste.addEventListener("click", () => {
    jumbo.src = "imgs/coxinha.png"
    jumbo.setAttribute("src", "imgs/coxinha.png")
})

let header = document.querySelector('header')
let controle = false

btn_teste.addEventListener("click", () =>{
    if(controle == false){
        header.style.display = "none"
        controle = true
    } else {
        header.style.display = "flex"
        controle = false
    }

})

let cards = document.getElementsByClassName('card')

for (const item of cards) {
    item.addEventListener("mouseover", ()=>{
        item.style.backgroundColor = "black"
    })

   item.addEventListener("mouseout", ()=>{
       item.style.backgroundColor = "#0fa3b1"
    })

}

cards.forEach(element => {
    element.addEventListener("mouseover", ()=>{
        element.style.backgroundColor = "black"
    })
});


