<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }

?>
<?php include_once "header.php"?>
    <body>
        <div class="wrapper">
            <selection class = "form signup">
                <header>Cadastro</header>
                <form action="#" enctype="multipart/form-data">
                    <div class="error-txt"></div>
                    <div class="name-details">
                        <div class="field input">
                            <label>First Name</label>
                            <input type="text" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="field input">
                            <label>Last Name</label>
                            <input type="text" name="lname" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="field input">
                        <label>Email address</label>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password"  name="password" placeholder="Enter new password" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Select Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Cadastrar">
                    </div>
                    <div class="link">Already signed up?<a href="login.php">Login now</a></div>
                </form>
            </selection>
        </div>
        <script src="../View/javaScript/pass-show-hide.js"></script>
        <script src="./javaScript/signup.js"></script>
    </body>
</html>