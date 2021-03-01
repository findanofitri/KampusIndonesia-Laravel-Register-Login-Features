const btn = document.getElementById('btn-login');
btn.onclick = function hello() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var token = document.getElementById("_token").value;


    const data = { email: email, password: password, _token: token };
    fetch('/loginPost', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })

 
        // .then(response => response.json())
        .then(res => res.text())
        .then(text => console.log(text))
        .then(function (data) {
            console.log('success', data)
        })
        .catch((error) => {
            console.error('Error: ', error);
        })
}

 

// const loginForm = document.getElementById("login-form");
// const btnLogin = document.getElementById("btn-login");

// btnLogin.addEventListener("click", (e) => {
//     e.preventDefault();
//     const email    = loginForm.email.value;
//     const password = loginForm.password.value;
//     const token    = loginForm._token.value

//     if (email === "admin@email" && password === "admin") {
//         alert("You have successfully logged in.");
//         location=('action.php');
//     } else {
//         alert("Invalid email or password");
//         location.reload();
//     }
// })