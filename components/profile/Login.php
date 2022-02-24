<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/login.css">
    <script src="https://kit.fontawesome.com/de3305a7cd.js" crossorigin="anonymous"></script>
    <title>Sign in</title>
</head>

<body>
    
    <div class="container" id="container">
       
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social" onclick="href='https://www.facebook.com/'"><i
                        class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social" onclick="href='https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=1209600&osid=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin'"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social" onclick="href='https://www.linkedin.com/'"><i
                            class="fab fa-linkedin-in"></i></a>
                        </div>
                        <span>or use your account</span>
                        <input id="email" type="email" placeholder="Email" />
                        <input id="pass" type="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button id="sign" onclick="validation()">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hej, marakli</h1>
                    <p>Kliko - "Sign up" për tu bërë pjesë e grupit ma të qartë #Maraklit'biciklave</p>
                    
                    <button class="ghost" onclick="window.location.href='../profile/Sign up.html'" id="signUp">Sign
                        Up</button>
                        
                    </div>
                </div>
            </div>
        </div>
        <script src="./js/login.js"></script>
    </body>
    
</html>