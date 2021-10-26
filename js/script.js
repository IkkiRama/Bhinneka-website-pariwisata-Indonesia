let navMobile = document.querySelector(".navMobile")
let menu = document.querySelectorAll(".menu")

//hamburger togle
menu.forEach(m => {
    m.addEventListener("click", () => {
        navMobile.classList.toggle("show")
    })
})