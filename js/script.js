let navBurger = document.querySelector(".nav__burger");
let navBurgerSpan = document.querySelectorAll(".nav__burger span"),
    popup = document.querySelector(".popup"),
    navList = document.querySelector(".nav__list"),
    popupClose = document.querySelector(".popup__close"),
    introLink = document.querySelector(".intro__link"),
    popupContentItem = document.querySelectorAll(".popup-content-item");

navBurger.addEventListener("click", function() {
    navBurger.classList.toggle("active");
    navList.classList.toggle("active")
})


introLink.addEventListener("click", function() {
    popup.classList.add("active");
    popupClose.addEventListener("click", function() {
        popup.classList.remove("active"); 
    })
})

for (let i = 0; i < popupContentItem.length; i++) {
    const popupContentElement= popupContentItem[i];
    popupContentElement.addEventListener("click",function() {
        popup.classList.add("active");
        popupClose.addEventListener("click", function() {
            popup.classList.remove("active"); 
        })
    })
}
