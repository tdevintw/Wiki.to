<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/header_footer.php'; ?>
    <title>PeoplePerTask</title>
    <style>
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
    }

    #signIn,
    #signUp {
        background-color: transparent;
        border: 2px solid white;
    }

    a {
        text-decoration: none;
        color: white
    }

    input {
        border: 1px solid black;
    }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <section class="container-sign mt-5">
        <div style="display:flex;flex-direction:column;width:100%;align-items:center;" class="sign-up">
            <h2>Create Account</h2>
            <form class="p-5" method="post"
                style="display:flex;flex-direction:column;align-items:center;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;gap:0">
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

            </form>
            <div style="margin-top:20px;">
                <a class="btn text-white rounded-pill"
                    style="background-color: #36454F ; width:fit-content;padding:10px;padding-right:30px;padding-left:30px;"
                        href="login.php">already have account !</a>
            </div>
        </div>
    </section>
    <?php include 'includes/footer.php'; ?>
</body>

</html>