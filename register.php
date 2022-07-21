<html>

<head>
    <title>register</title>
</head>
<link href="css/style.css" rel="stylesheet">

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->


            <a href="login.php">
                <h2 class="inactive underlineHover"> Sign In </h2>
            </a>
            <h2 class="active">Sign Up </h2>

            <!-- Icon -->
            <div class="fadeIn first">
            </div>

            <!-- Login Form -->

            <div style="color:red">
            <?php 
            error_reporting(0);
            $err = $_GET['err'];
            if($err == '000000'){
                echo "wrong password";
            }
            if($err == '0000000'){
                echo "Account not found";
            }
            ?>
            </div>
            <form action="php/register.php" method="post">
                <input type="text" id="name" class="fadeIn second" name="name" placeholder="name" required>
                <input type="email" id="email" class="fadeIn second" name="email" placeholder="email" required>
                <input type="text" id="number" class="fadeIn second" name="number" placeholder="phone number" required>
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
                <br><br>
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>
            <br><br><br>



        </div>
    </div>
</body>