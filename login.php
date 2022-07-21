<html>

<head>
    <title>Login</title>
</head>
<link href="css/style.css" rel="stylesheet">

<body>


    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> Sign In </h2>
            <a href="register.php">
                <h2 class="inactive underlineHover">Sign Up </h2>
            </a>

            <!-- Icon -->
            <div class="fadeIn first">
            </div>
            <div style="color:red">
            <?php 
            error_reporting(0);
            $err = $_GET['err'];
            if($err === '000000'){
                echo "wrong password";
            }
            if($err ==='0000000'){
                echo "Account not found";
            }
            ?>
            </div>
            <!-- Login Form -->
            <form action="php/login.php" method="post">
                <input type="email" id="email" class="fadeIn second" name="email" placeholder="email" required>

                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
                <br><br>
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <br><br><br>

        </div>
    </div>
</body>