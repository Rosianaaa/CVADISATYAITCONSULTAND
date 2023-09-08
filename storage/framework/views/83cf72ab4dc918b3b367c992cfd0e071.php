<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login MeBlood</title>
    <link rel="stylesheet" href="assets/css/logcss.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="/login" method="post">
                <?php echo csrf_field(); ?>
                <h1>Login</h1>
                <hr>
                <p>MeBlood</p>
                <label for="">Username</label>
                <input type="text" placeholder="username" name="email" >
                <label for="">Password</label>
                <input type="password" placeholder="Password" name="password">
                <button type="submit">Login</button>
                <p>Need an account?
                    <a href="/">Sign In</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="assets/images/signinn.jpg" alt="">
        </div>
    </div>
</body>

</html><?php /**PATH C:\Users\LENOVO SLIM 1\Documents\CVADISATYAITCONSULTAND\meblood\resources\views/login.blade.php ENDPATH**/ ?>