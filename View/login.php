<?php include_once "header.php"?>
    <body>
        <div class="wrapper">
            <selection class = "form login">
                <header>Login</header>
                <form action="#">
                    <div class="error-txt"></div>
                    <div class="field input">
                        <label>Email address</label>
                        <input type="text" name="email" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter your password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Cadastrar">
                    </div>
                    <div class="link">Not yet signed up?<a href="cadastro.php">Signup now</a></div>
                </form>
            </selection>
        </div>
        <script src="./javaScript/pass-show-hide.js"></script>
        <script src="./javaScript/login.js"></script>
    </body>
</html>