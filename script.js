function switchForm() {  
    const loginForm = document.querySelector('.login-form');  
    const registerForm = document.querySelector('.register-form');  
    loginForm.classList.toggle('active');  
    registerForm.classList.toggle('active');  
}  

function login(event) {  
    event.preventDefault();  
    const email = document.getElementById("login-email").value;
    const password = document.getElementById("login-password").value;

}  

function register(event) {  
    event.preventDefault();  
    const name = document.getElementById('register-name').value;  
    const email = document.getElementById('register-email').value;  
    const age = document.getElementById('register-age').value;  
    const gender = document.getElementById('register-gender').value;  
    const password = document.getElementById('register-password').value;  
    const confirmPassword = document.getElementById('register-password-confirm').value;  

    if (password !== confirmPassword) {  
        alert("Passwords do not match!");  
        return;  
    }  

}