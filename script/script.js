const forms = document.querySelector("#forms");
const loginForm = document.querySelector("#login-form");
const registerForm = document.querySelector("#register-form");

function show_forms(){
    try{
        forms.style.display = "block";
        loginForm.style.display = "block";
        registerForm.style.display = "none"; 
    }catch{

    }
    
}

function hide_forms(){
    try{
        forms.style.display = "none";
        loginForm.style.display = "block";
        registerForm.style.display = "none";
    }catch{

    }
    
}

function show_register_form(){
    loginForm.style.display = "none";
    registerForm.style.display = "block";
}

const burger = document.querySelector(".burger");
const nav = document.querySelector("nav > ul");
const closeMobileMenu = document.querySelector(".close-mobmenu-btn");

closeMobileMenu.addEventListener("click", function (){nav.style.display = "none"});

burger.addEventListener("click", function (){
    nav.style.display = "flex";
});
