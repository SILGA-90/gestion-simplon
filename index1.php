<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="simplon-appli/styles/index1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>LOGGIN-SIGNUP</title>
</head>
<body>
    <div class="container">
        <img src="simplon-appli/fonts/undraw_secure_login_pdn4.svg" class="img img-1" alt="">
        <img src="simplon-appli/fonts/undraw_Selecting_team_re_ndkb.svg" class="img img-2" alt="">
        <div class="login-signup-box login loginSignUp" id="loginSignUp">
       
            <div class="inner-box" id="signIn">
                <button class="toggle-button " id="signUpBtn">
                    <i class="fa fa-angle-left"></i>
                    <span>SIGN UP</span>
                </button>
                <form action="login.php" method="POST">
                <div style="width: 100%;"> 
                    <p>SIGN IN</p>
                    <div class="input-box">
                        <img src="simplon-appli/fonts/Email_52px.png" alt="">
                        <input type="email" placeholder="ENTER YOUR EMAIL" name="email">
                    </div>
                    <div class="input-box">
                        <img src="simplon-appli/fonts/Lock_52px.png" alt="">
                        <input type="password" placeholder="ENTER YOUR PASSWORD" name="password">
                    </div>    
                    <div class="button-box signInBtn-Box">
                        <button>SIGN IN</button>
                    </div>    
                </div>
                </form>
            </div>
            <div class="inner-box" id="signUp" style="transform: scale(0);">
                <button class="toggle-button" id="signInBtn">
                    <i class="fa fa-angle-right"></i>
                    <span>SIGN IN</span>
                </button>
                <form action="traitement.php" method="POST">
                <div style="width: 100%;">
                    <p>SIGN UP</p>
                    <div class="input-box">
                        <img src="simplon-appli/fonts/Add User Male_48px.png" alt="">
                        <input type="text" name="name" placeholder="ENTER YOUR NAME" required>
                    </div>
                    <div class="input-box">
                        <img src="simplon-appli/fonts/Add User Male_52px.png" alt="">
                        <input type="text" name="username" placeholder="ENTER YOUR USERNAME"required >
                    </div>
                    <div class="input-box">
                        <img src="simplon-appli/fonts/Email_52px.png" alt="">
                        <input type="email" name="email" placeholder="ENTER YOUR EMAIL" required>
                    </div>
                    <div class="input-box">
                        <img src="simplon-appli/fonts/Lock_52px.png" alt="">
                        <input type="password" name="password" placeholder="ENTER YOUR PASSWORD" id="password" required>
                    </div>    
                    <div class="input-box">
                        <img src="simplon-appli/fonts/Lock_52px.png" alt="">
                        <input type="password" placeholder="CONFIRM PASSWORD" id="confirm_password">
                        <span id='message'></span>
                    </div>  
                    <div class="button-box signInBtn-Box">
                        <button>SIGN UP</button>
                    </div>    
                </div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        // LOGIN SIGN UP-BOX
        var loginSignUp = document.getElementById('loginSignUp');

        // FOR BUTTONS
        var signUpBtn = document.getElementById('signUpBtn');
        var signInBtn = document.getElementById('signInBtn');
        // INNER BOX FOR LOGIN AND SIGNUP
        var signUp = document.getElementById('signUp');
        var signIn = document.getElementById('signIn');
        // IMAGES
        var img1 = document.querySelector('.img-1');
        var img2 = document.querySelector('.img-2');
        // CLICK EVENT FOR SIGNUP
        signUpBtn.addEventListener('click', function(){
            loginSignUp.classList.add('register');
            signIn.style.transform = 'scale(0)';
            setTimeout(function(){
                signIn.style.display = 'none';
                signUp.style.transform = 'scale(1)';
            },1200);
            setTimeout(function(){
                img1.style.transform = 'translateY(-50%) scale(0)';
                img2.style.transform = 'translateY(-50%) scale(1)';
            },300)
        })

        // CLICK EVENT FOR SIGN-IN 
        signInBtn.addEventListener('click', function(){
            loginSignUp.classList.remove('register');
            signUp.style.transform = 'scale(0)';
            signIn.style.display = 'flex';
            setTimeout(function(){
                signIn.style.transform = 'scale(1)';
            },1200)

            setTimeout(function(){
                img1.style.transform = 'translateY(-50%) scale(1)';
                img2.style.transform = 'translateY(-50%) scale(0)';
            },300)
        });

        // TO CONFIRM PASSWORD
        $('#password, #confirm_password').on('keyup', function () {
            if ($('#password').val() == $('#confirm_password').val()) {
        $('#message').html('Matching').css('color', 'green');
        } else 
           { $('#message').html('Not Matching').css('color', '#ce0033');
            }
        });
        $('form').on('submit',function(e){
            if ($('#password').val() != $('#confirm_password').val()){
                e.preventDefault();
            }
            })

    </script>
</body>
</html>