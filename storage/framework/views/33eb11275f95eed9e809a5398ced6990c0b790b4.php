<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log_in</title>
</head>
<body>
    
    <h1>Log in sign up page</h1>
    <?php if($errors->has('email')): ?>
    <div class="alert alert-danger"><?php echo e($errors->first('email')); ?></div>
<?php endif; ?>
    <form action="<?php echo e(url('/')); ?>/login" method="post">
        <?php echo csrf_field(); ?>
    <label for="email">Enter your Email</label>
    <input type="text" name="email" id="email" placeholder="Enter your Email here">
    <label for="email">Enter your Password</label>
    <input type="password" name="password" id="password" placeholder="Enter your Password here">
    <button>Submit</button>
    <a href="/register"> <p>register here</p></a>
    
</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\login_signup\resources\views/welcome.blade.php ENDPATH**/ ?>