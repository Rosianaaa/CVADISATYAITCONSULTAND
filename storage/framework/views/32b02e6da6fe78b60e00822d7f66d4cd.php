<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in</title>
    <link rel="stylesheet" href="assets/css/logcss.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="<?php echo e(route('postlogin')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

                <h1>Sign in</h1>
                <hr>
                <p>Sign in Sekarang</p>
                <label for="">Name</label>
                <input type="text" class="form-control" name="username"placeholder="username">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email"placeholder="example@gmail.com">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password"placeholder="Password">
                <button>Sign in</button>
                <button>Log in</button>
                <p>
                    <a href="#">Forgot Password?</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="assets/images/signinn.jpg" alt="">
        </div>
    </div>
</body>

</html><?php /**PATH C:\Users\LENOVO SLIM 1\Documents\applications\meblood\resources\views/index.blade.php ENDPATH**/ ?>