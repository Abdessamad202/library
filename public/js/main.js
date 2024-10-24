let cansel = document.querySelector(".cansel");
let bookSide = document.querySelector(".book-side");
let scrollSection = document.querySelector(".scroll-section");
cansel.addEventListener("click",function(){
    bookSide.classList.add("toggle");
    scrollSection.classList.add("toggle");
});
scrollSection.classList.toggle("toggle");
let show = document.querySelector(".show");
show.addEventListener("click",function(){
    bookSide.classList.remove("toggle");
    scrollSection.classList.remove("toggle");
})