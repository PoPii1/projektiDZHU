
const loginForm = document.getElementById("loginForm");
if (loginForm) {
    loginForm.addEventListener("submit", function(e) {
        const user = document.getElementById("loginUsername").value;
        const pass = document.getElementById("loginPassword").value;
        if (user === "" || pass === "") {
            alert("Ju lutem plotesoni te gjitha fushat!");
            e.preventDefault();
        }
    });
}


const registerForm = document.getElementById("registerForm");
if (registerForm) {
    registerForm.addEventListener("submit", function(e) {
        const user = document.getElementById("regUsername").value;
        const email = document.getElementById("regEmail").value;
        const pass = document.getElementById("regPassword").value;
        const conf = document.getElementById("regConfirm").value;

        if (user === "" || email === "" || pass === "" || conf === "") {
            alert("Ju lutem plotesoni te gjitha fushat!");
            e.preventDefault();
        } else if (pass.length < 6) {
            alert("Password duhet te kete te pakten 6 karaktere!");
            e.preventDefault();
        } else if (pass !== conf) {
            alert("Password-et nuk perputhen!");
            e.preventDefault();
        }
    });
}



const contactForm = document.getElementById("contactForm");
if (contactForm) {
    contactForm.addEventListener("submit", function(e) {
        const name = document.getElementById("contactName").value;
        const email = document.getElementById("contactEmail").value;
        const msg = document.getElementById("contactMessage").value;

        if (name === "" || email === "" || msg === "") {
            alert("Ju lutem plotesoni te gjitha fushat!");
            e.preventDefault();
        }
    });
}
