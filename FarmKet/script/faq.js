let shoppingCart = document.querySelector(".shopping-cart");

document.querySelector("#cart-btn").onclick = () => {
    shoppingCart.classList.toggle("active");
    loginForm.classList.remove("active");
    navbar.classList.remove("active");
}

let loginForm = document.querySelector(".login-form");

document.querySelector("#login-btn").onclick = () => {
    loginForm.classList.toggle("active");
    shoppingCart.classList.remove("active");
    navbar.classList.remove("active");
}

let navbar = document.querySelector(".navbar");

document.querySelector("#menu-btn").onclick = () => {
    navbar.classList.toggle("active");
    shoppingCart.classList.remove("active");
    loginForm.classList.remove("active");
}

window.onscroll = () => {
    shoppingCart.classList.remove("active");
    loginForm.classList.remove("active");
    navbar.classList.remove("active");
}

let faq = document.getElementsByClassName("faq-page");
let i;

for (i = 0; i < faq.length; i++) {
    faq[i].addEventListener("click", function () {
        this.classList.toggle("active");

        var body = this.nextElementSibling;
        if (body.style.display === "block") {
            body.style.display = "none";
        } else {
            body.style.display = "block";
            body.style.backgroundColor = "#fff";
        }
    });
}