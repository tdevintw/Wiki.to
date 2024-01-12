<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/header_footer.php'; ?>
    <link rel="stylesheet" href="css/sign.css">
    <title>PeoplePerTask</title>
    <style>
    section {
        align-items: center;
        display: flex;
        justify-content: center;
        flex-direction: column;
        background: white;
        /* margin: 10%; */
    }

    .container-sign {
        position: relative;
        max-width: 100%;
        /* min-height: 480px; */
        min-height: 674px;
        background-color: white;
        /* border-radius: 10px; */
        overflow: hidden;
        /* box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.25); */
    }

    .btn:hover {
        background-color: white;
    }

    .sign-up,
    .sign-in {
        position: absolute;
        top: 0;
        height: 100%;
        transition: all 0.6s ease-in-out;
    }

    .sign-up {
        width: 50%;
        opacity: 0;
        z-index: 1;
        position: absolute;
        display: flex;
        padding: -157px;
        /* top: 0; */
        left: 77px;
        height: 100%;
        transition: all 0.6s ease-in-out;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }


    .sign-in {
        position: absolute;
        width: 100%;
        display: flex;
        padding: 130px;
        justify-content: center;
        /* align-items: center; */
        z-index: 2;
        /* margin: 38px 111px; */
        flex-direction: column;
    }

    #signIn,
    #signUp {
        background-color: transparent;
        border: 2px solid white;
    }


    .container-sign.right-panel-active .sign-in {
        transform: translateX(100%);
        opacity: 0;
    }

    .container-sign.right-panel-active .sign-up {
        transform: translateX(100%);
        opacity: 1;
        z-index: 5;
    }

    .overlay-container {
        position: absolute;
        top: 0;
        left: 50%;
        width: 50%;
        height: 100%;
        overflow: hidden;
        transition: transform 0.6s ease-in-out;
        z-index: 100;
    }

    .container-sign.right-panel-active .overlay-container {
        transform: translateX(-100%);
    }

    .overlay {
        position: relative;
        color: white;
        background: #36454F;
        left: -100%;
        height: 100%;
        width: 200%;
    }

    .container-sign.right-panel-active .overlay {
        transform: translateX(50%);
    }

    .overlay-right,
    .overlay-left {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 40px;
        text-align: center;
        top: 0;
        height: 100%;
        width: 50%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .overlay-left {
        transform: translateX(-20%);
    }

    .overlay-right {
        right: 0;
        transform: translateX(0%);
    }

    .container-sign.right-panel-active .overlay-left {
        transform: translateX(0);
    }

    .container-sign.right-panel-active .overlay-right {
        transform: translateX(20%);
    }

    .icons {
        margin: 20px 0;
    }

    .mobile {
        display: none;
    }

    .dark-mode {
        background-color: #121212;
        color: #ffffff;
    }


    .dark-mode a {
        color: #ffffff;
    }


    .dark-mode .cta-text span {
        color: #ffffff;
    }

    .dark-mode .footer-section p {
        color: #ffffff;
    }

    .dark-mode .footer-section ul li a {
        color: #ffffff;
    }

    .dark-mode .container-sign {

        background-color: black;
    }

    /* / End of dark mode styles */
    @media screen and (max-width : 992px) {
        #dark-mode-toggle.fas.fa-moon.ps-3 {
            padding-top: 20px;
            padding-left: 0px !important;
        }

        #dark-mode-toggle.fas.ps-3.fa-sun {
            padding-top: 20px;
            padding-left: 0px !important;
        }
    }

    @media screen and (max-width: 700px) {

        .overlay-right,
        .overlay {
            display: none;
        }

        .mobile {
            display: inline-block;
        }

        .sign-up {
            left: -159px;
        }
    }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>

    <section class="container-sign" id="main">
        <div class="sign-up" id="sign-in">
            <h2>Create Account</h2>
            <span>or use your email for registration</span>
            <form class="w-50" method="post" style="display:flex;flex-direction:column;">
                    <div class="mb-1">
                        <label for="name" style="font-size: 12px;" class="form-label">Username</label>
                    </div>
                    <div class="mb-1">
                        <input name="name" id="name" placeholder="username">
                    </div>
                    <div class="mb-1">
                        <label for="email" class="form-label" style="font-size: 12px;">Email</label>
                    </div>
                    <div class="mb-1">
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="mb-1">
                        <label for="password" class="form-label" style="font-size: 12px;">Password</label>
                    </div>
                    <div class="mb-1">
                        <input type="password" name="password" id="password" placeholder="PassWord">
                    </div>
                    <div class="mb-1">
                        <label for="password2" class="form-label" style="font-size: 12px;">confirm Password</label>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password2" id="password2" placeholder="confirm password">
                    </div>
                    <div>
                        <button name="submit" type="submit" class="btn text-white rounded-pill"
                            style="background-color: #36454F ; width:164px; height:39px" id="submit">Submit</button>
                    </div>
                    <span class="mobile"><a href="signInMobile.php">sign in</a></span>
                </form>
        </div>
        <div class="sign-in" id="sign-in">
            <h2>Log In</h2>
            <form class="w-50" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label" style="font-size: 12px;">Email</label>
                    <input name="email2" type="email" style="width: 80%;"
                        class="form-control border-bottom border-0 border" id="exampleInputEmail2"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label" style="font-size: 12px;">Password</label>
                    <input name="password2" type="password" style="width: 80%;"
                        class="form-control border-bottom border-0 border" id="exampleInputPassword2">
                </div>
                <span class="mobile"><a href="signmobile.php">sign up</a></span>
                <button name="submit2" type="submit" class="btn text-white rounded-pill "
                    style="background-color: #36454F; width:164px; height:39px">Submit</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <h2>Welcome Back!</h2>
                    <p>To keep connected with us please login with your personal info</p>
                    <button type="button" class="btn text-white rounded-pill"
                        style="width:164px; height:39px" id="signIn">Log In</button>
                </div>
                <div class="overlay-right">
                    <h2>Hello, Friend!</h2>
                    <p>Enter your personal details and start your journey with us</p>
                    <button type="button" class="btn text-white rounded-pill"
                        style="width:164px; height:39px" id="signUp">Sign up</button>
                </div>
            </div>
        </div>
    </section>
    <?php include 'includes/footer.php'; ?>



    <script src="js/sign.js"></script>
</body>

</html>