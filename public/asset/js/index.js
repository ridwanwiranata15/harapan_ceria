document.querySelector("nav").children[1].addEventListener("click", ()=>{
    document.querySelector(".menu-user").classList.toggle('show-user-menu');
})

document.querySelector(".menu-user").querySelector("ul").children[2].addEventListener("click", ()=>{
    document.querySelector(".menu-user").querySelector("ul").children[3].style.display = "block";
})
const Menu = document.querySelector(".menu-user").querySelector("ul").querySelector("ul").children;

Menu[0].addEventListener("click", ()=>{
    document.location.href = "/";
})
Menu[1].addEventListener("click", ()=>{
    document.location.href = "/pasien";
})
Menu[2].addEventListener("click", ()=>{
    document.location.href = "jadwal.html";
})
Menu[3].addEventListener("click", ()=>{
    document.location.href = "poliklinik.html";
})
Menu[4].addEventListener("click", ()=>{
    document.location.href = "pendaftaran.html";
})
Menu[5].addEventListener("click", ()=>{
    document.location.href = "medis.html";
})
Menu[6].addEventListener("click", ()=>{
    document.location.href = "obat.html";
})
Menu[7].addEventListener("click", ()=>{
    document.location.href = "rawat.html";
})

