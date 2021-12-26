const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});

function validation(){
    var email = document.getElementById('email').value;
    var password = document.getElementById('pass').value;

    var emailcheck = /^[A-Za-z0-9_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z]{2,6}$/
    var passwordcheck = /^[A-Z]+[A-Za-z.!@#$%^&*-+]+[0-9]{3}$/


    if(!emailcheck.test(email)) {
        alert("**JU LUTEM SHKRUAJENI MIRE EMAILIN**")
    } 
    if(!passwordcheck.test(password)) {
        alert("**PASSWORD DUHET TE PERMBAJE SHKRONJEN E PARE TE MADHE DHE 3 NUMRA NE FUND**")
    
    } 
    else if (emailcheck.test(email) && passwordcheck.test(password)) {
        window.location = "../general components/home1,1.html"
        alert('korrekt');
    }

}