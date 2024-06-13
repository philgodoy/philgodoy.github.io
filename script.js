const menuIcon = document.getElementById("menu-icon");
const navMenu = document.querySelector(".navbar")
const sections = document.querySelectorAll(".section");
const navLinks = document.querySelectorAll(".header .navbar a");

window.onscroll = () => {

    sections.forEach(section => {

        const top = window.scrollY;
        const offset = section.offsetTop - 150;
        const height = section.offsetHeight;
        const id = section.getAttribute("id")

        if(top >= offset && top < offset + height){
            navLinks.forEach(link => {
                link.classList.remove("active");
                document.querySelector(".header .navbar a[href*=" + id + ']').classList.add("active")
            })
        }
    })
}

menuIcon.onclick = () => {
    menuIcon.classList.toggle("bx-x");
    navMenu.classList.toggle("active");
}