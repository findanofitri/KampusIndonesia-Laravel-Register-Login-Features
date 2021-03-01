
function validateForm(form) {
    var email       = document.getElementById("email").value;
    var password    = document.getElementById("password").value;
    
    const data = {email: email, password: password};
    fetch('/login/', {
        method: 'POST',
        headers:  {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
    .then(response => response.json())
    .then(function(data) {
        console.log('success',  data)
    })
    .catch((error) => {
        console.error('Error: ', error);
    })
    
    // check empty email field
    // if(email == "") {
    //     document.getElementById("blankMsg").innerHTML = "*Masukkan alamat email Anda!";
    //     return false;
    // }

    // check empty password field
    // if(password1 == "") {
    //     document.getElementById("message1").innerHTML = "*Masukkan password Anda!";
    //     return false;
    // }

     // minimum password length validation 
    //  if(password1.length < 8) {
    //     document.getElementById("message1").innerHTML = "*Panjang password harus minimal 8 karakter";
    //     return false;
    // }

     // maximum length of password validation
    //  if(password1.length > 15) {
    //     document.getElementById("message1").innerHTML = "*Panjang password tidak lebih dari 15 karakter";
    //     return false;
    // }

    // check empty confirm password field
    // if(password2 == "") {
    //     document.getElementById("message2").innerHTML = "*Massukan password Anda dengan benar!";
    //     return false;
    // }

    // if(password1 != password2) {
    //     document.getElementById("message2").innerHTML = "*Password tidak sama";
    //     return false;
    // }

    // confirm checkbox terms and conditions
    // console.log("checkbox chacked is ", form.agree.checked);
    // if(!form.agree.checked) {
    //     document.getElementById('agree-chk').style.visibility='visible';
    //     return false;
    // } else {
    //     document.getElementById('agree-chk').style.visibility='hidden';
    //     return true;
    // }
}
