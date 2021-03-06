<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo URLROOT ?>/public/assets/css/register.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Log In</title>
    </head>
    <body>
        <div class="flex justify-center items-center h-screen">
            <div class="login px-7 py-10">
                <h1 class="block py-4 text-white text-2xl font-400 text-center">Welcome Back</h1>
                <div class="text-red-300 text-center font-mono mb-4"><?= $data['errors'] ?></div>
                <?php
                    if(isset($_GET['registred'])){
                        if($_GET['registred'] == 'success'){
                            echo '<div class="text-green-300 text-center font-mono mb-4">Account Created Successfully Enter Your Credintials To Log In</div>';
                        }
                    }
                ?>
                <form action="<?php echo URLROOT ?>/users/login" method="post" id="loginForm">

                    <label for="email" class="font-medium">Enter Your Email</label>
                    <input type="email" name="email" id="email" placeholder="example@gmail.com" class="block mt-4 mb-1 p-3 w-full">
                    <div id="emailErrors" class="text-red-300 font-mono my-2"></div>

                    <label for="password" class="font-medium">Enter Your Password</label>
                    <input type="password" name="pwd" id="pwd" placeholder="example123" class="block mt-4 mb-1 p-3 w-full">
                    <div id="pwdErrors" class="text-red-300 font-mono my-2"></div>

                    <input type="submit" name="login" value="Sign In" class="block my-5 text-dark font-medium cursor-pointer">
                </form>
                <ul class="flex items-center w-full py-3">
                    <li class="child1"></li>
                    <li class="child2 font-medium">or</li>
                    <li class="child3"></li>
                </ul> 
                <div class="flex flex-col items-center py-3 options">
                    <span>Don't have an account ?</span>
                    <a href="register" class="text-xl">sign up</a>
                </div>
            </div>
        </div>
        <script src="<?= URLROOT ?>/public/assets/js/login.js"></script>
    </body>
</html>