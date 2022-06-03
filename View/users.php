<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php include_once "header.php"?>
<body>
    <div class="wrapper">
        <selection class = "users">
            <header>
                <?php 
                include_once "../Model/config.php";
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if(mysqli_num_rows($sql)>0){
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <div class="content">
                    <img src="../Controller/images/<?php echo $row['img'] ?>" alt="" width="50" height="50">
                    <div class="details">
                        <span><?php echo $row['fname'] . " ".$row['lname'] ?></span>
                        <p><?php $row['status'] ?></p>
                    </div>
                </div>
                <a href="../Controller/logout.php?logout_id<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select an user to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i></button> 
            </div>
            <div class="users-list">
            
            </div>
        </selection>

    </div>
    <script src="./javaScript/users.js"></script>
</body>
