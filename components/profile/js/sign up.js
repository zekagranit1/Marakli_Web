function validation() {

    var emri = document.getElementById('emri').value;
    var mbiemri = document.getElementById('mbiemri').value;
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var mosha = document.getElementById('mosha').value;
    var konfirm = document.getElementById('konfirm').value;
    var card = document.getElementById('card').value;

    var emricheck = /^[A-Z][a-z]{0,}/
    var mbiemricheck = /^[A-Z][a-z]{0,}/
    var usercheck = /^[A-Za-z0-9.]{8,15}$/
    var emailcheck = /^[A-Za-z0-9_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z]{2,6}$/
    var passwordcheck = /^[A-Z]+[A-Za-z.!@#$%^&*-+]+[0-9]{3}$/
    var Creditcardcheck = /^[0-9]{16}$/

    if (!emricheck.test(emri)) {

        alert("**EMRI DUHET TE PERMBAJE SHKORNJEN E PARE TE MADHE DHE VETEM SHKRONJA**")
    }

    if (!mbiemricheck.test(mbiemri)) {

        alert("**MBIEMRI DUHET TE PERMBAJE SHKORNJEN E PARE TE MADHE DHE VETEM SHKRONJA**")
    }

    if (!usercheck.test(username)) {

        alert("**USERNAME DUHET TE PERMBAJE TE PAKTEN 8 SHKRONJA DHE ME SE SHUMTI 15**")
    }

    if (!emailcheck.test(email)) {

        alert("**JU LUTEM SHKRUAJENI MIRE EMAILIN**")
    }

    if (!passwordcheck.test(password)) {

        alert("**PASSWORD DUHET TE PERMBAJE SHKRONJEN E PARE TE MADHE DHE 3 NUMRA NE FUND**")
    }
    if (password != konfirm) {

        alert("**PASSWORD DUHET TE JETE I BARABART ME PASWORD CONFIRM**")
    }
    if (mosha < 18) {

        alert("**Mosha duhet te jete me e madhe se 17 vjeq**")
    }
    if (!Creditcardcheck.text(card)) {
        alert("**CreditCard duhet te permbaj 16 numra**")
    }
}