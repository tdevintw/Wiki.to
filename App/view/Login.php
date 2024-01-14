<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/header_footer.php'; ?>
    <title>PeoplePerTask</title>
</head>

<body>


    <?php include 'includes/navbar.php'; ?>
    <div id="container"
        style="display:flex;flex-direction:column;align-items:center;margin-top:40px;margin-bottom:40px;">
        <h2>Login In</h2>
        <form method="post"
            style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;padding:70px;text-align:center;border-radius:10px">
            <div class="form-group">
                <label style="margin-bottom:10px;" for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label style="margin-bottom:10px;" for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
            <div style="margin-bottom:20px;">
            <?php if(isset($errors['fill_all'])){
                    echo $errors['fill_all'];
                } ?>
            </div>
            <div style="margin-bottom:20px;">
            <?php if(isset($errors['incorrect_password'])){
                    echo $errors['incorrect_password'];
                } ?>
            </div>
            <div style="margin-bottom:20px;">
            <?php if(isset($errors['doesnt_exist'])){
                    echo $errors['doesnt_exist'];
                } ?>
            </div>
            <button name="submit" type="submit" class="btn text-white rounded-pill btn-outline-primary"
                style="background-color: #36454F ; width:164px; height:39px" id="submit">Submit</button>
        </form>
        <a class="btn text-white rounded-pill btn-outline-primary"
            style="background-color: #36454F ; width:200px; height:39px;margin-top:20px;" href="Signup">create new account !</a>
    </div>
    <?php include 'includes/footer.php'; ?>

</body>

</html>