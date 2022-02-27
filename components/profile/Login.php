

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="./css/log_in.css">
    <script src="https://kit.fontawesome.com/de3305a7cd.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width">
    <title>Sign in</title>
    <style>
        
@media screen and (max-width: 500px) {
    .container {
        box-shadow: 0 0px 0px white, 0 0px 0px white;
        width: 100%;
        max-width: 80%;
        min-height: 100%;
    }
    body {
        background: white;
        justify-content: normal;
        margin: 0px;
    }
    form {
        background-color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 194px;
        height: 50%;
        text-align: center;
        padding: 200px 30px 0px 30px;
    }
    .sign-in-container {
        left: 0;
        width: 100%;
        z-index: 2;
    }
    .form-container {
        position: absolute;
        top: 0;
        height: 100%;
        transition: all 0.6s ease-in-out;
    }
    .overlay-container {
        display: none;
    }
    .overlay-right {
        display: none;
    }
    .overlay-panel {
        padding: 0 20px;
    }
    .signup_hide {
        display: unset;
        font-size: 30px;
        color: var(--green);
    }
    .backhome_hide {
        visibility: visible;
        color: black;
        font-size: 12px;
        margin-top: 10px;
    }
}
    </style>
</head>

<body>

    <div class="container" id="container">
       
        <div class="form-container sign-in-container">
            <form action="Login_Validation.php" method="POST">
                <h1>Log in<a class="signup_hide" href="./Sign up.php"> |  Sign Up</a></h1>
                <div class="social-container">
                    <a href="#" class="social" onclick="href='https://www.facebook.com/'"><i
                        class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social" onclick="href='https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=1209600&osid=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin'"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social" onclick="href='https://www.linkedin.com/'"><i
                            class="fab fa-linkedin-in"></i></a>
                        </div>
                        <span>or use your account</span>
                        <input name="email" type="email" placeholder="Email" />
                        <input name="password" type="password" placeholder="Password" />
                <button class="login" name="login" onclick="validation()">Sign In</button>
                <a class="backhome_hide" href="../general components/" >go back home</a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Hej, marakli</h1>
                    <p>Kliko - "Sign up" për tu bërë pjesë e grupit ma të qartë #Maraklit'biciklave</p>
                    
                    <button class="ghost" onclick="window.location.href='../profile/Sign up.php'" id="signUp">Sign
                        Up</button>
                    <a href="../general components/" style="color: white;">go back home</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <script src="./js/login.js"></script>
    </body>
    
</html>