<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login || Stok Barang</title>
    <!-- Link to Styleshit -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/resources/css/stylesheet.css">
    <!-- Link to font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="root">
        <div class="container">
            <nav>
                <div class="container-brand">
                    <h2>Arshee</h2>
                </div>
            </nav>
            <main>
                <div class="main">
                    <div class="judul">
                        <h1>Login Form</h1>
                        <p>Hey, Enter your Username and Password to login</p>
                    </div>
                    <div class="container-form">
                        <form action="<?= base_url('login/action_login');?>" method="post" class="form">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" class="focusInput" placeholder="Username..." required>
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" class="focusInput" placeholder="Password..." required>
                            <button type='submit' name='submit' value='login' class='button'>Login</button>
                        </form>                        
                        <!--<p>Forgot Password?? <a href="#" class="forgot-password">Click Here</a></p>-->
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>